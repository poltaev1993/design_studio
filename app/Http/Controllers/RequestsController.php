<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Request as Review;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequestsController extends Controller
{

    public function getIndex()
    {
        $requests = Review::latest()->orderBy('viewed')->paginate(10);

        return view('admin.requests', compact('requests'));
    }
    
}
