<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DestinationRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'vehicle_id' => 'required',
      'output_in'  => 'required',
      'address'    => 'required|max:255',
      'district'   => 'required|max:255',
      'state_id'   => 'required',
      'city_id'    => 'required',
    ];
  }

}
