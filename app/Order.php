<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['category_id', 'type', 'positions'];

    public function scopeBlog($query, $cat_id)
    {
        $order = $query->where('category_id', $cat_id)->where('type', 'blog')->first();

        return $this->format($order);
    }

    public function scopeProject($query, $cat_id)
    {
        $order = $query->where('category_id', $cat_id)->where('type', 'project')->first();

        return $this->format($order);
    }

    public function scopeMember($query, $cat_id)
    {
        $order = $query->where('category_id', $cat_id)->where('type', 'member')->first();

        return $this->format($order);
    }

    public function scopeProcess($query, $cat_id)
    {
        $order = $query->where('category_id', $cat_id)->where('type', 'process')->first();

        return $this->format($order);
    }

    public function scopeQuestion($query, $cat_id)
    {
        $order = $query->where('category_id', $cat_id)->where('type', 'question')->first();

        return $this->format($order);
    }

    public function scopePartner($query, $cat_id)
    {
        $order = $query->where('category_id', $cat_id)->where('type', 'partner')->first();

        return $this->format($order);
    }

    public function scopeReview($query, $cat_id)
    {
        $order = $query->where('category_id', $cat_id)->where('type', 'review')->first();

        return $this->format($order);
    }

    public function scopeSlider($query, $cat_id)
    {
        $order = $query->where('category_id', $cat_id)->where('type', 'slider')->first();

        return $this->format($order);
    }

    public function scopeCategorySort($query)
    {
        $order = $query->where('type', 'categories')->first();

        return $this->format($order);
    }

    public function format($order)
    {
        return json_decode($order->positions);
    }

    public function category()
    {
        return $this->hasMany('App\Category');
    }
}
