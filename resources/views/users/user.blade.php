<tr>
  <td>{{ $user->name }}</td>
  <td>{{ $user->email }}</td>
  <td>{{ $user->phone }}</td>
  <td class="actions">
    <a class="btn btn-default btn-xs" href="{{ route('users.edit', [ 'id' => $user->id ]) }}">
      {{ trans('text.edit') }}
    </a>

    @if (Auth::user()->id != $user->id)
      <a class="btn btn-danger btn-xs" href="{{ route('users.destroy', [ 'id' => $user->id ]) }}" data-method="delete" data-confirm="{{ trans('users.messages.confirm.destroy') }}">
        {{ trans('text.destroy') }}
      </a>
    @endif
  </td>
</tr>
