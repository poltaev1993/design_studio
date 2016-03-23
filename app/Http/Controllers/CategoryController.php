<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class CategoryController extends Controller
{
    public function getIndex()
    {
        $categories = Category::sorted()->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function getEdit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function postEdit($id, Request $request)
    {
        $category = Category::find($id);

        $category->update($request->all());

        return redirect()->to('admin/categories');
    }

    public function getDelete($id)
    {
        $order = Order::categorySort();

        unset($order[array_search($id, $order)]);

        Order::where('type', 'categories')->update(['positions' => json_encode(array_values($order))]);

        Category::find($id)->delete();

        return redirect()->back();
    }

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

        $category = Category::create($request->all());

        foreach($this->getOrderableTypes() as $type) {
            $category->orders()->create(compact('type'));
        }

        $order = Order::categorySort();

        if (is_array($order))
        {
            array_unshift($order, $category->id);
        }
        else
        {
            $order = [$category->id];
        }

        Order::where('type', 'categories')->update(['positions' => json_encode($order)]);

        return redirect()->back();
    }

    public function getOrderableTypes()
    {
        return [
            'member',
            'process',
            'project',
            'review',
            'question',
            'partner',
        ];
    }

    public function getNewSort(Request $request)
    {
        $order = explode(',', $request->input('sort'));

        $jsonOrder = json_encode($order);

        Order::where('type', 'categories')->update(['positions' => $jsonOrder]);
    }
}
