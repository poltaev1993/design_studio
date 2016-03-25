<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $partners = $category->partners()->sorted()->paginate(12);

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

        $order = $category->orders()->partner();

        if (is_array($order))
        {
            array_unshift($order, $partner->id);
        }
        else
        {
            $order = [$partner->id];
        }

        $category->orders()->where('type', 'partner')->update(['positions' => json_encode($order)]);

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

        $order = Order::question();
        unset($order[array_search($id, $order)]);

        Order::where('type', 'partner')->update(['positions' => json_encode(array_values($order))]);

        $category->partners()->find($id)->delete();

        return redirect()->back();
    }

    public function getSort($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $partners = $category->partners()->sorted()->get();

        $active = 'partners';
        $sub_active = 'sort';

        return view('admin.partners.sort', compact('category', 'partners', 'active', 'sub_active'));
    }

    public function getSortNew($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = explode(',', $request->input('sort'));

        $jsonOrder = json_encode($order);

        $category->orders()->where('type', 'partner')->update(['positions' => $jsonOrder]);

        echo $slug;
    }
}
