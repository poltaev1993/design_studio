<?php

namespace App\Http\Controllers;

use App\Order;
use App\SchoolSlider;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchoolSliderController extends Controller
{
    public function getIndex()
    {
        $slider_photos = SchoolSlider::sorted()->get();

        return view('admin.school.slider.index', compact('slider_photos'));
    }

    public function postIndex(Request $request)
    {
        $slider_photos = SchoolSlider::all();

        if ($request->hasFile('photos'))
        {
            foreach($request->file('photos') as $key => $image)
            {
                if ($image == null) continue;

                $dir = '/uploads/school_slider/';
                $destinationPath = public_path() . $dir;
                $extension = $image->getClientOriginalExtension();

                $filename = str_random(40) . '.' . $extension;

                while( file_exists($destinationPath . $filename) )
                    $filename = str_random(40) . '.' . $extension;

                $upload_success = $image->move($destinationPath, $filename);

                if ($upload_success)
                {

                    if ( $slider_photo = $slider_photos->find($key) )
                    {
                        $slider_photo->url = $dir . $filename;
                        $slider_photo->save();
                    }
                    else
                    {
                        $schoolSlider = SchoolSlider::create(['url' => $dir . $filename]);

                        $order = Order::slider();

                        if (is_array($order))
                        {
                            array_unshift($order, $schoolSlider->id);
                        }
                        else
                        {
                            $order = [$schoolSlider->id];
                        }

                        Order::where('type', 'slider')->update(['positions' => json_encode($order)]);
                    }
                }
            }
        }

        return redirect()->back();
    }

    public function getDelete(Request $request)
    {
        $id = $request->input('id');

        $order = Order::slider();
        unset($order[array_search($id, $order)]);

        Order::where('type', 'slider')->update(['positions' => json_encode(array_values($order))]);

        SchoolSlider::find($id)->delete();

        return $id;
    }

    public function getAll()
    {
        return SchoolSlider::sorted()->get();
    }

    public function postNewOrder(Request $request)
    {
        $order = explode(',', $request->input('order'));

        $jsonOrder = json_encode($order);

        Order::where('type', 'slider')->update(['positions' => $jsonOrder]);
    }

    public function getSort()
    {
        $slider = SchoolSlider::sorted()->get();

        return view('admin.school.slider.sort', compact('slider'));
    }
}
