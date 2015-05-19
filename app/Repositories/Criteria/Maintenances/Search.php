<?php namespace App\Repositories\Criteria\Maintenances;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

use DateHelper;

class Search extends Criteria {

  public function apply($model, Repository $repository)
  {
    if (!empty(old()))
    {
      if (old('created_from')) {
        $model = $model->where('created_at', '>=', DateHelper::delocalize(old('created_from')));
      }

      if (old('created_to')) {
        $model = $model->where('created_at', '<=', DateHelper::delocalize(old('created_to')));
      }

      if (old('vehicle_id')) {
        $model = $model->where('vehicle_id', '=', old('vehicle_id'));
      }
    }

    return $model;
  }

}
