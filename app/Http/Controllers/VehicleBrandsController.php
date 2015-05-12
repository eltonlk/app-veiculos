<?php namespace App\Http\Controllers;

use App\Http\Requests\VehicleBrandRequest;
use App\Repositories\VehicleBrandsRepository;
use App\VehicleBrand;
use Auth;
use Redirect;

class VehicleBrandsController extends AppController {

  public function __construct(VehicleBrandsRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

	public function index()
	{
		$vehicle_brands = $this->repository->all();

		return view('vehicle_brands.index', compact('vehicle_brands'));
	}

	public function create()
	{
		$vehicle_brand = new VehicleBrand();

		return view('vehicle_brands.create', compact('vehicle_brand'));
	}

	public function store(VehicleBrandRequest $request)
	{
    $this->repository->create($request->all());

    flash()->success(trans('vehicle_brands.messages.store'));

		return Redirect::route('vehicle_brands.index');
	}

	public function edit($id)
	{
		$vehicle_brand = $this->repository->find($id);

		return view('vehicle_brands.edit', compact('vehicle_brand'));
	}

	public function update(VehicleBrandRequest $request, $id)
	{
    $this->repository->updateRich($request->all(), $id);

    flash()->success(trans('vehicle_brands.messages.update'));

		return Redirect::route('vehicle_brands.index');
	}

	public function destroy($id)
	{
    $this->repository->delete($id);

    flash()->success(trans('vehicle_brands.messages.destroy'));

		return Redirect::route('vehicle_brands.index');
	}

}
