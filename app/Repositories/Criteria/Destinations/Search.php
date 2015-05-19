<?php namespace App\Repositories\Criteria\Destinations;

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

      if (old('state_id')) {
        $model = $model->where('state_id', '=', old('state_id'));
      }

      if (old('city_id')) {
        $model = $model->where('city_id', '=', old('city_id'));
      }
    }

    return $model;
  }

}
