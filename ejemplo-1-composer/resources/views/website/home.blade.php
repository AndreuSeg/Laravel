<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | Home</title>
</head>
<body>
    <header>
        <nav>
            <a @if ($section == 'home') style="color: grey" @endif href="{{ route('website.section', ['section' => 'home']) }}">Home</a><br>
            <a href="{{ route('website.section', ['section' => 'who-we-are']) }}">Quien soy</a><br>
            <a href="{{ route('website.section', ['section' => 'contact']) }}">Contacto</a><br>
        </nav>
    </header>
    <h1>Hola {{ $user }}</h1>
    <h2>Bienvenido a mi primera pagina hecha con laravel 9</h2>
    <h2>Estas visitando la pagina a dia: {{ $date }} a la hora: {{ $time }}</h2>
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
