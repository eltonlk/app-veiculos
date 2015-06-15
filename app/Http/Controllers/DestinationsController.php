<?php namespace App\Http\Controllers;

use App\Http\Requests\DestinationRequest;
use App\Repositories\Criteria\Destinations\Search;
use App\Repositories\DestinationsRepository;
use App\Destination;
use Carbon;
use Csv;
use PDF;
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
    $destination = new Destination([
		  'output_in' => Carbon::now(),
		]);

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

  public function indexPdf()
  {
		$destinations = $this->repository->pushCriteria(new Search())->all();

    $pdf = PDF::loadView('destinations.index_pdf', compact('destinations'));

    return $pdf->download(trans('destinations.index.filename.pdf'));
  }

  public function indexCsv()
  {
		$destinations = $this->repository->pushCriteria(new Search())->toCsv();

    Csv::create($destinations, [
      trans('validation.attributes.output_in'),
      trans('validation.attributes.returned_in'),
      trans('validation.attributes.vehicle'),
      trans('validation.attributes.address'),
      trans('validation.attributes.district'),
      trans('validation.attributes.city'),
      trans('validation.attributes.state'),
    ]);

    return Csv::download(trans('destinations.index.filename.csv'));
  }

}
