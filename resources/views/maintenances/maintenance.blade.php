<tr>
  <td>{{ I18nHelper::l($maintenance->realized_at) }}</td>
  <td>{{ $maintenance->vehicle->name }}</td>
  <td class="amount">{{ I18nHelper::n2c($maintenance->amount) }}</td>
  <td class="actions">
    {!! LinkHelper::toEdit(route('maintenances.edit', [ 'id' => $maintenance->id ])) !!}

    {!! LinkHelper::toDestroy(route('maintenances.edit', [ 'id' => $maintenance->id ]), trans('maintenances.messages.confirm.destroy')) !!}
  </td>
</tr>
