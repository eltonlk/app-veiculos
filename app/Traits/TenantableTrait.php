<?php namespace App\Traits;

use App\Account;
use App\TenantScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait TenantableTrait {

  public static function bootTenantableTrait()
  {
    static::addGlobalScope(new TenantScope);

    static::creating(function (Model $model) {
      $model->account_id = Account::getCurrent()->id;
    });
  }

}
