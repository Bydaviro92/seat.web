@extends('app')

@section('contenido')

<section class="contenedor seccion">

    <p class="pequeno">SEAT</p>

    <h2>Contacta con nosotros</h2>

    <p>
        ¿Quieres conocer nuestros vehículos o recibir
        más información sobre alguno de nuestros modelos?
        Ponte en contacto con nuestro equipo.
    </p>


    <div class="contacto">

        <div>

            <h3>Información</h3>

            <ul>
                <li>📍 Avenida del Automóvil 25, Barcelona</li>
                <li>📞 900 123 456</li>
                <li>✉️ info@seat-proyecto.es</li>
                <li>🕐 Lunes a viernes: 09:00 - 19:00</li>
            </ul>

        </div>


        <div>

            <h3>Encuéntranos</h3>

            <p>
                Visita nuestra página oficial para conocer
                más información sobre la marca.
            </p>

            <a
                href="https://www.seat.es/"
                target="_blank"
                class="boton"
            >
                Web oficial de SEAT
            </a>

        </div>

    </div>

</section>

@endsection