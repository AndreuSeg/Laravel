<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Roles</title>
</head>

<body>
    @include('panel.general.logout')
    <h3>Roles de usuario</h3>
    <a href="{{ route('roles.create') }}">Crear nuevo rol</a><br>
    @if (Session::has('msg'))
        {{ Session::get('msg') }}
    @endif
    @include('panel.roles._sections.table', ['roles' => $roles])
</body>

</html>
