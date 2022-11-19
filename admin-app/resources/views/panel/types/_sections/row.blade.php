<tr>
    <td>{{ $type['id'] }}</td>
    <td>{{ $type['label'] }}</td>
    <td>{{ date('d/m/Y'), strtotime($type['created_at']) }}</td>
    <td>{{ date('d/m/Y'), strtotime($type['updated_at']) }}</td>
    <td>
        {{-- <a href="{{ route('types.edit', ['id' => $r['id']]) }}">Editar</a> --}}
        <form action="{{ route('types.edit', ['id' => $type['id']]) }} " method="GET">
            @csrf
            <button class="btn btn-success mb-1" style="width: 100%">Editar</button>
        </form>
        <form onsubmit="return confirm('¿Seguro que lo quieres eliminar?')" action="{{ route('types.delete', ['id' => $type['id']]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-1" style="width: 100%">Eliminar</button>
        </form>
    </td>
</tr>
