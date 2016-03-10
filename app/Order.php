<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['positions'];

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

    public function format($order)
    {
        return json_decode($order->positions);
    }
}
