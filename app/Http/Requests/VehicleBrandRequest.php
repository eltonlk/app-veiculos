<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class VehicleBrandRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
      'name' => 'required',
		];
	}

}
