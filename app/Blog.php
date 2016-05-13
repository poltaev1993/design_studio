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

    public static function getInstagramAvailableSections()
    {
        return [
            'interior-design', 'architecture', 'logo',
            'drawing-school', 'courses', 'event'
        ];
    }

    public static function getInstagramData()
    {
        return [
            'interior-design' => [
                'client_id' => '5bcb0257f77743348293fadbe9c586bc',
                'client_secret' => '87f4c38001ab4660bbdc97d4029794d5',
                'access_token' => '{ "access_token": "2955795164.5bcb025.167ab063428d42dba45c5c355006a044"}',
                'redirect_url' => 'http://ilyaskali.com/instagram'
            ],
        ];
    }
}
