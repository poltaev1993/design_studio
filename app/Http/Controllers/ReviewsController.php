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

        $reviews = $category->reviews;

        return view('admin.reviews.index', compact('category', 'reviews'));
    }

    public function getAll()
    {
        return Review::sorted()->get();
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        return view('admin.reviews.add', compact('category'));
    }

    public function postAdd($slug, ReviewsRepository $review, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        if ( $new_id = $review->create($category, $request) )
        {
            return redirect()->to('admin/control/' . $slug . 'reviews');
        }

        return redirect()->back()->withInput();
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $review = $category->reviews()->find($id);

        return view('admin.reviews.edit', compact('category', 'review'));
    }

    public function postEdit($slug, $id, ReviewsRepository $review, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        return $review->update($category, $id, $request) ? redirect()->to('admin/control/' . $slug . '/reviews') : redirect()->back()->withInput();
    }

    public function getDelete($slug, $id, ReviewsRepository $review)
    {
        $category = $this->getCategoryBySlug($slug);

        $review->deleteReview($category, $id);

        return redirect()->to('admin/control/' . $slug . '/reviews');
    }

    public function postNewOrder(Request $request)
    {
        $order = explode(',', $request->input('order'));

        $jsonOrder = json_encode($order);

        Order::where('type', 'review')->update(['positions' => $jsonOrder]);
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

    public function getSort()
    {
        $reviews = Review::sorted()->get();

        return view('admin.reviews.sort', compact('reviews'));
    }
}
