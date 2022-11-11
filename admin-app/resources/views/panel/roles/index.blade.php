<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Roles</title>
</head>

<body>
    <a href="javascript:void(0)" onclick="document.getElementById('logout').submit()">Cerrar sesion</a>
    <form action="{{ route('logout') }}" id="logout" method="POST">
        @csrf
    </form>
    <h3>Roles de usuario</h3>
    <a href="{{ route('roles.create') }}">Crear nuevo rol</a><br>
    @if (Session::has('msg'))
        {{ Session::get('msg') }}
    @endif
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
            @foreach ($roles as $r)
                <tr>
                    <td>{{ $r['id'] }}</td>
                    <td>{{ $r['label'] }}</td>
                    <td>{{ date('d/m/Y'), strtotime($r['created_at']) }}</td>
                    <td>{{ date('d/m/Y'), strtotime($r['updated_at']) }}</td>
                    <td>
                        {{-- <a href="{{ route('roles.edit', ['id' => $r['id']]) }}">Editar</a> --}}
                        <form action="{{ route('roles.edit', ['id' => $r['id']]) }} " method="GET">
                            @csrf
                            <button style="width: 100%">Editar</button>
                        </form>
                        <form action="{{ route('roles.delete', ['id' => $r['id']]) }}" method="POST">
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
