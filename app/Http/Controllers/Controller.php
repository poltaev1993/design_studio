<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Category;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public function getCategoryBySlug($slug)
    {
        $category = Category::findBySlug($slug);

        return $category;
    }

    public function getCategoryIdBySlug($slug)
    {
        $category = Category::findBySlug($slug);

        return $category->id;
    }
}
