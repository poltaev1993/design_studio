<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'heading',
        'text',
    ];

    public function scopeSorted($query, $cat_id)
    {
        $order = Order::review($cat_id);

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(', ', $order) . ')')) : $query;
    }
}
