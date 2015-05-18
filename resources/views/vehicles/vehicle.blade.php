<tr>
  <td>{{ $vehicle->kind->name }}</td>
  <td>{{ $vehicle->brand->name }}</td>
  <td>{{ $vehicle->name }}</td>
  <td>{{ $vehicle->model }}</td>
  <td>{{ $vehicle->color }}</td>
  <td>{{ $vehicle->year }}</td>

  @if (old('date') == 'sold')
    <td>{{ I18nHelper::l($vehicle->sold) }}</td>
  @else
    <td>{{ I18nHelper::l($vehicle->purchased_in) }}</td>
  @endif

  <td class="amount">{{ I18nHelper::n2c($vehicle->amount) }}</td>
  <td class="actions">
    <a class="btn btn-default btn-xs" href="{{ route('vehicles.edit', [ 'id' => $vehicle->id ]) }}">
      {{ trans('text.edit') }}
    </a>

    <a class="btn btn-danger btn-xs" href="{{ route('vehicles.destroy', [ 'id' => $vehicle->id ]) }}" data-method="delete" data-confirm="{{ trans('vehicles.messages.confirm.destroy') }}">
      {{ trans('text.destroy') }}
    </a>
  </td>
</tr>
