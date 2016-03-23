<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProcessController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $processes = $category->processes()->paginate(12);

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

        $category->processes()->find($id)->delete();

        return redirect()->back();
    }
}
