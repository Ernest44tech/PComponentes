<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <title>PComponentes</title>
</head>
<body>
@include('layout.header')

    <main class="info-content">
        <h2>PComponentes</h2>
            <div class="card-info">
                <p class= "inicio">PComponentes surge para atender las crecientes necesidades mostradas por el mercado de consumidores de electronicos y computo con la idea de satisfacerlas de una forma eficaz, ágil y con precios accesibles, además somos uno de los más grandes vendedores en la plataforma Mercado Libre (distinguidos con el nombramiento de mercadolider platinum, categoría que se le otorga sólo a vendedores miembros de la comunidad que gozan de una reputación impecable).</p>
                <p class= "inicio">Actualmente contamos con una oficina central y una sucursal ubicada en la zona centro de la ciudad de Guadalajara, Jalisco, desde sus inicios nos propusimos ser una empresa que crease una conexión más directa entre sus clientes y personal, que los guiará a realizar una buena compra.</p>
                <h3>Objetivo general</h3>
                <p>Nuestro objetivo general es satisfacer de manera eficaz las necesidades del mercado, buscando la mejora continua en los servicios de la empresa.</p>
                <h4>Misión</h4>
                <p>Ser el aliado estratégico de nuestros clientes, guiándolos a una compra inteligente.</p>
                <h4>Visión</h4>
                <p>Ser el mejor proveedor de tecnología y servicio online para un mercado en constante cambio.</p>
            </div>
    </main>
</body>
@include('layout.footer')
</html>