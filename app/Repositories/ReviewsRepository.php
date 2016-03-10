<?php


namespace App\Repositories;

use App\Helpers\ImageHelper;
use Illuminate\Http\Request;
use App\Review;

class ReviewsRepository
{
    public function create(Request $request)
    {
        $review = Review::create($request->all());

        if ( !$review ) return false;

        $review->isVideo = $request->input('isVideo');
        
        if ($review->isVideo)
        {
            $review->videoUrl = 'https://youtube.com/embed/' . substr($request->input('videoUrl'), strpos($request->input('videoUrl'), '?v=') + 3);
        }

        if ($request->hasFile('image'))
        {
            $review->image = ImageHelper::make($request->file('image'), 'reviews');
        }

        $review->save();

        return $review->id;
    }

    public function update($id, Request $request)
    {
        $review = Review::find($id);
        $review->update($request->all());

        $review->isVideo = $request->input('isVideo');

        if ($review->isVideo)
        {
            $review->videoUrl = 'https://youtube.com/embed/' . substr($request->input('videoUrl'), strpos($request->input('videoUrl'), '?v=') + 3);
        }

        if ($request->hasFile('image'))
        {
            $review->image = ImageHelper::make($request->file('image'), 'reviews');
        }

        $review->save();

        return true;
    }

    public function deleteReview($id)
    {
        $review = Review::find($id);

        $review->image ? unlink(public_path() . $review->image) : '';

        $review->delete();

        return true;
    }
}