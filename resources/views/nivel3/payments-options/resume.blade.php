<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>PComponentes</title>
</head>
<body>
@include('layout.header')
    <main class="resume-content">
        <div class="payments-options">
            <a class="active">Resumen</a>
            <a href="/payments">Billetera</a>
            <a href="/transactions">Transacciones</a>
            <a href="/configuration">Configuración</a>
        </div>
        <div class="resume-card">
            <div class="resume-img">
            <img src="{{ asset('image/master.png') }}" alt="">
            </div>
            <div class="resume-text">
                <span >Tarjeta de regalo PComponentes</span>
                <a class = "edit" href="#">Canjear tarjeta de regalo</a>
                </div>
            <div class="total-gift">
                <span class = "total-gift">$0.00</span>
            </div>
        </div>
    </main>
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>