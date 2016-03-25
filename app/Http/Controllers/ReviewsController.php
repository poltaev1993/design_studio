<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Review;
use App\Repositories\ReviewsRepository;
use App\Order;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $reviews = $category->reviews()->sorted()->paginate(12);

        $active = 'reviews';
        $sub_active = 'all';

        return view('admin.reviews.index', compact('category', 'reviews', 'active', 'sub_active'));
    }

    public function getAll()
    {
        return Review::sorted()->get();
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $active = 'reviews';
        $sub_active = 'add';

        return view('admin.reviews.add', compact('category', 'active', 'sub_active'));
    }

    public function postAdd($slug, ReviewsRepository $review, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        if ( $new_id = $review->create($category, $request) )
        {
            $order = $category->orders()->review();

            if (is_array($order))
            {
                array_unshift($order, $new_id);
            }
            else
            {
                $order = [$new_id];
            }

            $category->orders()->where('type', 'review')->update(['positions' => json_encode($order)]);

            return redirect()->to('admin/control/' . $slug . '/reviews');
        }

        return redirect()->back()->withInput();
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $review = $category->reviews()->find($id);

        $active = 'reviews';
        $sub_active = '';

        return view('admin.reviews.edit', compact('category', 'review', 'active', 'sub_active'));
    }

    public function postEdit($slug, $id, ReviewsRepository $review, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        return $review->update($category, $id, $request) ? redirect()->to('admin/control/' . $slug . '/reviews') : redirect()->back()->withInput();
    }

    public function getDelete($slug, $id, ReviewsRepository $review)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = Order::review();
        unset($order[array_search($id, $order)]);

        Order::where('type', 'review')->update(['positions' => json_encode(array_values($order))]);

        $review->deleteReview($category, $id);

        return redirect()->to('admin/control/' . $slug . '/reviews');
    }

    public function saveimage(Request $request)
    {
        if ($request->hasFile('file'))
        {
            $file = $request->file('file');

            $dir = '/uploads/reviews/';
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

    public function getSort($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $reviews = $category->reviews()->sorted()->get();

        $active = 'reviews';
        $sub_active = 'sort';

        return view('admin.reviews.sort', compact('category', 'reviews', 'active', 'sub_active'));
    }

    public function getSortNew($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = explode(',', $request->input('sort'));

        $jsonOrder = json_encode($order);

        $category->orders()->where('type', 'review')->update(['positions' => $jsonOrder]);

        echo $slug;
    }
}
