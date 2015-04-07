<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleBrand extends Model {

  use SoftDeletes;

  protected $table = 'vehicle_brands';

  protected $fillable = ['name'];

  protected $hidden = [];

  protected $dates = ['deleted_at'];

  public function account()
  {
    return $this->belongsTo('App\Account');
  }

}
