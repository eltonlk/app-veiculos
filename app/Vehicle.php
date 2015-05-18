<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TenantableTrait;
use CurrencyHelper;
use DateHelper;

class Vehicle extends Model {

  use TenantableTrait;

  protected $table = 'vehicles';

  protected $fillable = ['name', 'brand_id', 'kind_id', 'model', 'color', 'year', 'amount', 'purchased_in', 'sold', 'description'];

  protected $hidden = [];

  protected $dates = ['purchased_in', 'sold'];

  public function setAmountAttribute($amount)
  {
    $this->attributes['amount'] = CurrencyHelper::delocalize($amount);
  }

  public function setPurchasedInAttribute($date)
  {
    $this->attributes['purchased_in'] = DateHelper::delocalize($date);
  }

  public function setSoldAttribute($date)
  {
    $this->attributes['sold'] = DateHelper::delocalize($date);
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

  public function scopedateOptionsForSelect($query)
  {
    return [
      'purchased_in' => trans('validation.attributes.purchased_in'),
      'sold'         => trans('validation.attributes.sold')
    ];
  }

}
