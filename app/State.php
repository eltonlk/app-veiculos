<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model {

  use SoftDeletes;

  protected $table = 'states';

  protected $fillable = ['name', 'abbr'];

  protected $hidden = [];

  protected $dates = ['deleted_at'];

  public function cities()
  {
    return $this->hasMany('App\City');
  }

  public function scopeOptionsForSelect($query)
  {
    return array('' => trans('text.prompt')) + $query->orderBy('name')->lists('name','id');
  }

}
