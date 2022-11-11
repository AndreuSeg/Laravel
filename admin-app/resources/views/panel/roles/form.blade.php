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
    <h3>Roles de usuario /
        @if (!$id)
            Crear nuevo rol
        @else
            Modficar rol
        @endif
    </h3>
    <a href="{{ route('roles.index') }}">Volver</a>
    <form action="{{ route('roles.save', ['id' => $id]) }}" method="POST">
        @csrf
        @if ($id != null)
        @method('PUT')
            <input type="hidden" name="id" value="{{ $id }}">
        @endif
        <div class="input">
            <label for="label">Nombre</label>
            <input type="text" name="label" value="{{ $record != null ? $record['label'] : '' }}">
            <button>Guardar</button>
        </div>
    </form>
</body>

</html>
