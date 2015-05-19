<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TenantableTrait;
use CurrencyHelper;

class Maintenance extends Model {

  use TenantableTrait;

  protected $table = 'maintenances';

  protected $fillable = ['vehicle_id', 'description', 'amount'];

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
