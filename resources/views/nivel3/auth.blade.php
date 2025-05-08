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
<main class="auth-content">
    <div class="card-auth">

    <div class="toggle-buttons">
      <button onclick="toggleAuth('login')">Iniciar Sesión</button>
      <button onclick="toggleAuth('register')">Registrarse</button>
    </div>

        <!-- Sección de Iniciar Sesión -->
        <div class="box active" id="login-box">
            <h2>Iniciar Sesión</h2>
            <p>Bienvenido, entra a tu cuenta.</p>
            <form>
                <input class = "auth-user" type="email" placeholder="Correo Electrónico" required>
                <input class = "auth-user" type="password" placeholder="Contraseña" required>
                <button class = "auth-btn">Iniciar Sesión</button>
            </form>
            <a href="#" class="link-auth">¿Olvidaste tu contraseña?</a>
        </div>

        <!-- Sección de Registro -->
        <div class="box" id="register-box">
            <h2>Crear una Nueva Cuenta</h2>
            <p>Crea tu cuenta con tu usuario, correo y contraseña.</p>
            <form>
                <input class = "auth-user" type="text" placeholder="Usuario" required>
                <input class = "auth-user" type="email" placeholder="Correo Electrónico" required>
                <input class = "auth-user" type="password" placeholder="Contraseña" required>
                <input class = "auth-user" type="password" placeholder="Confirmar Contraseña" required>
                <button class = "auth-btn" class="btn">Registrarme</button>
            </form>
        </div>
    </div>
</main>
@include('layout.related-products')
</body>
@include('layout.footer')
<script>
  function toggleAuth(view) {
    const loginBox = document.getElementById("login-box");
    const registerBox = document.getElementById("register-box");

    loginBox.classList.remove("active");
    registerBox.classList.remove("active");

    if (view === "login") {
      loginBox.classList.add("active");
    } else {
      registerBox.classList.add("active");
    }
  }
</script>

</html>