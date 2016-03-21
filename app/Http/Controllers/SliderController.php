<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $slides = $category->slides;

        $active = 'slider';

        return view('admin.slider', compact('category', 'slides', 'active'));
    }

    public function postIndex($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $slides = $category->slides;

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $key => $image) {
                if ($image == null) continue;

                $dir = '/uploads/slider/';
                $destinationPath = public_path() . $dir;
                $extension = $image->getClientOriginalExtension();

                $filename = str_random(40) . '.' . $extension;

                while (file_exists($destinationPath . $filename))
                    $filename = str_random(40) . '.' . $extension;

                $upload_success = $image->move($destinationPath, $filename);

                if ($upload_success) {
                    if ($slider_photo = $slides->find($key)) {
                        $slider_photo->image = $dir . $filename;
                        $slider_photo->save();
                    } else {
                        $category->slides()->create(['image' => $dir . $filename]);
                    }
                }
            }
        }

        return redirect()->back();
    }

    public function getDelete($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $id = $request->input('id');

        $category->slides()->find($id)->delete();

        return $id;
    }
}
