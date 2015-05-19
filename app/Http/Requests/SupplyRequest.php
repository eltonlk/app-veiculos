<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SupplyRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'vehicle_id'  => 'required',
      'liters'      => 'required',
      'mileage'     => 'required',
      'amount'      => 'required',
    ];
  }

}
