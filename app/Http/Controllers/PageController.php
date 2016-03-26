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

        //echo '<pre>', var_dump($category->projects()->sorted()->get()->count()), '</pre>'; die;

        return view('pages.page', compact('category'));
    }
}
