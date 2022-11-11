<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | Form</title>
</head>
<body>
    <h1>Login form</h1>
    @if (Session::has('error'))
        <p style="color: red">{{ Session::get('error') }}</p>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="inputs">
            <label for="user">Usuario</label><br>
            <input type="text" name="user" placeholder="Intorduce tu usuario aquí">
        </div>
        <div class="inputs">
            <label for="password">Contraseña</label><br>
            <input type="password" name="password" placeholder="Introduce tu contraseña aquí">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
