<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'questioner',
        'answerer',
        'questioned_at'
    ];

    protected $table = 'faq';
}
