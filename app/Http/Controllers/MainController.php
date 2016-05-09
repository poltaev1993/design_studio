<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\SchoolCategory;
use App\SchoolNews;
use App\SchoolSlider;
use Illuminate\Http\Request;

Use Mail, Cache;

use App\Project;
use App\Blog;
use App\Comment;
use App\Callback;
use App\Review as Otzyv;
use App\Request as Review;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function getIndex()
    {
        $categories = Category::sorted()->get();

        return view('pages.index', compact('categories'));
    }

    public function getAbout()
    {
        $abouts = About::latest()->get();

        return view('pages.about', [
            'active' => 'about',
            'abouts' => $abouts
        ]);
    }
}
