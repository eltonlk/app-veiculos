<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacrosServiceProvider extends ServiceProvider {

  public function boot()
  {
    foreach (glob(app_path().'/Macros/*.php') as $filename) {
      require_once($filename);
    }
  }

  public function register()
  {
  }

}