<?php namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class VehiclesRepository extends Repository {

  public function model()
  {
    return 'App\Vehicle';
  }

}
