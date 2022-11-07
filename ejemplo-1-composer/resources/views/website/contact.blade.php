<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Contacto</title>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('website.section', ['section' => 'home']) }}">Home</a><br>
            <a href="{{ route('website.section', ['section' => 'who-we-are']) }}">Quien soy</a><br>
            <a @if ($section == 'contact') style="color: grey" @endif
                href="{{ route('website.section', ['section' => 'contact']) }}">Contacto</a><br>
        </nav>
    </header>
    <h1>Contacta conmigo</h1>
    @if (Session::has('success'))
        <p style="color: red">{{ Session::get('success') }}</p>
    @endif
    @if (Session::has('error'))
        <p style="color: green">{{ Session::get('error') }}</p>
    @endif
    <form action="{{ route('website.sendContact') }}" method="POST">
        @csrf
        <p><input type="text" name="name" placeholder="Nombre"></p>
        <p><input type="email" name="email" placeholder="Email"></p>
        <p>
            <textarea name="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
        </p>
        <button>Enviar</button>
    </form>
</body>

</html>
