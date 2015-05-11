<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	protected $table = 'accounts';

	protected $fillable = ['name', 'state_id', 'city_id', 'zip', 'district', 'address', 'email', 'phone'];

	protected $hidden = ['id'];

  public function city()
  {
    return $this->belongsTo('App\City');
  }

  public function state()
  {
    return $this->belongsTo('App\State');
  }

  public function vehicle_brands()
  {
    return $this->hasMany('App\VehicleBrand');
  }

  public function vehicle_kinds()
  {
    return $this->hasMany('App\VehicleKind');
  }
}
