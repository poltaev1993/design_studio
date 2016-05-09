<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    protected $fillable = [
        'category_id',
        'home_heading', 'home_description',
        'team_heading', 'team_description',
        'about_heading', 'about_description',
        'process_heading', 'process_description',
        'projects_heading', 'projects_description',
        'reviews_heading', 'reviews_description',
        'questions_heading', 'questions_description',
        'blog_heading', 'blog_description',
        'partners_heading', 'partners_description',
        'contacts_heading', 'contacts_description',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
