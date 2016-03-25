<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $fillable = [
        'category_id', 'name', 'description'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeSorted($query)
    {
        $order = Order::process();

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(',', $order) . ')')) : $query;
    }
}
