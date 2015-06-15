<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TenantableTrait;
use DateTimeHelper;

class Destination extends Model {

  use TenantableTrait;

  protected $table = 'destinations';

  protected $fillable = ['vehicle_id', 'output_in', 'returned_in', 'address', 'district', 'state_id', 'city_id', 'description'];

  protected $hidden = [];

  protected $dates = ['output_in', 'returned_in'];

  public function setOutputInAttribute($datetime)
  {
    $this->attributes['output_in'] = DateTimeHelper::delocalize($datetime);
  }

  public function setReturnedInAttribute($datetime)
  {
    $this->attributes['returned_in'] = DateTimeHelper::delocalize($datetime);
  }

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
