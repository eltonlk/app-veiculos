<?php namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class DestinationsRepository extends Repository {

  public function model()
  {
    return 'App\Destination';
  }

  public function toCsv()
  {
    $this->applyCriteria();

    $columns = [
      'destinations.created_at as destination_created_at',
      'vehicles.name as vehicle',
      'address',
      'district',
      'cities.name as city',
      'states.name as state',
    ];

    return $this->model
      ->join('vehicles', 'vehicles.id', '=', 'destinations.vehicle_id')
      ->join('cities', 'cities.id', '=', 'destinations.city_id')
      ->join('states', 'states.id', '=', 'destinations.state_id')
      ->get($columns)
      ->toArray();
  }

}
