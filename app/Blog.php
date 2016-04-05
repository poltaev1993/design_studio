<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'description',
        'body'
    ];

    public function scopeSorted($query, $cat_id)
    {
        $order = Order::blog($cat_id);

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(', ', $order) . ')')) : $query;
    }
}
