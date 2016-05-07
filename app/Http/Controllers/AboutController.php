<?php

namespace App\Http\Controllers;

use App\About;
use App\Helpers\ImageHelper;
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

        $about = $category->about;

        if ($request->hasFile('poster')) {
            if ($about) {
                $about->update([
                    'poster' => ImageHelper::make($request->file('poster'), 'about')
                ]);
            }
            else
                $about = $category->about()->create([
                    'poster' => ImageHelper::make($request->file('poster'), 'about')
                ]);
        }

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
                if ($about)
                    $about->update([
                        'video' => $dir . $filename
                    ]);
                else
                    $about = $category->about()->create([
                        'video' => $dir . $filename
                    ]);
            }
        }

        flash()->success('Видео для "О студии" успешно обновлено.');

        return redirect()->back();
    }
}
