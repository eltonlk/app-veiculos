<?php namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class MaintenancesRepository extends Repository {

  public function model()
  {
    return 'App\Maintenance';
  }

}
