<?php

	Route::get('/', 'AdminController@index')->middleware('can:view-admin');
	Route::get('/test', 'AdminController@test')->middleware('auth');

	/* USERS AUTHENTICATION */
	Route::get('/login', 'UsersSessionsController@show')->middleware('guest');
	Route::post('/login', 'UsersSessionsController@create')->middleware('guest');
	Route::get('/logout', 'UsersSessionsController@destroy')->middleware('auth');

	/* ROLES AND PERMISSIONS */
	Route::get('/roles/{role}/edit', 'RolesController@edit');

	/* TEST */
	Route::get('/test', 'AdminController@test');