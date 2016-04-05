<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['category_id', 'type', 'positions'];

    public function scopeBlog($query)
    {
        $order = $query->where('type', 'blog')->first();

        return $this->format($order);
    }

    public function scopeProject($query)
    {
        $order = $query->where('type', 'project')->first();

        return $this->format($order);
    }

    public function scopeMember($query)
    {
        $order = $query->where('type', 'member')->first();

        return $this->format($order);
    }

    public function scopeProcess($query)
    {
        $order = $query->where('type', 'process')->first();

        return $this->format($order);
    }

    public function scopeQuestion($query)
    {
        $order = $query->where('type', 'question')->first();

        return $this->format($order);
    }

    public function scopePartner($query)
    {
        $order = $query->where('type', 'partner')->first();

        return $this->format($order);
    }

    public function scopeReview($query)
    {
        $order = $query->where('type', 'review')->first();

        return $this->format($order);
    }

    public function scopeSlider($query)
    {
        $order = $query->where('type', 'slider')->first();

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
