<?php

namespace App\Http\Controllers;

use App\Repositories\School\CategoryRepository;
use App\SchoolCategory;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchoolCategoryController extends Controller
{
    public function getIndex()
    {
        $categories = SchoolCategory::latest()->get();

        return view('admin.school.categories.index', compact('categories'));
    }

    public function getAdd()
    {
        return view('admin.school.categories.add');
    }

    public function postAdd(Request $request, CategoryRepository $categoryRepository)
    {
        return $categoryRepository->create($request) ? redirect()->to('/admin/school/categories') : redirect()->back()->withInput();
    }

    public function getEdit($id)
    {
        $category = SchoolCategory::find($id);

        return view('admin.school.categories.edit', compact('category'));
    }

    public function postEdit($id, Request $request, CategoryRepository $categoryRepository)
    {
        return $categoryRepository->update($id, $request) ? redirect()->to('/admin/school/categories') : redirect()->back()->withInput();
    }

    public function getDelete($id)
    {
        SchoolCategory::find($id)->delete();

        return redirect()->back();
    }

    public function postSaveimage(Request $request)
    {
        if ($request->hasFile('file'))
        {
            $file = $request->file('file');

            $dir = '/uploads/school_categories/';
            $destinationPath = public_path() . $dir;
            $extension = $file->getClientOriginalExtension();

            $filename = str_random(40) . '.' . $extension;

            while( file_exists($destinationPath . $filename) )
                $filename = str_random(40) . '.' . $extension;

            $upload_success = $file->move($destinationPath, $filename);

            $response = new \StdClass;
            $response->link = $dir . $filename;

            return stripcslashes(json_encode($response));
        }
    }
}
