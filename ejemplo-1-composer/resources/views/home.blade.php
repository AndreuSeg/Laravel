<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
</head>
<body>
    <h1>Pagina de inicio</h1>
    <a href={{ route('contact.form') }}>Contacto</a>
    <br>
    <a href={{ route('introduccion') }}>Blade</a>
</body>
</html>
