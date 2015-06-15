<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TenantableTrait;
use CurrencyHelper;
use DateTimeHelper;

class Maintenance extends Model {

  use TenantableTrait;

  protected $table = 'maintenances';

  protected $fillable = ['vehicle_id', 'realized_at', 'description', 'amount'];

  protected $hidden = [];

  protected $dates = ['realized_at'];

  public function setRealizedAtAttribute($datetime)
  {
    $this->attributes['realized_at'] = DateTimeHelper::delocalize($datetime);
  }

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
