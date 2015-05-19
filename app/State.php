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

  public function scopeOptionsForSelect($query, $prompt = true, $blank = false)
  {
    $prompt = [];

    if ($prompt)
    {
      $prompt = array('' => trans('text.prompt'));
    }
    else if ($blank)
    {
      $prompt = array('' => trans('text.all'));
    }

    return $prompt + $query->orderBy('name')->lists('name','id');
  }

}
