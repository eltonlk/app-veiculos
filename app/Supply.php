<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TenantableTrait;
use CurrencyHelper;

class Supply extends Model {

  use TenantableTrait;

  protected $table = 'supplies';

  protected $fillable = ['vehicle_id', 'liters', 'mileage', 'amount'];

  protected $hidden = [];

  protected $dates = [];

  public function setAmountAttribute($amount)
  {
    $this->attributes['amount'] = CurrencyHelper::delocalize($amount);
  }

  public function account()
  {
    return $this->belongsTo('App\Account');
  }

  public function vehicle()
  {
    return $this->belongsTo('App\Vehicle');
  }

}
