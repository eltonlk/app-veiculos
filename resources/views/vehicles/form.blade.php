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
      {!! Form::selectYear('year', date('Y'), 1950, null, array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('amount', trans('validation.attributes.amount')) !!}
      {!! Form::text('amount', I18nHelper::n2c($vehicle->amount), array('class'=>'form-control currency')) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('purchased_in', trans('validation.attributes.purchased_in')) !!}
      <div class="input-group date datepicker">
        {!! Form::text('purchased_in', I18nHelper::l($vehicle->purchased_in), array('class'=>'form-control')) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('sold', trans('validation.attributes.sold')) !!}
      <div class="input-group date datepicker">
        {!! Form::text('sold', I18nHelper::l($vehicle->sold), array('class'=>'form-control')) !!}
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      </div>
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
