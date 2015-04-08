<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

	public function register()
	{
    // foreach (glob(app_path().'/Repositories/*.php') as $filename) {
    //   require_once($filename);
    // }
    //
    // App::bind('App\Repositories\VehicleBrandInterface', 'App\Repositories\VehicleBrandRepository');
    // App::bind('App\Repositories\VehicleKindInterface', 'App\Repositories\VehicleKindRepository');
	}

}
