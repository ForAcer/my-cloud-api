<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers'], function ($api) {
        /**
         * 认证路由
         */
        $api->post('login', 'AuthenticateController@authenticate');

        /**
         * 需要api认证的路由
         */
        $api->group([
            'middleware' => 'api.auth'
        ], function ($api) {
            $api->get('home', 'ExampleController@index');
            $api->resource('articles', 'ArticlesController');
            $api->resource('bookmarks', 'BookmarksController');
        });
    });
});

