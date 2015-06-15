<tr>
  <td>{{ I18nHelper::l($destination->output_in) }}</td>
  <td>{{ I18nHelper::l($destination->returned_in) }}</td>
  <td>{{ $destination->vehicle->name }}</td>
  <td>{{ $destination->address }}</td>
  <td>{{ $destination->district }}</td>
  <td>{{ $destination->city->name }}</td>
  <td>{{ $destination->state->name }}</td>
  <td class="actions">
    {!! LinkHelper::toEdit(route('destinations.edit', [ 'id' => $destination->id ])) !!}

    {!! LinkHelper::toDestroy(route('destinations.edit', [ 'id' => $destination->id ]), trans('destinations.messages.confirm.destroy')) !!}
  </td>
</tr>
