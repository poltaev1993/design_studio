<?php


namespace App\Repositories;


use App\About;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

class AboutRepository
{
    public function create(Request $request)
    {
        $category = About::create($request->all());

        if ($request->hasFile('image'))
        {
            $category->image = ImageHelper::make($request->file('image'), 'about');
            $category->save();
        }

        return true;
    }

    public function update($id, Request $request)
    {
        $category = About::find($id);

        $category->update($request->all());

        if ($request->hasFile('image'))
        {
            $category->image = ImageHelper::make($request->file('image'), 'about');
            $category->save();
        }

        return true;
    }
}