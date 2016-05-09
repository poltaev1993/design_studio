<?php


namespace App\Repositories\School;


use App\Helpers\ImageHelper;
use App\SchoolCategory;
use Illuminate\Http\Request;

class CategoryRepository
{
    public function create(Request $request)
    {
        $category = SchoolCategory::create($request->all());

        if ($request->hasFile('image'))
        {
            $category->image = ImageHelper::make($request->file('image'), 'school_category');
            $category->save();
        }

        return true;
    }

    public function update($id, Request $request)
    {
        $category = SchoolCategory::find($id);

        $category->update($request->all());

        if ($request->hasFile('image'))
        {
            $category->image = ImageHelper::make($request->file('image'), 'school_category');
            $category->save();
        }

        return true;
    }
}