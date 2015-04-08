<?php namespace App\Repositories;

use Auth;

class VehicleKindRepository {

  protected $model;

  public function __construct() {
    $this->model = Auth::user()->account->vehicle_kinds();
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
