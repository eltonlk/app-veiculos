<?php namespace App\Repositories\Criteria\Vehicles;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

use DateHelper;

class Search extends Criteria {

  public function apply($model, Repository $repository)
  {
    if (!empty(old()))
    {
      if (old('date_from')) {
        $model = $model->where(old('date'), '>=', DateHelper::delocalize(old('date_from')));
      }

      if (old('date_to')) {
        $model = $model->where(old('date'), '<=', DateHelper::delocalize(old('date_to')));
      }

      if (old('kind_id')) {
        $model = $model->where('kind_id', '=', old('kind_id'));
      }

      if (old('brand_id')) {
        $model = $model->where('brand_id', '=', old('brand_id'));
      }
    }

    return $model;
  }

}
