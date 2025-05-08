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
    <main class="terms-content">
        <h2>Términos y Condiciones de Compra</h2>
        <p>Este documento fue modificado por última vez el 3 de Marzo del 2025.</p>
        <div class="terms-card">
            <p>Condiciones de Compra</p>
            <ul>
            <li>Los precios se encuentran en moneda nacional e incluyen I.V.A.</li>
            <li>Las imágenes, características, especificaciones y precios son ilustrativos y pueden variar o cambiar sin previo aviso.</li>
            <li>Todos los productos que se ofrecen se encuentran sujetos a disponibilidad y hasta agotar existencias, el stock publicado en la plataforma web puede variar o cambiar sin previo aviso.</li>
            <br>
            <p class = "inventory">Inventarios y precios</p>
            <p>La disponibilidad de los productos, precios, marcas y modelos pueden variar de acuerdo con la oferta del momento dispuesta por PComponentes</p>
            <p class="pay-format">Opciones de pago</p>
            <p>Aceptamos las siguientes formas de pago:</p>
            <ul>
                <li>*PAGO CON DEPOSITO BANCARIO</li>
                <li>*PAGO POR CÓDIGO QR</li>
                <li>*MERCADO PAGO VIA QR </li>
                <li>*PAGO MEDIANTE LA PLATAFORMA DE MERCADO PAGO.</li>
                <li>*PAGO MEDIANTE LA PLATAFORMA DE PAYPAL.</li>
            </ul>
        </ul>
        </div>
    </main>
</body>
@include('layout.footer')
</html>