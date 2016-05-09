<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SlugController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);
        $active = 'index';

        return view('admin.slug', compact('category', 'active'));
    }

    public function postIndex($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $category->update($request->all());

        flash()->success('Приветственное письмо успешно сохранено.');

        return redirect()->back();
    }
}
