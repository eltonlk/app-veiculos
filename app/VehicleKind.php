<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleKind extends Model {

  use SoftDeletes;

  protected $table = 'vehicle_kinds';

  protected $fillable = ['name'];

  protected $hidden = ['id', 'deleted_at'];

  protected $dates = ['deleted_at'];

  public function account()
  {
    return $this->belongsTo('App\Account');
  }

}
