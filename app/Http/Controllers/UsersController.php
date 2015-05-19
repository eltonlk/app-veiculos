<?php namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UsersRepository;
use App\User;
use Redirect;

class UsersController extends AppController {

  public function __construct(UsersRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

	public function index()
	{
		$users = $this->repository->paginate(20);

		return view('users.index', compact('users'));
	}

	public function create()
	{
		$user = new User();

		return view('users.create', compact('user'));
	}

	public function store(UserStoreRequest $request)
	{
    $this->repository->create($request->all());

    flash()->success(trans('users.messages.flash.store'));

		return Redirect::route('users.index');
	}

	public function edit($id)
	{
		$user = $this->repository->find($id);

		return view('users.edit', compact('user'));
	}

	public function update(UserUpdateRequest $request, $id)
	{
    $this->repository->updateRich($request->all(), $id);

    flash()->success(trans('users.messages.flash.update'));

		return Redirect::route('users.index');
	}

	public function destroy($id)
	{
    if (Auth::user()->id != $id)
    {
      $this->repository->delete($id);

      flash()->success(trans('users.messages.flash.destroy'));
    } else {
      flash()->warning(trans('users.messages.flash.destroy_current_user'));
    }

		return Redirect::route('users.index');
	}

}
