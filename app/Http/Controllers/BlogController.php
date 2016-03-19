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
        $category = $this->getCategoryBySlug($slug);

        $blogs = $category->blogs()->paginate(12);

        return view('admin.blogs.index', compact('category', 'blogs'));
    }

    public function getAll()
    {
        return Blog::sorted()->get();
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        return view('admin.blogs.add', compact('category'));
    }

    public function postAdd($slug, BlogsRepository $blog, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        if ( $new_id = $blog->create($category, $request) )
        {
            return redirect()->to('admin/control/' . $slug . '/blog');
        }

        return redirect()->back()->withInput();
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $blog = $category->blogs()->find($id);

        return view('admin.blogs.edit', compact('category', 'blog'));
    }

    public function postEdit($slug, $id, BlogsRepository $blog, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        return $blog->update($category, $id, $request) ? redirect()->to('admin/control/' . $slug . '/blog') : redirect()->back()->withInput();
    }

    public function getDelete($slug, $id, BlogsRepository $blog)
    {
        $category = $this->getCategoryBySlug($slug);

        $blog->deleteBlog($category, $id);

        return redirect()->to('admin/control/' . $slug . '/blog');
    }

    public function getSort()
    {
        $blogs = Blog::sorted()->get();

        return view('admin.blogs.sort', compact('blogs'));
    }

    public function postNewOrder(Request $request)
    {
        $order = explode(',', $request->input('order'));

        $jsonOrder = json_encode($order);

        Order::where('type', 'blog')->update(['positions' => $jsonOrder]);
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
}
