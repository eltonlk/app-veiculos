<tr>
  <td>{{ $vehicle_kind->name }}</td>
  <td class="actions">
    <a class="btn btn-default btn-xs" href="{{ route('vehicle_kinds.edit', [ 'id' => $vehicle_kind->id ]) }}">
      {{ trans('text.edit') }}
    </a>

    <a class="btn btn-danger btn-xs" href="{{ route('vehicle_kinds.destroy', [ 'id' => $vehicle_kind->id ]) }}" data-method="delete" data-confirm="{{ trans('vehicle_kinds.messages.confirm.destroy') }}">
      {{ trans('text.destroy') }}
    </a>
  </td>
</tr>
