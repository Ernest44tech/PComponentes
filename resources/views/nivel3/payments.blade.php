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
    <main class="payments-content">
        <div class="payments-options">
            <a href ="/resume">Resumen</a>
            <a class="active">Billetera</a>
            <a href="/transactions">Transacciones</a>
            <a href="/configuration">Configuración</a>
        </div>
        <div class="wallet">
            <div class="card-options">
                <p class = "principal">Billetera</p>
                <p class = "subtext">Tarjetas y cuentas</p>
                <div class="wallets">
                    <div class="active">
                        <div class="image-container">
                            <img src="{{ asset('image/master.png') }}" alt="">
                            <div class="text-overlay">Predeterminado</div>
                        </div>
                        <li>
                        <span href="#">MasterCard</span>
                        <a href="#">Tarjeta de debito con terminacion **** 4567</a>
                        </li>
                    </div>
                    <div class="wallet-sec">
                        <div class="image-container">
                            <img src="{{ asset('image/visa.png') }}" alt="Descripción de la imagen">
                        </div>
                        <li>
                        <span href="#">Visa</span>
                        <a href="#">Tarjeta de debito con terminacion **** 3233</a>
                        </li>
                    </div>
                </div>
            </ul>
            </div>
            <div class="card-resume">
                <div class="img-wallet">
                     <img src="{{ asset('image/visa.png') }}" alt="Descripción de la imagen">
                </div>
                <div class="wallet-content">
                <span href="#">Visa</span>
                     <a href="#">Tarjeta de debito con terminacion **** 3233</a>
                     <a class = "edit" href="#">Editar</a>
                </div>    
            </div>
        </div>
    </main>
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>