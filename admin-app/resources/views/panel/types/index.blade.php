<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Tipos</title>
</head>

<body>
    @include('panel.general.logout')
    <h3>Tipos de usuario</h3>
    <a href="{{ route('types.create') }}">Crear nuevo tipo</a>
    @include('panel.types._sections.table', ['types' => $types])
</body>

</html>
