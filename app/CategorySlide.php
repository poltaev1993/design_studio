<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorySlide extends Model
{
    protected $table = 'category_slides';

    protected $fillable = [
        'image', 'title'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
