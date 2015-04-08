<?php namespace App\Http\Controllers;

use App\Http\Requests\VehicleKindRequest;
use App\Repositories\VehicleKindRepository;
use App\VehicleKind;
use Auth;
use Redirect;

class VehicleKindsController extends AppController {

  public function __construct(VehicleKindRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

	public function index()
	{
    $vehicle_kinds = $this->repository->all();

		return view('vehicle_kinds.index', compact('vehicle_kinds'));
	}

	public function create()
	{
		$vehicle_kind = new VehicleKind();

		return view('vehicle_kinds.create', compact('vehicle_kind'));
	}

	public function store(VehicleKindRequest $request)
	{
		$vehicle_kind = new VehicleKind($request->all());
		$vehicle_kind->account_id = Auth::user()->account_id;
		$vehicle_kind->save();

    flash()->success(trans('vehicle_kinds.messages.store', [ 'name' => $vehicle_kind->name ]));

		return Redirect::route('vehicle_kinds.index');
	}

	public function edit($id)
	{
		$vehicle_kind = $this->repository->find($id);

		return view('vehicle_kinds.edit', compact('vehicle_kind'));
	}

	public function update(VehicleKindRequest $request, $id)
	{
		$vehicle_kind = $this->repository->find($id);
		$vehicle_kind->update($request->all());

    flash()->success(trans('vehicle_kinds.messages.update', [ 'name' => $vehicle_kind->name ]));

		return Redirect::route('vehicle_kinds.index');
	}

	public function destroy($id)
	{
		$vehicle_kind = $this->repository->find($id);
		$vehicle_kind->delete();

    flash()->success(trans('vehicle_kinds.messages.destroy', [ 'name' => $vehicle_kind->name ]));

		return Redirect::route('vehicle_kinds.index');
	}

}
