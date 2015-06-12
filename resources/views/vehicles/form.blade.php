{!! Form::errorNotification() !!}

<div class="row">
  <div class="col-md-6">
    {!! Form::inputCollection('kind_id', App\VehicleKind::optionsForSelect()) !!}
  </div>
  <div class="col-md-6">
    {!! Form::inputCollection('brand_id', App\VehicleBrand::optionsForSelect()) !!}
  </div>
</div>

{!! Form::inputString('name') !!}

<div class="row">
  <div class="col-md-4">
    {!! Form::inputString('model') !!}
  </div>
  <div class="col-md-4">
    {!! Form::inputString('color') !!}
  </div>
  <div class="col-md-4">
    {!! Form::inputCollection('year', DateHelper::yearOptionsForSelect()) !!}
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    {!! Form::inputCurrency('amount') !!}
  </div>
  <div class="col-md-4">
    {!! Form::inputDatepicker('purchased_in') !!}
  </div>
  <div class="col-md-4">
    {!! Form::inputDatepicker('sold') !!}
  </div>
</div>

{!! Form::inputText('description') !!}

{!! Form::submitModel(route('vehicles.index')) !!}
