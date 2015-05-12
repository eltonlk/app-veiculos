<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model {

  use SoftDeletes;

  protected $table = 'cities';

  protected $fillable = ['name'];

  protected $hidden = [];

  protected $dates = ['deleted_at'];

  public function state()
  {
    return $this->belongsTo('App\State');
  }

  public function scopeOptionsForSelect($query, $state_id)
  {
    if (isset($state_id) and !empty($state_id)) {
      return array('' => trans('text.prompt')) + $query->whereStateId($state_id)->orderBy('name')->lists('name','id');
    } else {
      return array('' => trans('cities.text.prompt'));
    }
  }

}
