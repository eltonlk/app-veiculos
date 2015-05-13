@extends('layouts.app')

@section('title', trans('users.index.title'))

@section('content')
  <a class="btn btn-primary" href="{{ route('users.create') }}">{{ trans('text.create') }}</a>

  <br><br>

  @unless ($users->count())
    <p class="text-muted">{{ trans('users.messages.empty') }}</p>
  @else
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ trans('validation.attributes.name') }}</th>
            <th>{{ trans('validation.attributes.email') }}</th>
            <th>{{ trans('validation.attributes.phone') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $users as $user )
            @include('users.user', [ 'user' => $user ])
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
@endsection
