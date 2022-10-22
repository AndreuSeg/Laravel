<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} | Contacto</title>
</head>
<body>
    <h1>Pagina de contacto</h1>
    <form action="/contact" autocomplete="off">
        @method('POST')
        {{--
        @method('PUT')
        si quieres usar el metodo put la etiueta form tienes que usar el metodo POST
        --}}
        @csrf
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div class="email">
            <label for="email">Correo electronico</label>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="telefono">
            <label for="phone">Telefono</label>
            <input type="text" name="phone" placeholder="Telefono" maxlength="9">
        </div>
        <div class="consulta">
            <label for="consulta">Consulta</label>
            <textarea placeholder="Consulta"></textarea>
        </div>
        <button>Enviar</button>
    </form>
</body>
</html>
