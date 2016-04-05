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

        $partners = $category->partners()->sorted($category->id)->paginate(12);

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

        $order = $category->orders()->partner($category->id);

        if (is_array($order))
        {
            array_unshift($order, $partner->id);
        }
        else
        {
            $order = [$partner->id];
        }

        Order::where('category_id', $category->id)->where('type', 'partner')->update(['positions' => json_encode($order)]);

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

        $order = Order::question($category->id);
        unset($order[array_search($id, $order)]);

        Order::where('category_id', $category->id)->where('type', 'partner')->update(['positions' => json_encode(array_values($order))]);

        $category->partners()->find($id)->delete();

        return redirect()->back();
    }

    public function getSort($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $partners = $category->partners()->sorted($category->id)->get();

        $active = 'partners';
        $sub_active = 'sort';

        return view('admin.partners.sort', compact('category', 'partners', 'active', 'sub_active'));
    }

    public function getSortNew($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = explode(',', $request->input('sort'));

        $jsonOrder = json_encode($order);

        Order::where('category_id', $category->id)->where('type', 'partner')->update(['positions' => $jsonOrder]);

        echo $slug;
    }
}
