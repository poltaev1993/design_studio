<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolSlider extends Model
{
    protected $table = 'school_slider_images';

    protected $fillable = ['url'];

    public function scopeSorted($query)
    {
        $order = Order::slider();

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(', ', $order) . ')')) : $query;
    }
}
