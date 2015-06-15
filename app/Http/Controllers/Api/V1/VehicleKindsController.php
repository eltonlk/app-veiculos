<?php namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\VehicleKindRequest;
use App\Repositories\VehicleKindsRepository;
use App\VehicleKind;
use Redirect;

class VehicleKindsController extends AppController {

  public function __construct(VehicleKindsRepository $repository)
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

	public function store(VehicleKindRequest $request)
	{
		return $this->repository->create($request->all());
	}

	public function update(VehicleKindRequest $request, $id)
	{
		return $this->repository->updateRich($request->all(), $id);
	}

	public function destroy($id)
	{
		return $this->repository->delete($id);
	}

}
