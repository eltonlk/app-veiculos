<?php namespace App\Http\Controllers;

use App\Http\Requests\VehicleKindRequest;
use App\Repositories\VehicleKindsRepository;
use App\VehicleKind;
use Csv;
use PDF;
use Redirect;

class VehicleKindsController extends AppController {

  public function __construct(VehicleKindsRepository $repository)
  {
    $this->repository = $repository;
    $this->middleware('auth');
  }

	public function index()
	{
    $vehicle_kinds = $this->repository->paginate(20);

		return view('vehicle_kinds.index', compact('vehicle_kinds'));
	}

	public function create()
	{
		$vehicle_kind = new VehicleKind();

		return view('vehicle_kinds.create', compact('vehicle_kind'));
	}

	public function store(VehicleKindRequest $request)
	{
    $this->repository->create($request->all());

    flash()->success(trans('vehicle_kinds.messages.flash.store'));

		return Redirect::route('vehicle_kinds.index');
	}

	public function edit($id)
	{
		$vehicle_kind = $this->repository->find($id);

		return view('vehicle_kinds.edit', compact('vehicle_kind'));
	}

	public function update(VehicleKindRequest $request, $id)
	{
    $this->repository->updateRich($request->all(), $id);

    flash()->success(trans('vehicle_kinds.messages.flash.update'));

		return Redirect::route('vehicle_kinds.index');
	}

	public function destroy($id)
	{
    $this->repository->delete($id);

    flash()->success(trans('vehicle_kinds.messages.flash.destroy'));

		return Redirect::route('vehicle_kinds.index');
	}

  public function indexPdf()
  {
		$vehicle_kinds = $this->repository->all();

    $pdf = PDF::loadView('vehicle_kinds.index_pdf', compact('vehicle_kinds'));

    return $pdf->download(trans('vehicle_kinds.index.filename.pdf'));
  }

  public function indexCsv()
  {
		$vehicle_kinds = $this->repository->toCsv();

    Csv::create($vehicle_kinds, [
      trans('validation.attributes.name'),
    ]);

    return Csv::download(trans('vehicle_kinds.index.filename.csv'));
  }

}
