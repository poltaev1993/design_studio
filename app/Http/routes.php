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

        Route::group(['prefix' => 'control'], function() {

            Route::controller('/{slug}/greetings', 'GreetingController');
            Route::controller('/{slug}/projects', 'ProjectsController');
            Route::controller('/{slug}/slider', 'SliderController');
            Route::controller('/{slug}/members', 'MemberController');
            Route::controller('/{slug}/about', 'AboutController');
            Route::controller('/{slug}/reviews', 'ReviewsController');
            Route::controller('/{slug}/questions', 'QuestionController');
            Route::controller('/{slug}/blog', 'BlogController');
            Route::controller('/{slug}/partners', 'PartnerController');
            Route::controller('/{slug}/processes', 'ProcessController');
            Route::controller('/{slug}/requests', 'RequestsController');

            Route::controller('/{slug}', 'SlugController');

        });

        Route::controller('/categories', 'CategoryController');

        Route::controller('/', 'AdminController');

    });

});

Route::post('/page/callback-request', 'PageController@postCallbackRequest');
Route::controller('/page/{slug}', 'PageController');

Route::controller('/', 'MainController');