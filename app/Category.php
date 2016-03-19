<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'value', 'url', 'welcome_text'
    ];

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public static function scopeFindBySlug($query, $slug)
    {
        return $query->where('url', $slug)->first();
    }

    public function slides()
    {
        return $this->hasMany('App\CategorySlide');
    }

    public function members()
    {
        return $this->hasMany('App\Member');
    }

    public function about()
    {
        return $this->hasOne('App\About');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
