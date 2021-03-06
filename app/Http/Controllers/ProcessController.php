<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProcessController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $processes = $category->processes()->sorted($category->id)->paginate(12);

        $active = 'processes';
        $sub_active = 'all';

        return view('admin.processes.index',
            compact(
                'category', 'processes', 'active', 'sub_active'
            )
        );
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $active = 'processes';
        $sub_active = 'add';

        return view('admin.processes.add', compact('category', 'active', 'sub_active'));
    }

    public function postAdd($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $process = $category->processes()->create($request->all());

        if ($request->hasFile('image')) {
            $process->image = ImageHelper::make($request->file('image'), 'processes');
            $process->save();
        }

        $order = $category->orders()->process($category->id);

        if (is_array($order))
        {
            array_unshift($order, $process->id);
        }
        else
        {
            $order = [$process->id];
        }

        Order::where('category_id', $category->id)->where('type', 'process')->update(['positions' => json_encode($order)]);

        return redirect('admin/control/' . $slug . '/processes');
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $process = $category->processes()->find($id);

        $active = 'processes';
        $sub_active = '';

        return view('admin.processes.edit', compact('category', 'process', 'active', 'sub_active'));
    }

    public function postEdit($slug, $id, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $process = $category->processes()->find($id);

        $process->update($request->all());

        if ($request->hasFile('image')) {
            $process->image = ImageHelper::make($request->file('image'), 'processes');
            $process->save();
        }

        return redirect('admin/control/' . $slug . '/processes');
    }

    public function getDelete($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = Order::process($category->id);
        unset($order[array_search($id, $order)]);

        Order::where('category_id', $category->id)->where('type', 'process')->update(['positions' => json_encode(array_values($order))]);

        $category->processes()->find($id)->delete();

        return redirect()->back();
    }

    public function getSort($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $processes = $category->processes()->sorted($category->id)->get();

        $active = 'processes';
        $sub_active = 'sort';

        return view('admin.processes.sort', compact('category', 'processes', 'active', 'sub_active'));
    }

    public function getSortNew($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = explode(',', $request->input('sort'));

        $jsonOrder = json_encode($order);

        Order::where('category_id', $category->id)->where('type', 'process')->update(['positions' => $jsonOrder]);

        echo $slug;
    }
}
