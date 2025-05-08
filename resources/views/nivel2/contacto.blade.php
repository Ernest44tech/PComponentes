<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <title>PComponentes</title>
</head>

<body>
@include('layout.header')

    <main class="main-contact">
        <div class="contact-info">
            <div class="shipment">
            <i class="fa-solid fa-truck-fast"></i>
            <span>ENVIAMOS A TODA LA REPUBLICA MEXICANA.</span>
            </div>
            <P>Telefonos: 3354545333</P>
            <p>Email: ventas@hotmail.com</p>
            <p>Horario de atencion: Lunes a Viernes: 09:00 - 02:30 y 03:30 - 06:00, Sábados: 10:00am - 01:00pm</p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1865.9775207536857!2d-103.3791962326343!3d20.71205018144091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1740699845669!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="map-content">
                <p>SUCURSAL PATRIA</p>
                <div class="ubication">
                <i class="fa-solid fa-location-dot"></i>
                    <p>Av. Patria, Jacarandas, 45160 Zapopan, Jal.</p>
                </div>
                <div class="numbers">
                <i class="fa-solid fa-mobile-screen-button"></i>
                    <p>3354545333</p>
                </div>
                <div class="contact-area">
                    <i class="fa-regular fa-clock"></i>
                    <p>Lunes a Viernes: 10:00am - 07:00pm, Sábados: 10:00am - 05:00pm</p>
                </div>
                <img src="{{ asset('image/aston.jpg') }}" alt="">
                </div>

        </div>
    </main>

</body>
@include('layout.footer')
</html>