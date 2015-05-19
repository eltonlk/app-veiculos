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
    {!! LinkHelper::toEdit(route('vehicles.edit', [ 'id' => $vehicle->id ])) !!}

    {!! LinkHelper::toDestroy(route('vehicles.edit', [ 'id' => $vehicle->id ]), trans('vehicles.messages.confirm.destroy')) !!}
  </td>
</tr>
