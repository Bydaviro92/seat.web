<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SEAT | Impulsa tu camino</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header>

    <div class="contenedor header">

        <h1>SEAT</h1>

        <nav>
            <a href="/">Inicio</a>
            <a href="/modelos">Modelos</a>
            <a href="/contacto">Contacto</a>
        </nav>

    </div>

</header>


<main>

    @yield('contenido')

</main>


<footer>

    <div class="contenedor">

        <h2>SEAT</h2>

        <p>
            Diseñamos vehículos para quienes disfrutan
            de cada kilómetro.
        </p>

        <p>
            © 2026 SEAT - Proyecto académico ficticio
        </p>

        <a href="https://www.seat.es/" target="_blank">
            Visitar SEAT
        </a>

    </div>

</footer>

</body>
</html>