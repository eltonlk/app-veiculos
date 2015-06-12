{!! Form::errorNotification() !!}

<div class="row">
  <div class="col-md-6">
    {!! Form::inputCollection('vehicle_id', App\Vehicle::optionsForSelect()) !!}
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    {!! Form::inputString('liters') !!}
  </div>

  <div class="col-md-3">
    {!! Form::inputString('mileage') !!}
  </div>

  <div class="col-md-3">
    {!! Form::inputCurrency('amount') !!}
  </div>
</div>

{!! Form::submitModel(route('supplies.index')) !!}
