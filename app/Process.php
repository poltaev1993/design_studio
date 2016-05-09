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

    public function scopeSorted($query, $cat_id)
    {
        $order = Order::process($cat_id);

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(',', $order) . ')')) : $query;
    }
}
