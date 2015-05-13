<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\TenantableTrait;

class Vehicle extends Model {

  use TenantableTrait;

  protected $table = 'vehicles';

  protected $fillable = ['name', 'brand_id', 'kind_id', 'model', 'color', 'year', 'amount', 'purchased_in', 'sold', 'description'];

  protected $hidden = [];

  protected $dates = ['purchased_in', 'sold'];

  public function setPurchasedIn($date)
  {
    $this->attributes['purchased_in'] = Carbon::createFromFormat(trans('date.formats.default'), $date);
  }

  public function account()
  {
    return $this->belongsTo('App\Account');
  }

  public function brand()
  {
    return $this->belongsTo('App\VehicleBrand', 'brand_id');
  }

  public function kind()
  {
    return $this->belongsTo('App\VehicleKind', 'kind_id');
  }

}
