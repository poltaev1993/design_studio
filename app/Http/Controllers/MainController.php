<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\SchoolCategory;
use App\SchoolNews;
use App\SchoolSlider;
use Illuminate\Http\Request;

Use Mail, Cache;

use App\Project;
use App\Blog;
use App\Comment;
use App\Callback;
use App\Review as Otzyv;
use App\Request as Review;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();

        return view('pages.index', compact('categories'));
    }

    public function getPaged()
    {
        return Project::sorted()->with('category')->paginate(20);
    }

    public function getFilterPaged($id)
    {
        return Project::sorted()->where('category_id', $id)->with('category')->paginate(20);
    }

    public function getProject($id)
    {
        $project = Project::with('photos')->find($id);

        $project->views = $project->views + 1;

        $project->save();

        return view('pages.project', [
            'active' => 'project',
            'project' => $project,
        ]);
    }

    public function getAbout()
    {
        $abouts = About::latest()->get();

        return view('pages.about', [
            'active' => 'about',
            'abouts' => $abouts
        ]);
    }

    public function getBlog()
    {
        $blogs = Blog::sorted()->paginate(12);

        $col1 = $col2 = $col3 = [];

        foreach($blogs as $key => $blog)
        {
            switch($key % 3)
            {
                case 0:
                    $col1[] = $blog;
                    break;
                case 1:
                    $col2[] = $blog;
                    break;
                case 2:
                    $col3[] = $blog;
                    break;
            }
        }

        return view('pages.blog', [
            'active' => 'blog',
            'col1' => $col1,
            'col2' => $col2,
            'col3' => $col3,
            'blogs' => $blogs
        ]);
    }

    public function getPost($id)
    {
        $blog = Blog::find($id);

        $blog->views = $blog->views + 1;

        $blog->save();

        return view('pages.one_blog', [
            'active' => 'blog',
            'blog' => $blog,
        ]);
    }

    public function getContacts()
    {
        return view('pages.contacts', ['active' => 'contacts']);
    }

    public function postContacts(Request $request)
    {
        Review::create($request->all());

        Mail::send('emails.request', ['data' => (object) $request->all()], function($mail) {
            $mail->to('instudiopro@gmail.com')->subject('Новая заявка на сайте inStudio');
        });

        return redirect()->back();
    }

    public function getComments($id)
    {
        return Comment::where('project_id', $id)->latest()->take(6)->get();
    }

    public function postComments(Request $request)
    {
        $project = Project::find($request->input('project_id'));
        $project->comments += 1;
        $project->save();

        return Comment::create($request->all());
    }

    public function postCallbacks(Request $request)
    {
        Mail::send('emails.callback', ['data' => (object) $request->all()], function($mail) {
            $mail->to('instudiopro@gmail.com')->subject('Новая заявка на звонок на сайте inStudio');
        });

        return Callback::create($request->all());
    }

    public function postLiked(Request $request)
    {
        $project = Project::find($request->input('project_id'));
        $project->likes += 1;
        $project->save();
    }

    public function getBlogPost($id)
    {
        return Blog::find($id);
    }

    public function getReviews()
    {
        $reviews = Otzyv::sorted()->paginate(24);

        $col1 = $col2 = $col3 = [];

        foreach($reviews as $key => $review)
        {
            switch($key % 3)
            {
                case 0:
                    $col1[] = $review;
                    break;
                case 1:
                    $col2[] = $review;
                    break;
                case 2:
                    $col3[] = $review;
                    break;
            }
        }

        return view('pages.reviews', [
            'active' => 'reviews',
            'col1' => $col1,
            'col2' => $col2,
            'col3' => $col3,
            'reviews' => $reviews
        ]);
    }

    public function getSchool()
    {
        $categories = SchoolCategory::latest()->get();

        $active = 'school';

        $col1 = $col2 = [];

        foreach($categories as $key => $category)
        {
            switch($key % 2)
            {
                case 0:
                    $col1[] = $category;
                    break;
                case 1:
                    $col2[] = $category;
                    break;
            }
        }

        $news = SchoolNews::latest()->take(4)->get();

        $slider = SchoolSlider::sorted()->get();

        return view('pages.school', compact('active', 'categories', 'col1', 'col2', 'news', 'slider'));
    }
}
