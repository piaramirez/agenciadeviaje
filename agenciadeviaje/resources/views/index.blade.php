<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Agencia de viajes(demo)</title>
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
    <h1>Esta regresando mediante un método index ddentro de la classe Demo</h1>
</body>
</html>