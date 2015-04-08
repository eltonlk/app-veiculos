<?php namespace App\Http\Controllers;

use App\Http\Requests\VehicleBrandRequest;
use App\Repositories\VehicleBrandRepository;
use App\VehicleBrand;
use Auth;
use Redirect;

class VehicleBrandsController extends AppController {

  public function __construct(VehicleBrandRepository $repository)
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
		$vehicle_brand = new VehicleBrand($request->all());
		$vehicle_brand->account_id = Auth::user()->account_id;
		$vehicle_brand->save();

    flash()->success(trans('vehicle_brands.messages.store', [ 'name' => $vehicle_brand->name ]));

		return Redirect::route('vehicle_brands.index');
	}

	public function edit($id)
	{
		$vehicle_brand = $this->repository->find($id);

		return view('vehicle_brands.edit', compact('vehicle_brand'));
	}

	public function update(VehicleBrandRequest $request, $id)
	{
		$vehicle_brand = $this->repository->find($id);
		$vehicle_brand->update($request->all());

    flash()->success(trans('vehicle_brands.messages.update', [ 'name' => $vehicle_brand->name ]));

		return Redirect::route('vehicle_brands.index');
	}

	public function destroy($id)
	{
		$vehicle_brand = $this->repository->find($id);
		$vehicle_brand->delete();

    flash()->success(trans('vehicle_brands.messages.destroy', [ 'name' => $vehicle_brand->name ]));

		return Redirect::route('vehicle_brands.index');
	}

}
