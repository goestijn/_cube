<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        
    	return view('admin::index');

    })->middleware('auth');

    Route::get('/login', 'UsersSessionsController@create')->middleware('guest');
    Route::post('/login', 'UsersSessionsController@store')->middleware('guest');
    Route::get('/logout', 'UsersSessionsController@delete')->middleware('auth');

});
