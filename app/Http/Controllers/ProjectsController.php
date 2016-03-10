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
    public function getIndex()
    {
        $projects = Project::sorted()->with('category')->paginate(12);

        return view('admin.projects.index', compact('projects'));
    }

    public function getAll()
    {
        return Project::sorted()->get();
    }

    public function getAdd()
    {
        $categories = Category::lists('name', 'id');

        return view('admin.projects.add', compact('categories'));
    }

    public function postAdd(ProjectsRepository $project, Request $request)
    {
        if ( $new_id = $project->create($request) )
        {
            $order = Order::project();

            if (is_array($order))
            {
                array_unshift($order, $new_id);
            }
            else
            {
                $order = [$new_id];
            }

            Order::where('type', 'project')->update(['positions' => json_encode($order)]);

            return redirect()->to('admin/projects');

        }

        return redirect()->back()->withInput();
    }

    public function getEdit($id)
    {
        $project = Project::with('photos')->find($id);
        $categories = Category::lists('name', 'id');

        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function postEdit($id, ProjectsRepository $project, Request $request)
    {
        return $project->update($id, $request) ? redirect()->to('admin/projects') : redirect()->back()->withInput();
    }

    public function getDelete($id, ProjectsRepository $project)
    {
        $order = Order::project();
        unset($order[array_search($id, $order)]);

        Order::where('type', 'project')->update(['positions' => json_encode(array_values($order))]);

        $project->deleteProject($id);

        return redirect()->to('admin/projects');
    }

    public function getSort()
    {
        $projects = Project::sorted()->get();

        return view('admin.projects.sort', compact('projects'));
    }

    public function postNewOrder(Request $request)
    {
        $order = explode(',', $request->input('order'));

        $jsonOrder = json_encode($order);

        Order::where('type', 'project')->update(['positions' => $jsonOrder]);
    }

    public function getDeletePhoto(Request $request)
    {
        $id = $request->input('id');
        ProjectPhoto::find($id)->delete();

        return $id;
    }
}
