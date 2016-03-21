<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $about = $category->about;

        $active = 'about';

        return view('admin.about', compact('category', 'about', 'active'));
    }

    public function postIndex($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        if ($request->hasFile('video')) {

            $file = $request->file('video');

            $dir = '/video/';

            $destinationPath = public_path() . $dir;

            $extension = $file->getClientOriginalExtension();

            $filename = str_random(6) . '.' . $extension;

            while( file_exists($destinationPath . $filename) )
                $filename = str_random(6) . '.' . $extension;

            $upload_success = $file->move($destinationPath, $filename);

            if ($upload_success)
            {
                $category->about()->update(['video' => $dir . $filename]);
            }
        }

        flash()->success('Видео для "О студии" успешно обновлено.');

        return redirect()->back();
    }
}
