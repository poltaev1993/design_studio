<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $members = $category->members()->paginate(12);

        $active = 'members';
        $sub_active = 'all';

        return view('admin.members.index',
            compact(
                'category', 'members', 'active', 'sub_active'
            )
        );
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        return view('admin.members.add', compact('category'));
    }

    public function postAdd($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $member = $category->members()->create($request->all());

        if ($request->hasFile('avatar')) {
            $member->avatar = ImageHelper::make($request->file('avatar'), 'members');
            $member->save();
        }

        return redirect('admin/control/' . $slug . '/members');
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $member = $category->members()->find($id);

        return view('admin.members.edit', compact('category', 'member'));
    }

    public function postEdit($slug, $id, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $member = $category->members()->find($id);

        $member->update($request->all());

        if ($request->hasFile('avatar')) {
            $member->avatar = ImageHelper::make($request->file('avatar'), 'members');
            $member->save();
        }

        return redirect('admin/control/' . $slug . '/members');
    }

    public function getDelete($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $category->members()->find($id)->delete();

        return redirect()->back();
    }
}
