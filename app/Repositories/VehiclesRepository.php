<?php namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class VehiclesRepository extends Repository {

  public function model()
  {
    return 'App\Vehicle';
  }

  public function toCsv()
  {
    $this->applyCriteria();

    $columns = [
      'vehicle_kinds.name as kind',
      'vehicle_brands.name as brand',
      'vehicles.name as name',
      'model',
      'color',
      'year',
      'purchased_in',
      'sold',
      'amount',
    ];

    return $this->model
      ->join('vehicle_kinds', 'vehicle_kinds.id', '=', 'vehicles.kind_id')
      ->join('vehicle_brands', 'vehicle_brands.id', '=', 'vehicles.brand_id')
      ->get($columns)
      ->toArray();
  }

}
