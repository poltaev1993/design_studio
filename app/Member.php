<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function projects()
    {
        return $this->hasMany('App\MemberProject');
    }

    public function scopeSorted($query, $cat_id)
    {
        $order = Order::member($cat_id);

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(',', $order) . ')')) : $query;
    }
}
