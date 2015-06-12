{!! Form::search(route('vehicles.index')) !!}
  <div class="row">
    <div class="col-md-3">
      {!! Form::inputCollection('date', App\Vehicle::dateOptionsForSelect()) !!}
    </div>
    <div class="col-md-3">
      {!! Form::inputDatepicker('date_from') !!}
    </div>
    <div class="col-md-3">
      {!! Form::inputDatepicker('date_to') !!}
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      {!! Form::inputCollection('kind_id', App\VehicleKind::optionsForSelect(true)) !!}
    </div>
    <div class="col-md-4">
      {!! Form::inputCollection('brand_id', App\VehicleBrand::optionsForSelect(true)) !!}
    </div>
  </div>

  {!! Form::submitSearch(route('vehicles.index')) !!}
{!! Form::close() !!}
