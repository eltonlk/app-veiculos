{!! Form::errorNotification() !!}

<div class="row">
  <div class="col-md-6">
    {!! Form::inputCollection('vehicle_id', App\Vehicle::optionsForSelect()) !!}
  </div>
  <div class="col-md-4">
    {!! Form::inputCurrency('amount') !!}
  </div>
</div>

{!! Form::inputText('description') !!}

{!! Form::submitModel(route('maintenances.index')) !!}
