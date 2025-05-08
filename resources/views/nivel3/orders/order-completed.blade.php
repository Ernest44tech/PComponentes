<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/carrito-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>PComponentes</title>
</head>
<body>
@include('layout.header')
    <main class="order-completed">
        <div class="completed-content">
            <h1>¡Orden Confirmada! </h1>
            <p>Gracias por tu compra. Hemos recibido tu orden y está siendo procesada.</p>

            <div class="total-order">
                <p><strong>Número de Orden:</strong> #123456</p>
                <p><strong>Fecha de Compra:</strong> 05 de Marzo, 2025</p>
                <p><strong>Fecha Estimada de Entrega:</strong> 10 de Marzo, 2025</p>
                <p><strong>Total Pagado:</strong> $2,898.00</p>
            </div>

            <div class="order-end">
                <button class="btn-print">Imprimir Confirmación</button>
                <a href="/inicio" class="btn-home">Volver al Inicio</a>
            </div>
        </div>
    </main>
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>