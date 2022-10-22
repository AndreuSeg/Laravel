@php
    $myName = 'Andreu';
    $lecciones = [
        '<b>Introducción</b>',
        '<i>Directorios</i>',
        'Novedades',
        'Composer',
        '...'
    ];
@endphp

<!DOCTYPE html>
<html>

<head>
    <title>{{ env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <h1>Mi primera pagina de laravel 9</h1>
    <h2>Mi nombre es {{ $myName }}</h2>
    <ul>
        @foreach ($lecciones as $l)
        <li>{!! $l !!}</li>
        @endforeach
    </ul>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
