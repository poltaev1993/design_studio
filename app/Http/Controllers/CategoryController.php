<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class CategoryController extends Controller
{
    public function postAddNew(Request $request)
    {
        $validator = Validator::make(
            [
                'url' => $request->input('url')
            ],
            [
                'url' => 'unique:categories,url'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error-url-unique', 'Такой url уже существует, он должен быть уникальным');
        }

        Category::create($request->all());

        return redirect()->back();
    }
}
