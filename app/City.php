<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model {

  use SoftDeletes;

  protected $table = 'cities';

  protected $fillable = ['name'];

  protected $hidden = ['id', 'deleted_at'];

  protected $dates = ['deleted_at'];

  public function state()
  {
    return $this->belongsTo('App\State');
  }

}
