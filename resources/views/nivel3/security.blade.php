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
    <main class="security-content">
        <div class="security-card">
            <h2>Inicio de sesión y seguridad</h2>
            <form>
                <div class="user-info">
                    <label for="nombre">Nombre</label>
                    <span >Juan Perez</span>
                    <button class="edit">Editar</button>
                </div>
                <div class="user-info">
                    <label for="nombre">Correo electrónico</label>
                    <span >falso@hotmail.com</span>
                    <button class="edit">Editar</button>
                </div>
                <div class="user-info">
                    <label for="nombre">Número de celular principal</label>
                    <span >330203223</span>
                    <button class="edit">Editar</button>
                </div>
                <div class="user-info">
                    <label for="nombre">Clave de acceso</label>
                    <span >Inicia sesión de la misma manera que desbloqueas tu dispositivo, con reconocimiento facial, huella digital o PIN.</span>
                    <button class="edit">Editar</button>
                </div>
                <div class="user-info">
                    <label for="nombre">Contraseña</label>
                    <span >**********</span>
                    <button class="edit">Editar</button>
                </div>
                <div class="user-info">
                    <label for="nombre">Verificación de 2 pasos</label>
                    <span >Agrega una capa de seguridad. Se requiere un código además de tu contraseña.</span>
                    <button class="edit">Editar</button>
                </div>
                <div class="user-info">
                    <label for="nombre">¿La cuenta ha sido comprometida?</label>
                    <span >Toma medidas como cambiar tu contraseña y cerrar sesión en todos los dispositivos.</span>
                    <button class="edit">Editar</button>
                </div>
        </div>
    </main>
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>