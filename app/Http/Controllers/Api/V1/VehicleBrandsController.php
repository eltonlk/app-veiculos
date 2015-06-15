<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\VehicleBrandRequest;
use App\Repositories\VehicleBrandsRepository;
use App\VehicleBrand;
use Redirect;

class VehicleBrandsController extends AppController {

  public function __construct(VehicleBrandsRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth.basic');
  }

	public function index()
	{
    return $this->repository->all();
	}

	public function show($id)
	{
		return $this->repository->find($id);
	}

	public function store(VehicleBrandRequest $request)
	{
		return $this->repository->create($request->all());
	}

	public function update(VehicleBrandRequest $request, $id)
	{
		return $this->repository->updateRich($request->all(), $id);
	}

	public function destroy($id)
	{
		return $this->repository->delete($id);
	}

}
