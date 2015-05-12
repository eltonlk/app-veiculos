<?php namespace App\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class VehicleBrandsRepository extends Repository {

  public function model()
  {
    return 'App\VehicleBrand';
  }

}
