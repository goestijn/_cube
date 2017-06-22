<?php

	Route::get('/', 'AdminController@index')->middleware('auth');

	Route::get('/login', 'UsersSessionsController@show')->middleware('guest');
	Route::post('/login', 'UsersSessionsController@create')->middleware('guest');
	Route::get('/logout', 'UsersSessionsController@destroy')->middleware('auth');