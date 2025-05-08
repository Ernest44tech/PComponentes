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
<main class="address-content">
    <div class="address-back">
        <h2>Mis direcciones</h2>
        <div class="address-card">
            <a href="/address-new" class="add-address">
                <i class="fa-solid fa-plus"></i>
                <p>Agregar dirección</p>
            </a>
        </div>
    </div>
</main>
@include('layout.related-products')
</body>
@include('layout.footer')
</html>