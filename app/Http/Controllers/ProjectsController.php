<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\ProjectPhoto;
use App\Category;
use App\Order;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectsRepository;

class ProjectsController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $projects = $category->projects()->sorted($category->id)->paginate(12);

        $active = 'projects';
        $sub_active = 'all';

        return view('admin.projects.index', compact('category', 'projects', 'active', 'sub_active'));
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $active = 'projects';
        $sub_active = 'add';

        return view('admin.projects.add', compact('category', 'active', 'sub_active'));
    }

    public function postAdd($slug, ProjectsRepository $project, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        if ( $new_id = $project->create($category, $request) )
        {
            $order = $category->orders()->project($category->id);

            if (is_array($order))
            {
                array_unshift($order, $new_id);
            }
            else
            {
                $order = [$new_id];
            }

            Order::where('category_id', $category->id)->where('type', 'project')->update(['positions' => json_encode($order)]);

            return redirect()->to('admin/control/' . $slug . '/projects');

        }

        return redirect()->back()->withInput();
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $project = $category->projects()->with('photos')->find($id);

        $active = 'projects';
        $sub_active = '';

        return view('admin.projects.edit', compact('project', 'category', 'active', 'sub_active'));
    }

    public function postEdit($slug, $id, ProjectsRepository $project, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        return $project->update($category, $id, $request) ? redirect()->to('admin/control/' . $slug . '/projects') : redirect()->back()->withInput();
    }

    public function getDelete($slug, $id, ProjectsRepository $project)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = Order::project($category->id);
        unset($order[array_search($id, $order)]);

        Order::where('category_id', $category->id)->where('type', 'project')->update(['positions' => json_encode(array_values($order))]);

        $project->deleteProject($category, $id);

        return redirect()->to('admin/control/' . $slug . '/projects');
    }

    public function getSort($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $projects = $category->projects()->sorted($category->id)->get();

        $active = 'projects';
        $sub_active = 'sort';

        return view('admin.projects.sort', compact('category', 'projects', 'active', 'sub_active'));
    }

    public function getSortNew($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = explode(',', $request->input('sort'));

        $jsonOrder = json_encode($order);

        Order::where('category_id', $category->id)->where('type', 'project')->update(['positions' => $jsonOrder]);

        echo $slug;
    }

    public function getDeletePhoto(Request $request)
    {
        $id = $request->input('id');
        ProjectPhoto::find($id)->delete();

        return $id;
    }
}
