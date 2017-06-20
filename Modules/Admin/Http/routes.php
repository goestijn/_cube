<?php

	Route::group(['prefix' => 'admin'], function () {

	    Route::get('/', function () {
	        
	    	return view('admin::index');

	    });

	    /*Route::get('/login', 'UsersSessionsController@create')->middleware('guest');
	    Route::post('/login', 'UsersSessionsController@store')->middleware('guest');
	    Route::get('/logout', 'UsersSessionsController@delete')->middleware('auth');*/

	});
/*Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/', 'AdminController@index');
});*/
