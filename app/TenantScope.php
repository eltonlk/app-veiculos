<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;
use App\Account;

class TenantScope implements ScopeInterface {

  public function apply(Builder $builder, Model $model)
  {
    $account = Account::getCurrent();

    if (isset($account))
    {
      $builder->whereHas('account', function($query) use($account)
      {
        $query->where('accounts.id', $account->id);
      });
    }
  }

  public function remove(Builder $builder, Model $model)
  {
    dd('remove called');
  }

}
