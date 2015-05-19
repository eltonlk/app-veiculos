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




Form::macro('search', function($url) {
  $options = ['url' => $url, 'class' => 'form-search'];

  if (!old('search')) {
    $options['hidden'] = true;
  }

  return $this->open($options);
});

Form::macro('submitSearch', function($url) {
  return '<div class="form-group">' .
    Form::submit(trans('text.search'), array('class'=>'btn btn-default')) .
    ' ' .
    trans('text.or') .
    ' ' .
    link_to($url, trans('text.cancel'), ['class' => 'link-to-cancel']) .
  '</div>';
});

Form::macro('submitModel', function($url, $text) {
  return '<div class="form-group">' .
    Form::submit($text, array('class'=>'btn btn-primary')) .
    ' ' .
    trans('text.or') .
    ' ' .
    link_to($url, trans('text.cancel'), ['class' => 'link-to-cancel']) .
  '</div>';
});
