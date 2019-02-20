<?php

Route::middleware(['maintenance'])->group(function() {
	Route::get('/', 'PlaylistController@index');
	Route::get('/playlists/new', 'PlaylistController@create');
	Route::get('/playlists/{id}', 'PlaylistController@index');
	Route::post('/playlists', 'PlaylistController@store');

	Route::get('/signup', 'SignUpController@index');
	Route::post('/signup', 'SignUpController@signup');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::middleware(['authenticated'])->group(function() {
  Route::get('/profile', 'AdminController@index');
  Route::get('/invoices', 'InvoicesController@index');
  Route::get('/setting', 'SettingController@index');
  Route::post('/setting', 'SettingController@change');
});

Route::get('/maintenance', 'MaintenanceController@index');