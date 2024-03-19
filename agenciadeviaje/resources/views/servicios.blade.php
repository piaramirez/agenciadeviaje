<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="{{ route('index.page');}}">Index</a></li>
            <li><a href="{{ route('ejemplo.page');}}">ejemplo</a></li>
            <li><a href="{{ route('servicio.page'); }}">Servicios</a></li>
            <li><a href="{{ route('contactos.page'); }}">Contactos</a></li>
        </ul>
    </nav>
    Estamos dentro de servicios
</body>
</html>