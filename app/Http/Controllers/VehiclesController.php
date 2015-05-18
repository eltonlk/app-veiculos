<?php namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Repositories\Criteria\Vehicles\Search;
use App\Repositories\VehiclesRepository;
use App\Vehicle;
use Carbon;
use Redirect;

class VehiclesController extends AppController {

  public function __construct(VehiclesRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

	public function index()
	{
    $vehicles = $this->repository->pushCriteria(new Search())->all();

		return view('vehicles.index', compact('vehicles'));
	}

	public function show($id)
	{
		$vehicle = $this->repository->find($id);

		return view('vehicles.show', compact('vehicle'));
	}

	public function create()
	{
		$vehicle = new Vehicle([
		  'purchased_in' => Carbon::now(),
		]);

		return view('vehicles.create', compact('vehicle'));
	}

	public function store(VehicleRequest $request)
	{
    $this->repository->create($request->all());

    flash()->success(trans('vehicles.messages.flash.store'));

		return Redirect::route('vehicles.index');
	}

	public function edit($id)
	{
		$vehicle = $this->repository->find($id);

		return view('vehicles.edit', compact('vehicle'));
	}

	public function update(VehicleRequest $request, $id)
	{
    $this->repository->updateRich($request->all(), $id);

    flash()->success(trans('vehicles.messages.flash.update'));

		return Redirect::route('vehicles.index');
	}

	public function destroy($id)
	{
    $this->repository->delete($id);

    flash()->success(trans('vehicles.messages.flash.destroy'));

		return Redirect::route('vehicles.index');
	}

}
