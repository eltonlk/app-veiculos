<?php

Route::get('/', 'Auth\AuthController@getlogin');

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::get('/dashboard', 'DashboardController@index');

Route::resource('vehicle_brands', 'VehicleBrandsController');

Route::resource('vehicle_kinds', 'VehicleKindsController');
