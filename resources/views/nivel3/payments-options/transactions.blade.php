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
    <main class="transactions-content">
        <div class="payments-options">
            <a href="/resume">Resumen</a>
            <a href="/payments">Billetera</a>
            <a class="active">Transacciones</a>
            <a href="/configuration">Configuración</a>
        </div>
        <div class="transactions">
            <div class="in-progress">
                <div class="transaction-in">
                    <div class="top-border">
                        <P>En curso</P>
                    </div>
                    <div class="in-content">
                        <span class="date">24 de diciembre de 2024</span>
                        <span class="payment">Visa ****7865</span>
                        <p>Pendiente</p>
                        <a href="/#" class="order">N.º de pedido702-3214862-6357860</a>
                        <p>PComponentes</p>
                    </div>
                </div>
                <div class="transaction-in">
                    <div class="top-date">
                        <span class="date">24 de diciembre de 2024</span>
                    </div>
                    <div class="in-content">
                        <span class="payment">Visa ****7865</span>
                        <p>Pendiente</p>
                        <a href="/#" class="order">N.º de pedido702-3214862-6357860</a>
                        <p>PComponentes</p>
                    </div>
                </div>
            </div>

            <div class="transaction-completed">
                <div class="completed-content">
                    <div class="top-border">
                        <P>Completado</P>
                    </div>
                    <span class="date">24 de diciembre de 2024</span>
                    <span class="payment">Visa ****7865</span>
                    <p>Pendiente</p>
                    <a href="/#" class="order">N.º de pedido702-3214862-6357860</a>
                    <p>PComponentes</p>
                </div>
                <div class="completed-content">
                    <div class="top-date">
                     <span class="date">24 de diciembre de 2024</span>
                    </div>
                    <span class="payment">Visa ****7865</span>
                    <p>Pendiente</p>
                    <a href="/#" class="order">N.º de pedido702-3214862-6357860</a>
                    <p>PComponentes</p>
                </div>
            </div>
        </div>
    </main>
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>