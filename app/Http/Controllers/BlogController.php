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
    public function getIndex()
    {
        $blogs = Blog::sorted()->paginate(12);

        return view('admin.blogs.index', compact('blogs'));
    }

    public function getAll()
    {
        return Blog::sorted()->get();
    }

    public function getAdd()
    {
        return view('admin.blogs.add');
    }

    public function postAdd(BlogsRepository $blog, Request $request)
    {
        if ( $new_id = $blog->create($request) )
        {
            $order = Order::blog();

            if (is_array($order))
            {
                array_unshift($order, $new_id);
            }
            else
            {
                $order = [$new_id];
            }

            Order::where('type', 'blog')->update(['positions' => json_encode($order)]);

            return redirect()->to('admin/blog');

        }

        return redirect()->back()->withInput();
    }

    public function getEdit($id)
    {
        $blog = Blog::find($id);

        return view('admin.blogs.edit', compact('blog'));
    }

    public function postEdit($id, BlogsRepository $blog, Request $request)
    {
        return $blog->update($id, $request) ? redirect()->to('admin/blog') : redirect()->back()->withInput();
    }

    public function getDelete($id, BlogsRepository $blog)
    {
        $order = Order::blog();
        unset($order[array_search($id, $order)]);

        Order::where('type', 'blog')->update(['positions' => json_encode(array_values($order))]);

        $blog->deleteBlog($id);

        return redirect()->to('admin/blog');
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
