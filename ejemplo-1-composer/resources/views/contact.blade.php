<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | Contacto</title>
</head>
<body>
    <h1>Pagina de contacto</h1>
    <form action="{{ route('contact.process') }}" method="POST" autocomplete="off">
        @csrf
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
        </div>
        <div class="email">
            <label for="email">Correo electronico</label>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"">
        </div>
        <div class="phone">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" placeholder="Telefono" maxlength="9" value="{{ old('phone') }}"">
        </div>
        <div class="consulta">
            <label for="consulta">Consulta</label>
            <textarea name="consulta" placeholder="Consulta" {{-- Si no pongo el valu="{{ old('xxx') }}"" no se quedan guardadas la consulta--}}></textarea>
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>
