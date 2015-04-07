<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Account;
use App\VehicleKind;
use Input;
use Redirect;

class VehicleKindsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$vehicle_kinds = VehicleKind::all();

		return view('vehicle_kinds.index', compact('vehicle_kinds'));
	}

	public function create()
	{
		$vehicle_kind = new VehicleKind();

		return view('vehicle_kinds.create', compact('vehicle_kind'));
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => ['required'],
		]);

		$input = Input::all();

		$vehicle_kind = new VehicleKind($input);
		$vehicle_kind->account_id = Account::first()->id;
		$vehicle_kind->save();

		return Redirect::route('vehicle_kinds.index')
			->with('message', trans('vehicle_kinds.messages.store'));
	}

	public function edit($id)
	{
		$vehicle_kind = VehicleKind::find($id);

		return view('vehicle_kinds.edit', compact('vehicle_kind'));
	}

	public function update($id, Request $request)
	{
		$this->validate($request, [
			'name' => ['required'],
		]);

		$input = Input::all();

		$vehicle_kind = VehicleKind::find($id);

		$vehicle_kind->update($input);

		return Redirect::route('vehicle_kinds.index')
			->with('message', trans('vehicle_kinds.messages.update'));
	}

	public function destroy($id)
	{
		$vehicle_kind = VehicleKind::find($id);

		$vehicle_kind->delete();

		return Redirect::route('vehicle_kinds.index')
			->with('message', trans('vehicle_kinds.messages.destroy'));
	}

}
