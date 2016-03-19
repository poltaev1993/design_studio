<?php


namespace App\Repositories;

use App\Category;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use App\Review;

class ReviewsRepository
{
    public function create(Category $category, Request $request)
    {
        $review = $category->reviews()->create($request->all());

        if ( !$review ) return false;

        if ($request->hasFile('image'))
        {
            $review->avatar = ImageHelper::make($request->file('image'), 'reviews');
        }

        $review->save();

        return $review->id;
    }

    public function update(Category $category, $id, Request $request)
    {
        $review = $category->reviews()->find($id);

        $review->update($request->all());

        if ($request->hasFile('image'))
        {
            $review->image = ImageHelper::make($request->file('image'), 'reviews');
        }

        $review->save();

        return true;
    }

    public function deleteReview(Category $category, $id)
    {
        $review = $category->reviews()->find($id);

        $review->image ? unlink(public_path() . $review->image) : '';

        $review->delete();

        return true;
    }
}