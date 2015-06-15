<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MaintenanceRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'vehicle_id'  => 'required',
      'realized_at' => 'required',
      'amount'      => 'required',
      'description' => 'required',
    ];
  }

}
