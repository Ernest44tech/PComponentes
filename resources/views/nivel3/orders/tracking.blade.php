<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/carrito-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
</head>
<body>
@include('layout.header')
    <main class="track-content">
        <div class="tracking-container">
            <h2>Seguimiento de Pedidos 📦</h2>

            <!-- Sección de detalles del pedido -->
            <section class="order-summary">
                <h3>Pedido #123456</h3>
                <p><strong>Fecha de compra:</strong> 05 de Marzo, 2025</p>
                <p><strong>Estado:</strong> <span class="status in-transit">En Tránsito</span></p>
                <p><strong>Fecha estimada de entrega:</strong> 10 de Marzo, 2025</p>
            </section>

            <!-- Línea de progreso del envío -->
            <section class="progress-bar">
                <div class="step completed">Orden Recibida</div>
                <div class="step two">Preparando Pedido</div>
                <div class="step active">En Tránsito</div>
                <div class="step delivered">Entregado</div>
            </section>

            <!-- Información del envío -->
            <section class="shipping-info">
                <h3>Detalles de Envío</h3>
                <p><strong>Transportista:</strong> DHL Express</p>
                <p><strong>Número de seguimiento:</strong> 987654321</p>
                <p><strong>Dirección de Entrega:</strong> Av. Siempre Viva 742, Springfield</p>
                <p><strong>Método de Envío:</strong> Envío Exprés</p>
            </section>

            <!-- Tabla de pedidos en curso -->
            <h3>Mis Pedidos</h3>
            <table class="order-table">
                <tr>
                    <th>Número de Pedido</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
                <tr>
                    <td>#123456</td>
                    <td>05/03/2025</td>
                    <td><span class="status in-transit">En Tránsito</span></td>
                    <td>$2,898.00</td>
                    <td><a href="#" class="btn">Ver Detalles</a></td>
                </tr>
                <tr>
                    <td>#123457</td>
                    <td>01/03/2025</td>
                    <td><span class="status delivered">Entregado</span></td>
                    <td>$1,250.00</td>
                    <td><a href="#" class="btn">Ver Detalles</a></td>
                </tr>
            </table>
        </div>
    </main>
    @include('layout.related-products')
</body>
@include('layout.footer')
</html>