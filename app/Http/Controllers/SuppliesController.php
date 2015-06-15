<?php namespace App\Http\Controllers;

use App\Http\Requests\SupplyRequest;
use App\Repositories\Criteria\Supplies\Search;
use App\Repositories\SuppliesRepository;
use App\Supply;
use Carbon;
use Csv;
use PDF;
use Redirect;

class SuppliesController extends AppController {

  public function __construct(SuppliesRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

  public function index()
  {
    $supplies = $this->repository->pushCriteria(new Search())->paginate(20);

    return view('supplies.index', compact('supplies'));
  }

  public function create()
  {
    $supply = new Supply([
		  'realized_at' => Carbon::now(),
		]);

    return view('supplies.create', compact('supply'));
  }

  public function store(SupplyRequest $request)
  {
    $this->repository->create($request->all());

    flash()->success(trans('supplies.messages.flash.store'));

    return Redirect::route('supplies.index');
  }

  public function edit($id)
  {
    $supply = $this->repository->find($id);

    return view('supplies.edit', compact('supply'));
  }

  public function update(SupplyRequest $request, $id)
  {
    $this->repository->updateRich($request->all(), $id);

    flash()->success(trans('supplies.messages.flash.update'));

    return Redirect::route('supplies.index');
  }

  public function destroy($id)
  {
    $this->repository->delete($id);

    flash()->success(trans('supplies.messages.flash.destroy'));

    return Redirect::route('supplies.index');
  }

  public function indexPdf()
  {
		$supplies = $this->repository->pushCriteria(new Search())->all();

    $pdf = PDF::loadView('supplies.index_pdf', compact('supplies'));

    return $pdf->download(trans('supplies.index.filename.pdf'));
  }

  public function indexCsv()
  {
		$supplies = $this->repository->pushCriteria(new Search())->toCsv();

    Csv::create($supplies, [
      trans('validation.attributes.realized_at'),
      trans('validation.attributes.vehicle'),
      trans('validation.attributes.liters'),
      trans('validation.attributes.mileage'),
      trans('validation.attributes.amount'),
    ]);

    return Csv::download(trans('supplies.index.filename.csv'));
  }

}
