<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | Quien soy</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('website.section', ['section' => 'home']) }}">Home</a><br>
            <a @if ($section == 'who-we-are') style="color: grey" @endif href="{{ route('website.section', ['section' => 'who-we-are']) }}">Quien soy</a><br>
            <a href="{{ route('website.section', ['section' => 'contact']) }}">Contacto</a><br>
        </nav>
    </header>
    <h1>Hola {{ $name }} tengo {{ $age }} y tabajo de {{ $profession }}</h1>
    @if ($user == 'usuario')
        <h4>Rellena tu nombre para personalizar tu pagina</h4>
    @endif
    <form action="{{ route('website.personalize') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre">
        <button>Enviar</button>
    </form>
</body>
</html>
