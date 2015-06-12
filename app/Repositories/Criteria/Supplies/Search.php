<?php namespace App\Repositories\Criteria\Supplies;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

use DateHelper;
use Input;

class Search extends Criteria {

  public function apply($model, Repository $repository)
  {
    if (Input::get('created_from')) {
      $model = $model->where('created_at', '>=', DateHelper::delocalize(Input::get('created_from')));
    }

    if (Input::get('created_to')) {
      $model = $model->where('created_at', '<=', DateHelper::delocalize(Input::get('created_to')));
    }

    if (Input::get('vehicle_id')) {
      $model = $model->where('vehicle_id', '=', Input::get('vehicle_id'));
    }

    return $model;
  }

}
