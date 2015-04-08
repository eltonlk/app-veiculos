<?php namespace App\Repositories;

use Auth;

class VehicleBrandRepository {

  protected $model;

  public function __construct() {
    $this->model = Auth::user()->account->vehicle_brands();
  }

	public function all()
	{
    return $this->model->orderBy('name')->get();
	}

	public function find($id)
	{
    return $this->model->findOrFail($id);
	}

}
