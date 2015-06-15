<?php namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class MaintenancesRepository extends Repository {

  public function model()
  {
    return 'App\Maintenance';
  }

  public function toCsv()
  {
    $this->applyCriteria();

    $columns = [
      'maintenances.created_at as maintenance_created_at',
      'vehicles.name as vehicle',
      'maintenances.amount as maintenance_amount',
    ];

    return $this->model
      ->join('vehicles', 'vehicles.id', '=', 'maintenances.vehicle_id')
      ->get($columns)
      ->toArray();
  }

}
