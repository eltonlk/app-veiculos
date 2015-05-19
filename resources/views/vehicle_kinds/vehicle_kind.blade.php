<tr>
  <td>{{ $vehicle_kind->name }}</td>
  <td class="actions">
    {!! LinkHelper::toEdit(route('vehicle_kinds.edit', [ 'id' => $vehicle_kind->id ])) !!}

    {!! LinkHelper::toDestroy(route('vehicle_kinds.edit', [ 'id' => $vehicle_kind->id ]), trans('vehicle_kinds.messages.confirm.destroy')) !!}
  </td>
</tr>
