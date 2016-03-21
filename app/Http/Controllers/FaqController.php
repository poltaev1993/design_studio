<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $faqs = $category->faqs()->paginate(12);

        return view('admin.faqs.index', compact('category', 'faqs'));
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        return view('admin.faqs.add', compact('category'));
    }

    public function postAdd($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $faq = $category->faqs()->create($request->all());

        return $faq ? redirect()->to('admin/control/' . $slug . '/faqs') : redirect()->back()->withInput();
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $faq = $category->faqs()->find($id);

        return view('admin.faqs.edit', compact('faq', 'category'));
    }

    public function postEdit($slug, $id, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $faq = $category->faqs()->find($id)->update($request->all());

        return $faq ? redirect()->to('admin/control/' . $slug . '/faqs') : redirect()->back()->withInput();
    }

    public function getDelete($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $category->faqs()->find($id)->delete();

        return redirect()->back();
    }
}