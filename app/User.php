<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use App\Traits\TenantableTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, TenantableTrait;

	protected $table = 'users';

	protected $fillable = ['name', 'state_id', 'city_id', 'zip', 'district', 'address', 'phone', 'email', 'password'];

	protected $hidden = ['password', 'remember_token'];

  public function setPasswordAttribute($value)
  {
    $this->attributes['password'] = bcrypt($value);
  }

	public function account()
	{
		return $this->belongsTo('App\Account');
	}

  public function city()
  {
    return $this->belongsTo('App\City');
  }

  public function state()
  {
    return $this->belongsTo('App\State');
  }

}
