<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GreetingController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $active = 'greetings';

        return view('admin.greetings', compact('category', 'active'));
    }

    public function postIndex($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        if ($category->greetings)
            $category->greetings()->update($request->except('_token'));
        else
            $category->greetings()->create($request->all());

        flash()->success('Текста успешно сохранены.');

        return redirect()->back();
    }
}
