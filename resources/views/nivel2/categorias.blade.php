<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
    <title>PComponentes</title>
</head>
<body>
@include('layout.header')
<section class="shop-category">
        <div class="container">
            <div class="header">
                <h2>Compra por categoria</h2>
            </div>
            <div class="grid">
                <a href="/computer" class="category">
                    <span>Computadoras</span>
                </a>
                <a href="/inicio" class="category">
                    <span>Productos Destacados</span>
                </a>
                <a href="/accessories" class="category">
                    <span>Accesorios</span>
                </a>
                <a href="/audio" class="category">
                    <span>Audio</span>
                </a>
                <a href="/storage" class="category">
                    <span>Almacenamiento</span>
                </a>
                <a href="/monitors" class="category">
                    <span>Monitores</span>
                </a>
                <a href="/energy" class="category">
                    <span>Energia</span>
                </a>
                <a href="/consumables" class="category">
                    <span>Consumibles</span>
                </a>
                <a href="/refurbished" class="category">
                    <span>Reacondicionado</span>
                </a>
                <a href="/components" class="category">
                    <span>Componentes</span>
                </a>
            </div>
        </div>
    </section>
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>