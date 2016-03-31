<?php

namespace App;

use App\Order;
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

    public function questions()
    {
        return $this->hasMany('App\Question');
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

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function requests()
    {
        return $this->hasMany('App\Request');
    }

    public function scopeSorted($query)
    {
        $order = Order::categorySort();

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(',', $order) . ')')) : $query;
    }
}