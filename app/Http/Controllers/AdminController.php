<?php

namespace App\Http\Controllers;

use App\Category;
use Request, Auth;

Use App\Project, App\User, App\Request as Review, App\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function getIndex()
    {
        $categories = Category::all();

        $colors = [
            'primary', 'green', 'info',
            'danger', 'red', 'yellow',
            'default', 'success', 'warning'
        ];

        return view('admin.index',
            compact(
                'categories', 'colors'
            )
        );
    }

    public function getContactsText()
    {
        return view('admin.contacts');
    }

}
