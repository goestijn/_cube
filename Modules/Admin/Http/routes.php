<?php

	Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers', 'middleware' => ['web']], function () {

		Route::get('/', 'AdminController@index');
		Route::post('/', 'AdminController@store');

	    /*Route::get('/login', 'UsersSessionsController@create')->middleware('guest');
	    Route::post('/login', 'UsersSessionsController@store')->middleware('guest');
	    Route::get('/logout', 'UsersSessionsController@delete')->middleware('auth');*/

	});
