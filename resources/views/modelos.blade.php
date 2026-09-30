@extends('app')

@section('contenido')

<section class="contenedor seccion">

    <p class="pequeno">GAMA SEAT</p>

    <h2>Nuestros modelos</h2>

    <p>
        Descubre nuestra gama de vehículos. Modelos
        creados para diferentes estilos de conducción.
    </p>


    <div class="modelos">


        <div class="modelo">

            <img
                src="{{ Vite::asset('resources/images/Leon XTR.jpg') }}"
                alt="SEAT León XTR"
            >

            <div class="modelo-info">

                <h3>SEAT León XTR</h3>

                <p>
                    Un compacto deportivo con un diseño
                    agresivo y tecnología avanzada.
                </p>

                <ul>
                    <li>Motor 1.8 Turbo</li>
                    <li>190 CV</li>
                    <li>Cambio automático</li>
                    <li>5 puertas</li>
                </ul>

                <strong>Desde 29.900 €</strong>

            </div>

        </div>


        <div class="modelo">

            <img
                src="{{ Vite::asset('resources/images/Ibiza R.jpg') }}"
                alt="SEAT Ibiza R"
            >

            <div class="modelo-info">

                <h3>SEAT Ibiza R</h3>

                <p>
                    Compacto, ágil y preparado para moverse
                    por la ciudad sin renunciar al estilo.
                </p>

                <ul>
                    <li>Motor 1.5 Turbo</li>
                    <li>150 CV</li>
                    <li>Consumo reducido</li>
                    <li>5 plazas</li>
                </ul>

                <strong>Desde 22.500 €</strong>

            </div>

        </div>


        <div class="modelo">

            <img
                src="{{ Vite::asset('resources/images/Arona GT.jpg') }}"
                alt="SEAT Arona GT"
            >

            <div class="modelo-info">

                <h3>SEAT Arona GT</h3>

                <p>
                    Un SUV compacto pensado para quienes
                    buscan espacio, comodidad y carácter.
                </p>

                <ul>
                    <li>Motor 2.0 Turbo</li>
                    <li>200 CV</li>
                    <li>Tracción delantera</li>
                    <li>Maletero ampliado</li>
                </ul>

                <strong>Desde 31.800 €</strong>

            </div>

        </div>


    </div>

</section>

@endsection