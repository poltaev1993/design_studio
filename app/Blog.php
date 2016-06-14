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
            /*'interior-design',
            'architecture',
            'logo',
            'drawing-school',
            'event'*/
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
            'architecture' => [
                'client_id' => '3eadd276ef4f4af89d3114479c2a72ae',
                'client_secret' => '3919e02a909e420e814793ecb4fcea22',
                'access_token' => '{ "access_token": "2955802432.3eadd27.5d1a81e5652546bc9c5f0b4bd658ff0d"}',
                'redirect_url' => 'http://ilyaskali.com/instagram'
            ],
            'logo' => [
                'client_id' => '6550565ddc2a449e8ecff579eb5d3a6f',
                'client_secret' => '922e45df2fc441afa29ddedb6f317e4f',
                'access_token' => '{ "access_token": "2955800372.6550565.a76ca1bf879f43158bd44e8e68289b56"}',
                'redirect_url' => 'http://ilyaskali.com/instagram'
            ],
            'drawing-school' => [
                'client_id' => '55c2c490131e44308ecd94c6e4845ae2',
                'client_secret' => '11063ddd845b41bb85a6b8df589e052b',
                'access_token' => '{ "access_token": "2013861152.55c2c49.f3c3ebd6116d49af8b3c0cbcec92b3c1"}',
                'redirect_url' => 'http://ilyaskali.com/instagram'
            ],
            'event' => [
                'client_id' => 'f86c745966c94e2fb316cacf0a77af0b',
                'client_secret' => 'b47b4869db1741429ba08987214feb54',
                'access_token' => '{ "access_token": "3079827310.f86c745.f9e4e605eb5a4d9e88a7962028bd2480"}',
                'redirect_url' => 'http://ilyaskali.com/instagram'
            ]
        ];
    }
}
