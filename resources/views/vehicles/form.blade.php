@include('layouts.validation')

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('kind_id', trans('validation.attributes.kind_id')) !!}
      {!! Form::select('kind_id', App\VehicleKind::optionsForSelect(), null, array('class'=>'form-control')) !!}
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('brand_id', trans('validation.attributes.brand_id')) !!}
      {!! Form::select('brand_id', App\VehicleBrand::optionsForSelect(), null, array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="form-group">
  {!! Form::label('name', trans('validation.attributes.name')) !!}
  {!! Form::text('name', null, array('class'=>'form-control')) !!}
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('model', trans('validation.attributes.model')) !!}
      {!! Form::text('model', null, array('class'=>'form-control')) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('color', trans('validation.attributes.color')) !!}
      {!! Form::text('color', null, array('class'=>'form-control')) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('year', trans('validation.attributes.year')) !!}
      {!! Form::text('year', null, array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('amount', trans('validation.attributes.amount')) !!}
      {!! Form::text('amount', null, array('class'=>'form-control')) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('purchased_in', trans('validation.attributes.purchased_in')) !!}
      {!! Form::input('date', 'purchased_in', null, array('class'=>'form-control')) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('sold', trans('validation.attributes.sold')) !!}
      {!! Form::input('date', 'sold', null, array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="form-group">
  {!! Form::label('description', trans('validation.attributes.description')) !!}
  {!! Form::textarea('description', null, array('class'=>'form-control')) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit_text, array('class'=>'btn btn-primary')) !!}
</div>
