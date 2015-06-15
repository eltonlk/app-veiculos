<tr>
  <td>{{ I18nHelper::l($supply->realized_at) }}</td>
  <td>{{ $supply->vehicle->name }}</td>
  <td>{{ $supply->liters }}</td>
  <td>{{ $supply->mileage }}</td>
  <td class="amount">{{ I18nHelper::n2c($supply->amount) }}</td>
  <td class="actions">
    {!! LinkHelper::toEdit(route('supplies.edit', [ 'id' => $supply->id ])) !!}

    {!! LinkHelper::toDestroy(route('supplies.edit', [ 'id' => $supply->id ]), trans('supplies.messages.confirm.destroy')) !!}
  </td>
</tr>
