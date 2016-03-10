<?php

namespace App\Http\Controllers;

use App\Repositories\School\NewsRepository;
use App\SchoolNews;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SchoolNewsController extends Controller
{
    public function getIndex()
    {
        $news = SchoolNews::latest()->get();

        return view('admin.school.news.index', compact('news'));
    }

    public function getAdd()
    {
        return view('admin.school.news.add');
    }

    public function postAdd(Request $request, NewsRepository $newsRepository)
    {
        return $newsRepository->create($request) ? redirect()->to('/admin/school/news') : redirect()->back()->withInput();
    }

    public function getEdit($id)
    {
        $news = SchoolNews::find($id);

        return view('admin.school.news.edit', compact('news'));
    }

    public function postEdit($id, Request $request, NewsRepository $newsRepository)
    {
        return $newsRepository->update($id, $request) ? redirect()->to('/admin/school/news') : redirect()->back()->withInput();
    }

    public function getDelete($id)
    {
        SchoolNews::find($id)->delete();

        return redirect()->back();
    }

    public function postSaveimage(Request $request)
    {
        if ($request->hasFile('file'))
        {
            $file = $request->file('file');

            $dir = '/uploads/school_news/';
            $destinationPath = public_path() . $dir;
            $extension = $file->getClientOriginalExtension();

            $filename = str_random(40) . '.' . $extension;

            while( file_exists($destinationPath . $filename) )
                $filename = str_random(40) . '.' . $extension;

            $upload_success = $file->move($destinationPath, $filename);

            $response = new \StdClass;
            $response->link = $dir . $filename;

            //echo "{ link: '" . $dir . $filename . "' }";

            return stripcslashes(json_encode($response));
        }
    }
}
