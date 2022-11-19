<tr>
    <td>{{ $role['id'] }}</td>
    <td>{{ $role['label'] }}</td>
    <td>{{ date('d/m/Y'), strtotime($role['created_at']) }}</td>
    <td>{{ date('d/m/Y'), strtotime($role['updated_at']) }}</td>
    <td>
        {{-- <a href="{{ route('roles.edit', ['id' => $r['id']]) }}">Editar</a> --}}
        <form action="{{ route('roles.edit', ['id' => $role['id']]) }} " method="GET">
            @csrf
            <button class="btn btn-success mb-1" style="width: 100%">Editar</button>
        </form>
        <form onsubmit="return confirm('¿Seguro que lo quieres eliminar?')" action="{{ route('roles.delete', ['id' => $role['id']]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-1" style="width: 100%">Eliminar</button>
        </form>
    </td>
</tr>
