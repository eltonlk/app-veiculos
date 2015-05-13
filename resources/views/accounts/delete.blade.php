<div class="panel panel-danger">
  <div id="account_destroy" class="panel-heading" role="tab">
    <h3 class="panel-title">
      <a class="collapsed" href="#account_destroy_content" data-toggle="collapse" data-parent="#settings" aria-expanded="false" aria-controls="account_destroy_content">
        {{ trans('accounts.delete.title') }}
      </a>
    </h3>
  </div>
  <div id="account_destroy_content" class="panel-collapse collapse" role="tabpanel" aria-labelledby="account_destroy">
    <div class="panel-body">
      {!! Form::model(Auth::user()->account, ['route' => ['accounts.destroy', Auth::user()->account_id], 'method' => 'delete', 'class' => 'form']) !!}
        <div class="bg-warning bg-box">
          <h4>{{ trans('accounts.delete.warning.title') }}</h4>

          {{ trans('accounts.delete.warning.text') }}
        </div>

        <br />

        <div class="form-group">
          {!! Form::submit(trans('accounts.delete.submit'), array('class'=>'btn btn-danger', 'data-confirm' => trans('accounts.messages.confirm.destroy'))) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
