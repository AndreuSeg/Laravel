<tr>
    <td>{{ $user['id'] }}</td>
    <td>{{ $user['name'] }}</td>
    <td>{{ $user['email'] }}</td>
    <td>{{ date('d/m/Y'), strtotime($user['created_at']) }}</td>
    <td>{{ date('d/m/Y'), strtotime($user['updated_at']) }}</td>
    <td>
        {{-- <a href="{{ route('types.edit', ['id' => $r['id']]) }}">Editar</a> --}}
        <form action="{{ route('users.edit', ['id' => $user['id']]) }} " method="GET">
            @csrf
            <button class="btn btn-success mb-1" style="width: 100%">Editar</button>
        </form>
        <form onsubmit="return confirm('¿Seguro que lo quieres eliminar?')" action="{{ route('users.delete', ['id' => $user['id']]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-1" style="width: 100%">Eliminar</button>
        </form>
    </td>
</tr>
