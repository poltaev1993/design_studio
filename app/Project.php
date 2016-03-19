<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Order;
use Event, Cache;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'category_id',
        'executed_at',
        'purpose',
        'location',
        'area',
        'description'
    ];

    public function photos()
    {
        return $this->hasMany('App\ProjectPhoto');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeSorted($query)
    {
        $order = Order::project();

        return (is_array($order)) ? $query->orderBy(\DB::raw('FIELD(`id`, ' . implode(',', $order) . ')')) : $query;
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function() {
            //Event::fire('projects.saving');

            Cache::forget('projectsCache');
        });
    }
}
