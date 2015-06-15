<?php namespace App\Http\Controllers;

use App\Http\Requests\MaintenanceRequest;
use App\Repositories\Criteria\Maintenances\Search;
use App\Repositories\MaintenancesRepository;
use App\Maintenance;
use Csv;
use PDF;
use Redirect;

class MaintenancesController extends AppController {

  public function __construct(MaintenancesRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

  public function index()
  {
    $maintenances = $this->repository->pushCriteria(new Search())->paginate(20);

    return view('maintenances.index', compact('maintenances'));
  }

  public function create()
  {
    $maintenance = new Maintenance();

    return view('maintenances.create', compact('maintenance'));
  }

  public function store(MaintenanceRequest $request)
  {
    $this->repository->create($request->all());

    flash()->success(trans('maintenances.messages.flash.store'));

    return Redirect::route('maintenances.index');
  }

  public function edit($id)
  {
    $maintenance = $this->repository->find($id);

    return view('maintenances.edit', compact('maintenance'));
  }

  public function update(MaintenanceRequest $request, $id)
  {
    $this->repository->updateRich($request->all(), $id);

    flash()->success(trans('maintenances.messages.flash.update'));

    return Redirect::route('maintenances.index');
  }

  public function destroy($id)
  {
    $this->repository->delete($id);

    flash()->success(trans('maintenances.messages.flash.destroy'));

    return Redirect::route('maintenances.index');
  }

  public function indexPdf()
  {
		$maintenances = $this->repository->pushCriteria(new Search())->all();

    $pdf = PDF::loadView('maintenances.index_pdf', compact('maintenances'));

    return $pdf->download(trans('maintenances.index.filename.pdf'));
  }

  public function indexCsv()
  {
		$maintenances = $this->repository->pushCriteria(new Search())->toCsv();

    Csv::create($maintenances, [
      trans('validation.attributes.created_at'),
      trans('validation.attributes.vehicle'),
      trans('validation.attributes.amount'),
    ]);

    return Csv::download(trans('maintenances.index.filename.csv'));
  }

}
