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

        return view('admin.about', compact('category', 'about'));
    }

    public function postIndex($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        if ($category->about)
        {
            $category->about()->update(['text' => $request->input('text')]);
        }
        else
        {
            $category->about()->create(['text' => $request->input('text')]);
        }

        flash()->success('Страница "О студии" успешно обновлена');

        return redirect()->back();
    }
}
