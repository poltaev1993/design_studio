<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;
use App\Repositories\ReviewsRepository;
use App\Order;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    public function __construct()
    {

    }

    public function getIndex()
    {
        $reviews = Review::sorted()->paginate(12);

        return view('admin.reviews.index', compact('reviews'));
    }

    public function getAll()
    {
        return Review::sorted()->get();
    }

    public function getAdd()
    {
        return view('admin.reviews.add');
    }

    public function postAdd(ReviewsRepository $review, Request $request)
    {
        if ( $new_id = $review->create($request) )
        {
            $order = Order::review();

            if (is_array($order))
            {
                array_unshift($order, $new_id);
            }
            else
            {
                $order = [$new_id];
            }

            Order::where('type', 'review')->update(['positions' => json_encode($order)]);

            return redirect()->to('admin/reviews');

        }

        return redirect()->back()->withInput();
    }

    public function getEdit($id)
    {
        $review = Review::find($id);

        return view('admin.reviews.edit', compact('review'));
    }

    public function postEdit($id, ReviewsRepository $review, Request $request)
    {
        return $review->update($id, $request) ? redirect()->to('admin/reviews') : redirect()->back()->withInput();
    }

    public function getDelete($id, ReviewsRepository $review)
    {
        $order = Order::review();
        unset($order[array_search($id, $order)]);

        Order::where('type', 'review')->update(['positions' => json_encode(array_values($order))]);

        $review->deleteReview($id);

        return redirect()->to('admin/reviews');
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
