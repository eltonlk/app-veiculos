<?php namespace App\Repositories\Criteria\Vehicles;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

use DateHelper;
use Input;

class Search extends Criteria {

  public function apply($model, Repository $repository)
  {
    if (Input::get('date_from')) {
      $model = $model->where(Input::get('date'), '>=', DateHelper::delocalize(Input::get('date_from')));
    }

    if (Input::get('date_to')) {
      $model = $model->where(Input::get('date'), '<=', DateHelper::delocalize(Input::get('date_to')));
    }

    if (Input::get('kind_id')) {
      $model = $model->where('kind_id', '=', Input::get('kind_id'));
    }

    if (Input::get('brand_id')) {
      $model = $model->where('brand_id', '=', Input::get('brand_id'));
    }

    return $model;
  }

}
