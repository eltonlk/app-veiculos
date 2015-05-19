<?php

Route::get('/', 'Auth\AuthController@getlogin');

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::get('/dashboard', 'DashboardController@index');

Route::get('/settings', 'SettingsController@index');

Route::resource('accounts', 'AccountsController', [ 'only' => ['update', 'destroy'] ]);

Route::resource('cities', 'CitiesController', [ 'only' => 'index' ]);

Route::resource('destinations', 'DestinationsController', [ 'except' => 'show' ]);

Route::resource('maintenances', 'MaintenancesController', [ 'except' => 'show' ]);

Route::resource('supplies', 'SuppliesController', [ 'except' => 'show' ]);

Route::resource('users', 'UsersController', [ 'except' => 'show' ]);

Route::resource('vehicles', 'VehiclesController');

Route::resource('vehicle_brands', 'VehicleBrandsController', [ 'except' => 'show' ]);

Route::resource('vehicle_kinds', 'VehicleKindsController', [ 'except' => 'show' ]);

