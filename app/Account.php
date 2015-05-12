<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Account extends Model {

	protected $table = 'accounts';

	protected $fillable = ['name', 'state_id', 'city_id', 'zip', 'district', 'address', 'email', 'phone'];

	protected $hidden = [];

  public function city()
  {
    return $this->belongsTo('App\City');
  }

  public function state()
  {
    return $this->belongsTo('App\State');
  }

  // Multitenant Methods
  public function setCurrent()
  {
    Account::setCurrentId($this->id);
  }

  public static function setCurrentId($id)
  {
    Session::set('accountId', $id);
  }

  public static function getCurrent()
  {
    return static::find(Session::get('accountId'));
  }

}
