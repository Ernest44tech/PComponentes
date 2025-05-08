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
    <main class="configuration-content">
        <div class="payments-options">
            <a href ="/resume">Resumen</a>
            <a href="/payments">Billetera</a>
            <a href="/transactions">Transacciones</a>
            <a class="active">Configuración</a>
        </div>
        <div class="content-conf">
            <div class="desc">
                <h2>Configuracion</h2>
            </div>
            <div class="conf-descriptions">
                <p>DIRECCION</p>
                <span class="direction-wallet">Juan Perez,Lugar Falso, Jalisco, 46732</span>
                <div class="more-info">
                    <div class="profile-info">
                        <p>NOMBRE DE USUARIO</p>
                        <span class="name">Juan Perez</span>
                    </div>
                    <div class="method-wallet">
                        <p>METODO DE PAGO</p>
                        <span class="wallet">MasterCard que termina en 3456</span>
                    </div>
                    <div class="prefe-info">
                        <p>Tus preferencias predeterminadas se usan para todas las compras digitales</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="management">
                <div class="method-backup">
                    <p>Administrar el método de pago de respaldo ></p>
                </div>
                <div class="edit-method">
                    <p>Editar método de pago de un pedido actual ></p>
                </div>
            </div>
    </main> 
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>