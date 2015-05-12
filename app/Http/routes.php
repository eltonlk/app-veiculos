<?php

Route::get('/', 'Auth\AuthController@getlogin');

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::get('/dashboard', 'DashboardController@index');

Route::resource('cities', 'CitiesController', [ 'only' => 'index' ]);

Route::resource('vehicle_brands', 'VehicleBrandsController', [ 'except' => 'show' ]);

Route::resource('vehicle_kinds', 'VehicleKindsController', [ 'except' => 'show' ]);
