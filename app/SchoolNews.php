<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolNews extends Model
{
    protected $table = 'school_news';

    protected $fillable = [
        'title',
        'description',
        'body'
    ];
}
