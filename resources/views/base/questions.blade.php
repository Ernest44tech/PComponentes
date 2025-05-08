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
<main class="faq-container">
    <div class="questions-card">
        <h2>Preguntas Frecuentes (FAQ) ❓</h2>

        <div class="faq-item">
            <h3>📦 ¿Cuánto tarda el envío?</h3>
            <p>El tiempo de entrega varía entre 3 y 7 días hábiles dependiendo de tu ubicación.</p>
        </div>

        <div class="faq-item">
            <h3>💳 ¿Qué métodos de pago aceptan?</h3>
            <p>Aceptamos tarjetas de crédito, débito, PayPal y transferencias bancarias.</p>
        </div>

        <div class="faq-item">
            <h3>🔄 ¿Puedo devolver un producto si no me gusta?</h3>
            <p>Sí, tienes hasta 30 días para hacer una devolución siempre que el producto esté en su estado original.</p>
        </div>

        <div class="faq-item">
            <h3>🛠️ ¿Los productos tienen garantía?</h3>
            <p>Sí, todos nuestros productos cuentan con una garantía mínima de 6 meses contra defectos de fabricación.</p>
        </div>

        <div class="faq-item">
            <h3>📍 ¿Tienen tiendas físicas?</h3>
            <p>No, actualmente operamos solo en línea, pero ofrecemos envíos a todo el país.</p>
        </div>

        <div class="faq-item">
            <h3>❓ ¿Cómo puedo contactar con atención al cliente?</h3>
            <p>Puedes enviarnos un correo a soporte@mitienda.com o contactarnos vía WhatsApp al +52 123 456 7890.</p>
        </div>
    </div>
</main>
    <script>
        document.querySelectorAll(".faq-item").forEach(item => {
            item.addEventListener("click", function() {
                this.classList.toggle("active");
            });
        });
    </script>
</body>
@include('layout.footer')
</html>