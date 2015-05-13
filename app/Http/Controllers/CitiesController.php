<?php namespace App\Http\Controllers;

use App\City;
use Input;

class CitiesController extends Controller {

	public function index()
	{
		$cities = City::where('state_id', '=', Input::get('state_id'))->orderBy('name')->get();

    return response()->json($cities);
	}

}
