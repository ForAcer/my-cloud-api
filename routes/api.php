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
        $api->get('/home', 'ExampleController@index');

        /**
         * 认证路由
         */
        $api->group([
            'namespace' => 'Auth',
            'prefix' => 'auth'
        ], function ($api) {
            $api->post('login', 'AuthController@postLogin');
        });
    });
});

