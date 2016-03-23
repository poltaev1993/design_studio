<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $partners = $category->partners()->paginate(12);

        $active = 'partners';
        $sub_active = 'all';

        return view('admin.partners.index', compact('category', 'partners', 'active', 'sub_active'));
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $active = 'partners';
        $sub_active = 'add';

        return view('admin.partners.add', compact('category', 'active', 'sub_active'));
    }

    public function postAdd($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $partner = $category->partners()->create($request->all());

        if ($request->hasFile('image'))
        {
            $partner->image = ImageHelper::make($request->file('image'), 'partners');
            $partner->save();
        }

        return redirect('admin/control/' . $slug . '/partners');
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $partner = $category->partners()->find($id);

        $active = 'partners';
        $sub_active = '';

        return view('admin.partners.edit', compact('category', 'partner', 'active', 'sub_active'));
    }

    public function postEdit($slug, $id, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $partner = $category->partners()->find($id);

        $partner->update($request->all());

        if ($request->hasFile('image'))
        {
            $partner->image = ImageHelper::make($request->file('image'), 'partners');
            $partner->save();
        }

        return redirect('admin/control/' . $slug . '/partners');
    }

    public function getDelete($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $category->partners()->find($id)->delete();

        return redirect()->back();
    }
}
