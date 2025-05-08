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
    <main class="account-content">
        <div class="options-account">
            <div class="orders" onclick="window.location.href='/track';"style="cursor: pointer;">
                <div class="icon-order">
                    <i class="fa-solid fa-box-archive"></i>
                </div>
                <div class="content-orders">
                    <h3>Mis pedidos</h3>
                    <p>Rastrear paquetes, devolver pedidos o comprar algo de nuevo</p>
                </div>
            </div>
            <div class="security" onclick="window.location.href='/security';"style="cursor: pointer;">
                <div class="icon-address">
                    <i class="fa-solid fa-user-shield"></i>
                </div>
                <div class="content-security">
                    <h3>Seguridad</h3>
                    <p>Cambiar correo electronico, contraseña y numero de telefono movil</p>
                </div>
            </div>
            <div class="address" onclick="window.location.href='/address';"style="cursor: pointer;">
                <div class="icon-address">
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="content-address">
                    <h3>Direcciones</h3>
                    <p>Editar direcciones para pedidos y regalos</p>
                </div>
            </div>
            <div class="payments" onclick="window.location.href='/payments';"style="cursor: pointer;">
                <div class="icon-payments">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <div class="content-paymentscontent-address">
                    <h3>Mis pagos</h3>
                    <p>Administrar p agregar metodos de pago y ver tus transacciones</p>
                </div>
            </div>
        </div>
    </main>
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>