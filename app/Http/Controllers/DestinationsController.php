<?php namespace App\Http\Controllers;

use App\Http\Requests\DestinationRequest;
use App\Repositories\Criteria\Destinations\Search;
use App\Repositories\DestinationsRepository;
use App\Destination;
use Redirect;

class DestinationsController extends AppController {

  public function __construct(DestinationsRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

  public function index()
  {
    $destinations = $this->repository->pushCriteria(new Search())->paginate(20);

    return view('destinations.index', compact('destinations'));
  }

  public function create()
  {
    $destination = new Destination();

    return view('destinations.create', compact('destination'));
  }

  public function store(DestinationRequest $request)
  {
    $this->repository->create($request->all());

    flash()->success(trans('destinations.messages.flash.store'));

    return Redirect::route('destinations.index');
  }

  public function edit($id)
  {
    $destination = $this->repository->find($id);

    return view('destinations.edit', compact('destination'));
  }

  public function update(DestinationRequest $request, $id)
  {
    $this->repository->updateRich($request->all(), $id);

    flash()->success(trans('destinations.messages.flash.update'));

    return Redirect::route('destinations.index');
  }

  public function destroy($id)
  {
    $this->repository->delete($id);

    flash()->success(trans('destinations.messages.flash.destroy'));

    return Redirect::route('destinations.index');
  }

}
