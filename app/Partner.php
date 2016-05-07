<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeSorted($query, $cat_id)
    {
        $order = Order::partner($cat_id);

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(',', $order) . ')')) : $query;
    }
}
