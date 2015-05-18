{!! Form::open(['url' => route('vehicles.index'), 'method' => 'post', 'class' => 'form-search', 'hidden' => true]) !!}
  {!! Form::hidden('search', true) !!}

  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('date', trans('validation.attributes.date')) !!}
        {!! Form::select('date', App\Vehicle::dateOptionsForSelect(), null, array('class'=>'form-control')) !!}
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('date_from', trans('validation.attributes.date_from')) !!}
        <div class="input-group date datepicker">
          {!! Form::text('date_from', null, array('class'=>'form-control')) !!}
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('date_to', trans('validation.attributes.date_to')) !!}
        <div class="input-group date datepicker">
          {!! Form::text('date_to', null, array('class'=>'form-control')) !!}
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('kind_id', trans('validation.attributes.kind_id')) !!}
        {!! Form::select('kind_id', App\VehicleKind::optionsForSelect(true), null, array('class'=>'form-control')) !!}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('brand_id', trans('validation.attributes.brand_id')) !!}
        {!! Form::select('brand_id', App\VehicleBrand::optionsForSelect(true), null, array('class'=>'form-control')) !!}
      </div>
    </div>
  </div>

  <div class="form-group">
    {!! Form::submit(trans('text.search'), array('class'=>'btn btn-default')) !!}
  </div>
{!! Form::close() !!}
