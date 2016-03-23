<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'value', 'url'
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

    public function faqs()
    {
        return $this->hasMany('App\FAQ');
    }

    public function blogs()
    {
        return $this->hasMany('App\Blog');
    }

    public function greetings()
    {
        return $this->hasOne('App\Greeting');
    }

    public function partners()
    {
        return $this->hasMany('App\Partner');
    }

    public function processes()
    {
        return $this->hasMany('App\Process');
    }
}