<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Account;
use App\VehicleBrand;
use Input;
use Redirect;

class VehicleBrandsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$vehicle_brands = VehicleBrand::all();

		return view('vehicle_brands.index', compact('vehicle_brands'));
	}

	public function create()
	{
		$vehicle_brand = new VehicleBrand();

		return view('vehicle_brands.create', compact('vehicle_brand'));
	}

		public function store(Request $request)
	{
		$this->validate($request, [
			'name' => ['required'],
		]);

		$input = Input::all();

		$vehicle_brand = new VehicleBrand($input);
		$vehicle_brand->account_id = Account::first()->id;
		$vehicle_brand->save();

		return Redirect::route('vehicle_brands.index')
			->with('message', trans('vehicle_brands.messages.store'));
	}

	public function edit($id)
	{
		$vehicle_brand = VehicleBrand::find($id);

		return view('vehicle_brands.edit', compact('vehicle_brand'));
	}

	public function update($id, Request $request)
	{
		$this->validate($request, [
			'name' => ['required'],
		]);

		$input = Input::all();

		$vehicle_brand = VehicleBrand::find($id);

		$vehicle_brand->update($input);

		return Redirect::route('vehicle_brands.index')
			->with('message', trans('vehicle_brands.messages.update'));
	}

	public function destroy($id)
	{
		$vehicle_brand = VehicleBrand::find($id);

		$vehicle_brand->delete();

		return Redirect::route('vehicle_brands.index')
			->with('message', trans('vehicle_brands.messages.destroy'));
	}
}
