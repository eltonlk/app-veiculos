<?php namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Repositories\AccountsRepository;
use App\Account;
use Redirect;

class AccountsController extends AppController {

  public function __construct(AccountsRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

	public function update(AccountRequest $request, $id)
	{
    $this->repository->updateRich($request->all(), $id);

    flash()->success(trans('accounts.messages.flash.update'));

		return Redirect('/settings');
	}

	public function destroy($id)
	{
    $this->repository->delete($id);

    flash()->success(trans('accounts.messages.flash.destroy'));

		return Redirect('/');
	}

}
