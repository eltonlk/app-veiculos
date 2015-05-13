<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserUpdateRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name'     => 'required|max:255',
			'email'    => 'required|email|max:255|unique:users,email,' . $this->segment(2),
      'state_id' => 'required',
      'city_id'  => 'required',
      'zip'      => 'max:255',
      'district' => 'max:255',
      'address'  => 'max:255',
      'phone'    => 'max:255',
		];
	}

}
