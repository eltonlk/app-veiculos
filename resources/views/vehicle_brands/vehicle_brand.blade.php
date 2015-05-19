<tr>
  <td>{{ $vehicle_brand->name }}</td>
  <td class="actions">
    {!! LinkHelper::toEdit(route('vehicle_brands.edit', [ 'id' => $vehicle_brand->id ])) !!}

    {!! LinkHelper::toDestroy(route('vehicle_brands.edit', [ 'id' => $vehicle_brand->id ]), trans('vehicle_brands.messages.confirm.destroy')) !!}
  </td>
</tr>
