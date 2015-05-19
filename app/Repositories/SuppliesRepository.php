<?php namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class SuppliesRepository extends Repository {

  public function model()
  {
    return 'App\Supply';
  }

}
