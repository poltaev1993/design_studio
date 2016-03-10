<?php

namespace App\Http\Controllers;

use Request, Auth;

Use App\Project, App\User, App\Request as Review, App\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function getIndex()
    {
        $counter = [
            'blogposts' => Blog::count(),
            'projects' => Project::count(),
            'requests' => Review::count()
        ];

        $counter = (object) $counter;

        return view('admin.index', compact('counter'));
    }

    public function getContactsText()
    {
        return view('admin.contacts');
    }

}
