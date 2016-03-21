<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $active = 'partners';
        $sub_active = 'all';

        return view('admin.partner.index', compact('category', 'active', 'sub_active'));
    }
}
