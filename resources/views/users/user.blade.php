<tr>
  <td>{{ $user->name }}</td>
  <td>{{ $user->email }}</td>
  <td>{{ $user->phone }}</td>
  <td class="actions">
    {!! LinkHelper::toEdit(route('users.edit', [ 'id' => $user->id ])) !!}

    @if (Auth::user()->id != $user->id)
      {!! LinkHelper::toDestroy(route('users.edit', [ 'id' => $user->id ]), trans('users.messages.confirm.destroy')) !!}
    @endif
  </td>
</tr>
