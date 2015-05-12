<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\TenantableTrait;

class VehicleKind extends Model {

  use TenantableTrait, SoftDeletes;

  protected $table = 'vehicle_kinds';

  protected $fillable = ['name'];

  protected $hidden = [];

  protected $dates = ['deleted_at'];

  public function account()
  {
    return $this->belongsTo('App\Account');
  }

}
