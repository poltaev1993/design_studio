<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        return view('pages.page', compact('category'));
    }

    public function postCallbackRequest(Request $request)
    {
        $slug = $request->input('slug');
        $category = $this->getCategoryBySlug($slug);

        $category->requests()->create($request->all());

        echo '<h2>Спасибо, наши менеджеры перезвонят Вам в ближайшее время!</h2>';
    }
}
