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
      'model'        => 'required',
      'color'        => 'required',
      'year'         => 'required|numeric',
      'amount'       => 'required|numeric',
      'purchased_in' => 'required|date',
      'sold'         => 'date',
		];
	}

}
