<tr>
  <td>{{ $vehicle_brand->name }}</td>
  <td class="actions">
    {!! Form::open(['method' => 'DELETE', 'route' => ['vehicle_brands.destroy', $vehicle_brand->id]]) !!}
      <a class="btn btn-default btn-xs" href="{{ route('vehicle_brands.edit', [ 'id' => $vehicle_brand->id ]) }}">
        {{ trans('text.edit') }}
      </a>

      {!! Form::submit(trans('text.destroy'), array('class' => 'btn btn-danger btn-xs')) !!}
    {!! Form::close() !!}
  </td>
</tr>
