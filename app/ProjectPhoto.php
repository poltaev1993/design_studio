<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPhoto extends Model
{
    protected $table = 'project_photos';

    protected $fillable = [
        'image'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
