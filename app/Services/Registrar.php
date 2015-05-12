<?php namespace App\Services;

use App\Account;
use App\VehicleBrand;
use App\VehicleKind;
use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	public function validator(array $data)
	{
		return Validator::make($data, [
			'name'     => 'required|max:255',
			'email'    => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
      'state_id' => 'required',
      'city_id'  => 'required',
		]);
	}

	public function create(array $data)
	{
    $account = Account::create([
			'name'     => $data['name'],
      'state_id' => $data['state_id'],
      'city_id'  => $data['city_id'],
      'zip'      => $data['zip'],
      'district' => $data['district'],
      'address'  => $data['address'],
			'email'    => $data['email'],
      'phone'    => $data['phone'],
    ]);

    $account->setCurrent();

    $user = User::create([
			'name'       => $data['name'],
      'state_id'   => $data['state_id'],
      'city_id'    => $data['city_id'],
      'zip'        => $data['zip'],
      'district'   => $data['district'],
      'address'    => $data['address'],
      'phone'      => $data['phone'],
			'email'      => $data['email'],
			'password'   => bcrypt($data['password'])
		]);

    VehicleKind::create(['name' => 'Carro']);
    VehicleKind::create(['name' => 'Moto']);
    VehicleKind::create(['name' => 'Caminhão']);;

    VehicleBrand::create(['name' => 'Acura']);
    VehicleBrand::create(['name' => 'Audi']);
    VehicleBrand::create(['name' => 'BMW']);
    VehicleBrand::create(['name' => 'Chevrolet']);
    VehicleBrand::create(['name' => 'Chrysler']);
    VehicleBrand::create(['name' => 'Citroen']);
    VehicleBrand::create(['name' => 'Effa']);
    VehicleBrand::create(['name' => 'Fiat']);
    VehicleBrand::create(['name' => 'Ford']);
    VehicleBrand::create(['name' => 'Geely']);
    VehicleBrand::create(['name' => 'Honda']);
    VehicleBrand::create(['name' => 'Hyundai']);
    VehicleBrand::create(['name' => 'Jac Motors']);
    VehicleBrand::create(['name' => 'Kia']);
    VehicleBrand::create(['name' => 'Lexus']);
    VehicleBrand::create(['name' => 'Mazda']);
    VehicleBrand::create(['name' => 'Mercedes-Benz']);
    VehicleBrand::create(['name' => 'Mitsubishi']);
    VehicleBrand::create(['name' => 'Nissan']);
    VehicleBrand::create(['name' => 'Opel']);
    VehicleBrand::create(['name' => 'Peugeot']);
    VehicleBrand::create(['name' => 'Renault']);
    VehicleBrand::create(['name' => 'Seat']);
    VehicleBrand::create(['name' => 'Toyota']);
    VehicleBrand::create(['name' => 'Volkswagen']);
    VehicleBrand::create(['name' => 'Volvo']);

    return $user;
	}
}
