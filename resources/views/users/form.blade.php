@include('layouts.validation')

<div class="form-group">
  {!! Form::label('name', trans('validation.attributes.name')) !!}
  {!! Form::text('name', null, array('class'=>'form-control')) !!}
</div>

<div class="form-group">
  {!! Form::label('email', trans('validation.attributes.email')) !!}
  {!! Form::email('email', null, array('class'=>'form-control')) !!}
</div>

@unless (Form::getValueAttribute('id'))
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label('password', trans('validation.attributes.password')) !!}
        {!! Form::password('password', array('class'=>'form-control')) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::label('password_confirmation', trans('validation.attributes.password_confirmation')) !!}
        {!! Form::password('password_confirmation', array('class'=>'form-control')) !!}
      </div>
    </div>
  </div>
@endif

<div class="form-group">
  {!! Form::label('address', trans('validation.attributes.address')) !!}
  {!! Form::text('address', null, array('class'=>'form-control')) !!}
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('state_id', trans('validation.attributes.state_id')) !!}
      {!! Form::select('state_id', App\State::optionsForSelect(), null, array('class'=>'form-control')) !!}
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('city_id', trans('validation.attributes.city_id')) !!}
      {!! Form::select('city_id', App\City::optionsForSelect(Form::getValueAttribute('state_id')), null, array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('zip', trans('validation.attributes.zip')) !!}
      {!! Form::text('zip', null, array('class'=>'form-control')) !!}
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('district', trans('validation.attributes.district')) !!}
      {!! Form::text('district', null, array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('phone', trans('validation.attributes.phone')) !!}
      {!! Form::text('phone', null, array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="form-group">
  {!! Form::submit($submit_text, array('class'=>'btn btn-primary')) !!}
</div>
