<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
</head>
<body>
@include('layout.header')

    <main class="outlet-content">
        <div class="img-outlet">
        <img src="{{ asset('image/outlet-img.png') }}" alt="">
        </div>
        <div class="options-outlet">
            <a href="/inicio">DESTACADOS</a>
            <a href="/refurbished">REACONDICIONADO</a>
            <a href="/refurbished">MENOS DE $350</a>
            <a href="/refurbished">REMATES DE ALMACEN</a>
        </div>
        <div class="tittle-outlet">
        <p>GATEGORÍAS</p>
        <hr>
        </div>
        <div class="container-categories">   
            <div class="categories">
                <div class="content-categories">
                <img src="{{ asset('image/gabinete.png') }}" alt="">
                <p>Gabinetes</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/procesador.png') }}" alt="">
                <p>Procesadores</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/ram.png') }}" alt="">
                <p>Memorias RAM</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/madre.png') }}" alt="">
                <p>Tarjetas Madre</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/ssd.png') }}" alt="">
                <p>SSD</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/grafica.png') }}" alt="">
                <p>Tarjeta Grafica</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/monitor.png') }}" alt="">
                <p>Monitores</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/mouse.png') }}" alt="">
                <p>Mouse</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/haas.jpg') }}" alt="">
                <p>Gabinetes</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/haas.jpg') }}" alt="">
                <p>Gabinetes</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/haas.jpg') }}" alt="">
                <p>Gabinetes</p>
                </div>
                <div class="content-categories">
                <img src="{{ asset('image/haas.jpg') }}" alt="">
                <p>Gabinetes</p>
                </div>
            </div>
        </div>
    </main>
</body>
@include('layout.footer')
</html>
