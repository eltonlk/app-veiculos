<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class VehicleRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
      'name'         => 'required|max:255',
      'brand_id'     => 'required',
      'kind_id'      => 'required',
      'model'        => 'required|max:255',
      'color'        => 'required|max:255',
      'year'         => 'required|numeric',
      'amount'       => 'required',
      'purchased_in' => 'required',
		];
	}

}
