<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\MemberProject;
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

        $active = 'members';
        $sub_active = 'add';

        return view('admin.members.add', compact('category', 'active', 'sub_active'));
    }

    public function postAdd($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $member = $category->members()->create($request->all());

        if ($request->hasFile('avatar')) {
            $member->avatar = ImageHelper::make($request->file('avatar'), 'members');
            $member->save();
        }

        if ($request->hasFile('photos'))
        {
            foreach($request->file('photos') as $key => $image)
            {
                if ($image == null) continue;

                $dir = '/uploads/member_projects/';
                $destinationPath = public_path() . $dir;
                $extension = $image->getClientOriginalExtension();

                $filename = str_random(8) . '.' . $extension;

                while( file_exists($destinationPath . $filename) )
                    $filename = str_random(8) . '.' . $extension;

                $upload_success = $image->move($destinationPath, $filename);

                if ($upload_success)
                {
                    $member->projects()->create(['image' => $dir . $filename]);
                }
            }
        }

        return redirect('admin/control/' . $slug . '/members');
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $member = $category->members()->with('projects')->find($id);

        $active = 'members';
        $sub_active = '';

        return view('admin.members.edit', compact('category', 'member', 'active', 'sub_active'));
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

        if ($request->hasFile('photos'))
        {
            foreach($request->file('photos') as $key => $image)
            {
                if ($image == null) continue;

                $dir = '/uploads/member_projects/';
                $destinationPath = public_path() . $dir;
                $extension = $image->getClientOriginalExtension();

                $filename = str_random(8) . '.' . $extension;

                while( file_exists($destinationPath . $filename) )
                    $filename = str_random(8) . '.' . $extension;

                $upload_success = $image->move($destinationPath, $filename);

                if ($upload_success)
                {
                    if ( $project_photo = $member->projects()->find($key) )
                    {
                        $project_photo->image = $dir . $filename;
                        $project_photo->save();
                    }
                    else
                    {
                        $member->projects()->create(['image' => $dir . $filename]);
                    }
                }
            }
        }

        return redirect('admin/control/' . $slug . '/members');
    }

    public function getDelete($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $category->members()->find($id)->delete();

        return redirect()->back();
    }

    public function getDeletePhoto(Request $request)
    {
        $id = $request->input('id');
        MemberProject::find($id)->delete();

        return $id;
    }
}
