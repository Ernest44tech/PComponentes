<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carrito-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
</head>
<body>
@include('layout.header')
<main class="legal-content">
        <h2>AVISO DE PRIVACIDAD</h2>
        <p>Este documento fue modificado por última vez el 3 de Marzo del 2025.</p>
        <div class="legal-card">
            <h3>IDENTIDAD Y DOMICILIO DEL RESPONSABLE</h3>
            <p>El presente Aviso Legal establece los términos y condiciones en virtud de los cuales PComponentes con domicilio en Av. Patria #100, Colomos Providencia, C.P. 45601, en Zapopan, Jalisco, en su carácter de Responsable recabará, usará y protegerá los datos personales del Titular según la Ley Federal de Protección de Datos Personales en Posesión de Particulares.</p>
            <h3>DATOS PERSONALES DEL TITULAR QUE EL RESPONSABLE RECABA</h3>
            <p>Información sobre el uso de mecanismos para el manejo de información personal del titular en medios remotos o locales de comunicación electrónica, óptica u otra tecnología, que permita recabar datos personales de manera automática y simultánea al tiempo que el titular hace contacto con los mismos.</p>
            <p>DD Tech puede recolectar datos personales del Titular mediante la entrega directa y/o personal por cualquier medio de contacto entre el Titular y el Responsable. Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales:</p>
            <ul>
            <li>Nombre completo.</li>
            <li>Domicilio de entrega de los productos (calle, número, colonia, ciudad, estado, código postal, así como también algunas referencias).</li>
            <li>Dirección de correo electrónico.</li>
            <li>Número de teléfono fijo y/o de teléfono celular.</li>
            <li>Número de cuenta bancaria (sólo si así lo amerita el medio de pago).</li>
            <li>Monitoreo y grabación de llamadas para fines de seguridad personal, sin que pueda disponerse libremente de los audios sin consentimiento del cliente cuando los datos proporcionados requieran dicho consentimiento expreso.</li>
            </ul>
        </div>
    </main>
</body>
@include('layout.footer')
</html>