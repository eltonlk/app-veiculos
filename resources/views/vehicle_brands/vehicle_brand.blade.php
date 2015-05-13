<tr>
  <td>{{ $vehicle_brand->name }}</td>
  <td class="actions">
    <a class="btn btn-default btn-xs" href="{{ route('vehicle_brands.edit', [ 'id' => $vehicle_brand->id ]) }}">
      {{ trans('text.edit') }}
    </a>

    <a class="btn btn-danger btn-xs" href="{{ route('vehicle_brands.destroy', [ 'id' => $vehicle_brand->id ]) }}" data-method="delete" data-confirm="{{ trans('vehicle_brands.messages.confirm.destroy') }}">
      {{ trans('text.destroy') }}
    </a>
  </td>
</tr>
