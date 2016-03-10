<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolCategory extends Model
{
    protected $table = 'school_categories';

    protected $fillable = [
        'name',
        'description',
        'body'
    ];
}
