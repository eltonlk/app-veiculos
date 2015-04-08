<tr>
  <td>{{ $vehicle_kind->name }}</td>
  <td class="actions">
    {!! Form::open(['method' => 'DELETE', 'route' => ['vehicle_kinds.destroy', $vehicle_kind->id]]) !!}
      <a class="btn btn-default btn-xs" href="{{ route('vehicle_kinds.edit', [ 'id' => $vehicle_kind->id ]) }}">
        {{ trans('text.edit') }}
      </a>

      {!! Form::submit(trans('text.destroy'), array('class' => 'btn btn-danger btn-xs')) !!}
    {!! Form::close() !!}
  </td>
</tr>
