<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Request as Callback;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequestsController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $requests = $category->requests()->orderBy('viewed', 'ASC')->orderBy('created_at')->paginate(10);

        $active = 'requests';

        return view('admin.requests', compact('requests', 'category', 'active'));
    }

    public function getViewed($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $category->requests()->find($id)->update(['viewed' => 1]);

        return redirect()->back();
    }

    public function getDelete($slug, $id)
    {
        Callback::find($id)->delete();

        return redirect()->back();
    }
}

