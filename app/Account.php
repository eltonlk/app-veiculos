<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	protected $table = 'accounts';

	protected $fillable = [];

	protected $hidden = [];

  public function vehicle_brands()
  {
    return $this->hasMany('App\VehicleBrand');
  }

  public function vehicle_kinds()
  {
    return $this->hasMany('App\VehicleKind');
  }
}
