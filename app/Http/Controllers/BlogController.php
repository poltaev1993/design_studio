<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Order;

use App\Repositories\BlogsRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function getIndex($slug)
    {
        $instagram_blogs = Blog::getInstagramAvailableSections();
        $is_instagram_available = in_array($slug, $instagram_blogs);

        $category = $this->getCategoryBySlug($slug);

        $is_instagram_enabled = false;
        if ($is_instagram_available) {
            $is_instagram_enabled = $category->is_instagram_enabled;
        }

        $blogs = $category->blogs()->sorted($category->id)->paginate(12);

        $active = 'blog';
        $sub_active = 'all';

        return view('admin.blogs.index',
            compact(
                'category', 'blogs', 'active', 'sub_active',
                'is_instagram_available', 'is_instagram_enabled'
            )
        );
    }

    public function getAll()
    {
        return Blog::sorted()->get();
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $active = 'blog';
        $sub_active = 'add';

        return view('admin.blogs.add', compact('category', 'active', 'sub_active'));
    }

    public function postAdd($slug, BlogsRepository $blog, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        if ( $new_id = $blog->create($category, $request) )
        {
            $order = $category->orders()->blog($category->id);

            if (is_array($order))
            {
                array_unshift($order, $new_id);
            }
            else
            {
                $order = [$new_id];
            }

            Order::where('category_id', $category->id)->where('type', 'blog')->update(['positions' => json_encode($order)]);

            return redirect()->to('admin/control/' . $slug . '/blog');
        }

        return redirect()->back()->withInput();
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $blog = $category->blogs()->find($id);

        $active = 'blog';
        $sub_active = '';

        return view('admin.blogs.edit', compact('category', 'blog', 'active', 'sub_active'));
    }

    public function postEdit($slug, $id, BlogsRepository $blog, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        return $blog->update($category, $id, $request) ? redirect()->to('admin/control/' . $slug . '/blog') : redirect()->back()->withInput();
    }

    public function getDelete($slug, $id, BlogsRepository $blog)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = Order::blog($category->id);
        unset($order[array_search($id, $order)]);

        Order::where('category_id', $category->id)->where('type', 'blog')->update(['positions' => json_encode(array_values($order))]);

        $blog->deleteBlog($category, $id);

        return redirect()->to('admin/control/' . $slug . '/blog');
    }

    public function getSort($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $blogs = $category->blogs()->sorted($category->id)->get();

        $active = 'blog';
        $sub_active = 'sort';

        return view('admin.blogs.sort', compact('category', 'blogs', 'active', 'sub_active'));
    }

    public function getSortNew($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = explode(',', $request->input('sort'));

        $jsonOrder = json_encode($order);

        Order::where('category_id', $category->id)->where('type', 'blog')->update(['positions' => $jsonOrder]);

        echo $slug;
    }

    public function postSaveimage(Request $request)
    {
        if ($request->hasFile('file'))
        {
            $file = $request->file('file');

            $dir = '/uploads/blogs/';
            $destinationPath = public_path() . $dir;
            $extension = $file->getClientOriginalExtension();

            $filename = str_random(40) . '.' . $extension;

            while( file_exists($destinationPath . $filename) )
                $filename = str_random(40) . '.' . $extension;

            $upload_success = $file->move($destinationPath, $filename);

            $response = new \StdClass;
            $response->link = $dir . $filename;

            return stripcslashes(json_encode($response));
        }
    }

    public function getInstaToggle($slug, $action)
    {
        $category = $this->getCategoryBySlug($slug);

        if ($action == 'enable') {
            $category->is_instagram_enabled = 1;
            $category->save();
        } else if ($action == 'disable') {
            $category->is_instagram_enabled = 0;
            $category->save();
        }

        return redirect()->back();
    }
}
