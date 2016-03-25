<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'questioner',
        'answerer',
        'questioned_at'
    ];

    protected $table = 'faq';

    public function scopeSorted($query)
    {
        $order = Order::question();

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(',', $order) . ')')) : $query;
    }
}
