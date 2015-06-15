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
Route::get('destinations.csv', [ 'as' => 'destinations.index.csv', 'uses' => 'DestinationsController@indexCsv' ]);
Route::get('destinations.pdf', [ 'as' => 'destinations.index.pdf', 'uses' => 'DestinationsController@indexPdf' ]);

Route::resource('maintenances', 'MaintenancesController', [ 'except' => 'show' ]);
Route::get('maintenances.csv', [ 'as' => 'maintenances.index.csv', 'uses' => 'MaintenancesController@indexCsv' ]);
Route::get('maintenances.pdf', [ 'as' => 'maintenances.index.pdf', 'uses' => 'MaintenancesController@indexPdf' ]);

Route::resource('supplies', 'SuppliesController', [ 'except' => 'show' ]);
Route::get('supplies.csv', [ 'as' => 'supplies.index.csv', 'uses' => 'SuppliesController@indexCsv' ]);
Route::get('supplies.pdf', [ 'as' => 'supplies.index.pdf', 'uses' => 'SuppliesController@indexPdf' ]);

Route::resource('users', 'UsersController', [ 'except' => 'show' ]);

Route::resource('vehicles', 'VehiclesController');
Route::get('vehicles.csv', [ 'as' => 'vehicles.index.csv', 'uses' => 'VehiclesController@indexCsv' ]);
Route::get('vehicles.pdf', [ 'as' => 'vehicles.index.pdf', 'uses' => 'VehiclesController@indexPdf' ]);

Route::resource('vehicle_brands', 'VehicleBrandsController', [ 'except' => 'show' ]);
Route::get('vehicle_brands.csv', [ 'as' => 'vehicle_brands.index.csv', 'uses' => 'VehicleBrandsController@indexCsv' ]);
Route::get('vehicle_brands.pdf', [ 'as' => 'vehicle_brands.index.pdf', 'uses' => 'VehicleBrandsController@indexPdf' ]);

Route::resource('vehicle_kinds', 'VehicleKindsController', [ 'except' => 'show' ]);
Route::get('vehicle_kinds.csv', [ 'as' => 'vehicle_kinds.index.csv', 'uses' => 'VehicleKindsController@indexCsv' ]);
Route::get('vehicle_kinds.pdf', [ 'as' => 'vehicle_kinds.index.pdf', 'uses' => 'VehicleKindsController@indexPdf' ]);

Route::group([ 'prefix' => 'api' ], function() {
  Route::group([ 'prefix' => 'v1' ], function() {
    Route::resource('vehicles', 'Api\V1\VehiclesController', [ 'only' => [ 'index', 'show', 'store', 'update', 'destroy' ] ]);

    Route::resource('vehicle_brands', 'Api\V1\VehicleBrandsController', [ 'only' => [ 'index', 'show', 'store', 'update', 'destroy' ] ]);

    Route::resource('vehicle_kinds', 'Api\V1\VehicleKindsController', [ 'only' => [ 'index', 'show', 'store', 'update', 'destroy' ] ]);
  });
});
