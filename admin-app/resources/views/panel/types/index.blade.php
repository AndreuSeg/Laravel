<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Tipos</title>
</head>

<body>
    <a href="javascript:void(0)" onclick="document.getElementById('logout').submit()">Cerrar sesion</a>
    <form action="{{ route('logout') }}" id="logout" method="POST">
        @csrf
    </form>
    <h3>Tipos de usuario</h3>
    <a href="{{ route('types.create') }}">Crear nuevo tipo</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Label</th>
                <th>Fecha de creación</th>
                <th>Fecha de actualización</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $t)
                <tr>
                    <td>{{ $t['id'] }}</td>
                    <td>{{ $t['label'] }}</td>
                    <td>{{ date('d/m/Y'), strtotime($t['created_at']) }}</td>
                    <td>{{ date('d/m/Y'), strtotime($t['updated_at']) }}</td>
                    <td>
                        {{-- <a href="{{ route('types.edit', ['id' => $r['id']]) }}">Editar</a> --}}
                        <form action="{{ route('types.edit', ['id' => $t['id']]) }} " method="GET">
                            @csrf
                            <button style="width: 100%">Editar</button>
                        </form>
                        <form action="{{ route('types.delete', ['id' => $t['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button style="width: 100%">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
