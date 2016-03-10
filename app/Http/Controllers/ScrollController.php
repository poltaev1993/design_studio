<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;

class ScrollController extends Controller
{
    public function __construct()
    {
        
    }

    public function getPage()
    {
        return Project::take(32)->get();
    }
}
