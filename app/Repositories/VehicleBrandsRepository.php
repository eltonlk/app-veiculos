<?php namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class VehicleBrandsRepository extends Repository {

  public function model()
  {
    return 'App\VehicleBrand';
  }

  public function toCsv()
  {
    $this->applyCriteria();

    $columns = [
      'name',
    ];

    return $this->model
      ->get($columns)
      ->toArray();
  }

}
