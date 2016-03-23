<?php

namespace App\Http\Controllers;

use App\Category;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function getIndex()
    {
        $categories = Category::sorted()->get();

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
