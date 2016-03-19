<?php


namespace App\Repositories;

use App\Category;
use Illuminate\Http\Request;
use App\Blog;

class BlogsRepository {

    public function create(Category $category, Request $request)
    {
        $blog = $category->blogs()->create($request->all());

        if ( !$blog ) return false;

        $blog->isVideo = $request->input('isVideo');

        if ($blog->isVideo)
        {
            $blog->videoUrl = 'https://youtube.com/embed/' . substr($request->input('videoUrl'), strpos($request->input('videoUrl'), '?v=') + 3);
        }

        if ($request->hasFile('preview'))
        {
            $file = $request->file('preview');

            $dir = '/uploads/blogs/';
            $destinationPath = public_path() . $dir;
            $extension = $file->getClientOriginalExtension();

            $filename = str_random(40) . '.' . $extension;

            while( file_exists($destinationPath . $filename) )
                $filename = str_random(40) . '.' . $extension;

            $upload_success = $file->move($destinationPath, $filename);

            if ($upload_success)
            {
                $blog->preview = $dir . $filename;
            }
        }

        $blog->save();

        return $blog->id;
    }

    public function update(Category $category, $id, Request $request)
    {
        $blog = $category->blogs()->find($id);

        $blog->update($request->all());

        if ($request->hasFile('preview'))
        {
            $file = $request->file('preview');

            $dir = '/uploads/blogs/';
            $destinationPath = public_path() . $dir;
            $extension = $file->getClientOriginalExtension();

            $filename = str_random(40) . '.' . $extension;

            while( file_exists($destinationPath . $filename) )
                $filename = str_random(40) . '.' . $extension;

            $upload_success = $file->move($destinationPath, $filename);

            if ($upload_success)
            {
                $blog->preview = $dir . $filename;
            }
        }

        $blog->save();

        return true;
    }


    public function deleteBlog(Category $category, $id)
    {
        $blog = $category->blogs()->find($id);

        $blog->preview ? unlink(public_path() . $blog->preview) : '';

        $blog->delete();

        return true;
    }
    
}