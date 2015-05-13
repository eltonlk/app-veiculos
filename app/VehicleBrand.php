<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\TenantableTrait;

class VehicleBrand extends Model {

  use TenantableTrait, SoftDeletes;

  protected $table = 'vehicle_brands';

  protected $fillable = ['name'];

  protected $hidden = [];

  protected $dates = ['deleted_at'];

  public function account()
  {
    return $this->belongsTo('App\Account');
  }

  public function scopeOptionsForSelect($query)
  {
    return $query->orderBy('name')->lists('name','id');
  }

}
