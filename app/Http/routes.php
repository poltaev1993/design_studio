<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['prefix' => 'admin'], function() {

    Route::get('login', 'AuthAdminController@getLogin');
    Route::post('login', 'AuthAdminController@postLogin');

    Route::group(['middleware' => 'auth'], function() {

        Route::get('logout', 'AuthAdminController@getLogout');
        Route::controller('/projects', 'ProjectsController');
        Route::controller('/blog', 'BlogController');
        Route::controller('/requests', 'RequestsController');
        Route::controller('/reviews', 'ReviewsController');
        Route::controller('/scroll', 'ScrollController');
        Route::controller('/about', 'AboutController');

        Route::group(['prefix' => 'school'], function() {
            Route::controller('/categories', 'SchoolCategoryController');
            Route::controller('/slider', 'SchoolSliderController');
            Route::controller('/news', 'SchoolNewsController');
            Route::get('/', function() {
                return redirect()->to('/admin');
            });
        });

        Route::controller('/', 'AdminController');

    });

});

Route::controller('/', 'MainController');