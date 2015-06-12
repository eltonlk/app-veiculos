{!! Form::search(route('supplies.index')) !!}

  <div class="row">
    <div class="col-md-3">
      {!! Form::inputDatepicker('created_from') !!}
    </div>
    <div class="col-md-3">
      {!! Form::inputDatepicker('created_to') !!}
    </div>
    <div class="col-md-4">
      {!! Form::inputCollection('vehicle_id', App\Vehicle::optionsForSelect(true)) !!}
    </div>
  </div>

  {!! Form::submitSearch(route('supplies.index')) !!}
{!! Form::close() !!}
