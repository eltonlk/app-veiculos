<tr>
  <td>{{ $vehicle->kind->name }}</td>
  <td>{{ $vehicle->brand->name }}</td>
  <td>{{ $vehicle->name }}</td>
  <td>{{ $vehicle->model }}</td>
  <td>{{ $vehicle->color }}</td>
  <td>{{ $vehicle->year }}</td>
  <td>{{ $vehicle->purchased_in->format(trans('date.formats.default')) }}</td>
  <td>{{ $vehicle->amount }}</td>
  <td class="actions">
    <a class="btn btn-default btn-xs" href="{{ route('vehicles.edit', [ 'id' => $vehicle->id ]) }}">
      {{ trans('text.edit') }}
    </a>

    <a class="btn btn-danger btn-xs" href="{{ route('vehicles.destroy', [ 'id' => $vehicle->id ]) }}" data-method="delete" data-confirm="{{ trans('vehicles.messages.confirm.destroy') }}">
      {{ trans('text.destroy') }}
    </a>
  </td>
</tr>
