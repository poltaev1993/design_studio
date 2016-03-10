<?php

namespace App\Http\Controllers;

use App\About;
use App\Repositories\AboutRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getIndex()
    {
        $abouts = About::latest()->paginate(12);

        return view('admin.abouts.index', compact('abouts'));
    }

    public function getAdd()
    {
        return view('admin.abouts.add');
    }

    public function postAdd(Request $request, AboutRepository $aboutRepository)
    {
        return $aboutRepository->create($request) ? redirect()->to('/admin/about') : redirect()->back()->withInput();
    }

    public function getEdit($id)
    {
        $about = About::find($id);

        return view('admin.abouts.edit', compact('about'));
    }

    public function postEdit($id, Request $request, AboutRepository $aboutRepository)
    {
        return $aboutRepository->update($id, $request) ? redirect()->to('/admin/about') : redirect()->back()->withInput();
    }

    public function getDelete($id)
    {
        About::find($id)->delete();

        return redirect()->back();
    }

    public function postSaveimage(Request $request)
    {
        if ($request->hasFile('file'))
        {
            $file = $request->file('file');

            $dir = '/uploads/about/';
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
