<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('pages.inc.header', function($view) {
            


        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
