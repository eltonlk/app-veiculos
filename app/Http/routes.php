<?php

Route::get('/', 'Auth\AuthController@getlogin');

Route::get('/dashboard', 'DashboardController@index');

Route::controllers([
	'auth'     => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
