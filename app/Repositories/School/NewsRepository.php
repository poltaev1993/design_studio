<?php


namespace App\Repositories\School;


use App\Helpers\ImageHelper;
use App\SchoolNews;
use Illuminate\Http\Request;

class NewsRepository
{
    public function create(Request $request)
    {
        $news = SchoolNews::create($request->all());

        if ($request->hasFile('image'))
        {
            $news->image = ImageHelper::make($request->file('image'), 'school_news');
            $news->save();
        }

        return true;
    }

    public function update($id, Request $request)
    {
        $news = SchoolNews::find($id);

        $news->update($request->all());

        if ($request->hasFile('image'))
        {
            $news->image = ImageHelper::make($request->file('image'), 'school_news');
            $news->save();
        }

        return true;
    }
}