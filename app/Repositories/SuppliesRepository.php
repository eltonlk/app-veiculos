<?php namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class SuppliesRepository extends Repository {

  public function model()
  {
    return 'App\Supply';
  }

  public function toCsv()
  {
    $this->applyCriteria();

    $columns = [
      'supplies.created_at as supply_created_at',
      'vehicles.name as vehicle',
      'liters',
      'mileage',
      'supplies.amount as supply_amount',
    ];

    return $this->model
      ->join('vehicles', 'vehicles.id', '=', 'supplies.vehicle_id')
      ->get($columns)
      ->toArray();
  }

}
