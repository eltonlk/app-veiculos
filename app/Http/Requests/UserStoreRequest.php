<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserStoreRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name'     => 'required|max:255',
			'email'    => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
      'state_id' => 'required',
      'city_id'  => 'required',
      'zip'      => 'max:255',
      'district' => 'max:255',
      'address'  => 'max:255',
      'phone'    => 'max:255',
		];
	}

}
