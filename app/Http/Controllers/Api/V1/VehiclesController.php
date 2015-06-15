<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\VehicleRequest;
use App\Repositories\Criteria\Vehicles\Search;
use App\Repositories\VehiclesRepository;
use App\Vehicle;
use Redirect;

class VehiclesController extends AppController {

  public function __construct(VehiclesRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth.basic');
  }

	public function index()
	{
		return $this->repository->pushCriteria(new Search())->all();
	}

	public function show($id)
	{
		return $this->repository->find($id);
	}

	public function store(VehicleRequest $request)
	{
		return $this->repository->create($request->all());
	}

	public function update(VehicleRequest $request, $id)
	{
		return $this->repository->updateRich($request->all(), $id);
	}

	public function destroy($id)
	{
		return $this->repository->delete($id);
	}

}
