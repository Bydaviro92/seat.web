@extends('app')

@section('contenido')

<section class="hero">

    <div class="contenedor">

        <p class="pequeno">NUEVA GENERACIÓN</p>

        <h2>Diseñado para disfrutar</h2>

        <p>
            Descubre una nueva generación de vehículos
            SEAT creados para combinar diseño, tecnología
            y emoción en cada viaje.
        </p>

        <a href="/modelos" class="boton">
            Descubrir modelos
        </a>

    </div>

</section>


<section class="contenedor seccion">

    <h2>La nueva SEAT</h2>

    <p>
        Nuestra gama combina un diseño deportivo con
        tecnología moderna y soluciones pensadas para
        disfrutar de la conducción todos los días.
    </p>


    <div class="tarjetas">

        <div class="tarjeta">

            <h3>Diseño</h3>

            <p>
                Líneas deportivas y una imagen moderna
                que hace que cada modelo tenga su propia
                personalidad.
            </p>

        </div>


        <div class="tarjeta">

            <h3>Tecnología</h3>

            <p>
                Sistemas inteligentes y conectividad para
                hacer cada trayecto más cómodo.
            </p>

        </div>


        <div class="tarjeta">

            <h3>Conducción</h3>

            <p>
                Vehículos pensados para ofrecer una
                experiencia dinámica y divertida.
            </p>

        </div>

    </div>

</section>

@endsection