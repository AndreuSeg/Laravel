<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('tittle', 'Default')</title>
</head>

<body>
    @section('header')
        @include('panel.general.logout')
    @show
    {{-- El section puedes poner contenido por defecto, que si pones algo se sobreescribe.
        El main no se puede poner contenido por defecto --}}
    @yield('main')
</body>

</html>
