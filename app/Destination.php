<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TenantableTrait;
use CurrencyHelper;

class Destination extends Model {

  use TenantableTrait;

  protected $table = 'destinations';

  protected $fillable = ['vehicle_id', 'address', 'district', 'state_id', 'city_id', 'description'];

  protected $hidden = [];

  protected $dates = [];

  public function account()
  {
    return $this->belongsTo('App\Account');
  }

  public function vehicle()
  {
    return $this->belongsTo('App\Vehicle');
  }

  public function state()
  {
    return $this->belongsTo('App\State');
  }

  public function city()
  {
    return $this->belongsTo('App\City');
  }

}
