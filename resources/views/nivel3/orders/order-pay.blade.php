<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/carrito-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>PComponentes</title>
</head>
<body>
@include('layout.header')
<main class="order-main">
        <div class="order-content">
        <h2>Proceder al Pago</h2>

        <!-- Lista de productos -->
        <div class="product-list">
            <div class="product-item">
                <img src="{{ asset('image/alpine.jpg') }}" alt="Producto 1">
                <div class="product-details">
                    <h3>Soporte para Volante de Carreras G920</h3>
                    <p>Compatible con Logitech G27, G25, G29</p>
                    <span class="product-price">$949.5</span>
                </div>
                <button class="remove-btn"><i class="fa-solid fa-trash-can"></i></button>
            </div>

            <div class="product-item">
                <img src="{{ asset('image/alpine.jpg') }}" alt="Producto 2">
                <div class="product-details">
                    <h3>Soporte para Volante de Carreras G920</h3>
                    <p>Compatible con Logitech G27, G25, G29</p>
                    <span class="product-price">$949.5</span>
                </div>
                <button class="remove-btn"><i class="fa-solid fa-trash-can"></i></button>
            </div>
        </div>

        <!-- Opciones de pago y entrega -->
        <div class="payment-options">
            <div class="box">
                <h3>Tipo de Entrega</h3>
                <p>Todos los envíos se realizan en días hábiles.</p>
                <label for="entrega">Tipo de entrega</label>
                <select id="entrega">
                    <option>A domicilio</option>
                    <option>Recoger en tienda</option>
                </select>
                <p>Envío: <strong>$0.00</strong> (Promo envío gratis desde $3,000.00)</p>
            </div>

            <div class="box">
                <h3>Factura</h3>
                <p>Seleccione Ticket si solo necesita comprobante, o Factura para declarar impuestos.</p>
                <label for="factura">Elija una opción</label>
                <select id="factura">
                    <option>Ticket</option>
                    <option>Factura</option>
                </select>
            </div>
        </div>

        <!-- Sección de cupones -->
        <div class="coupon-container">
            <label for="cupon">¿Tienes un cupón de descuento?</label>
            <input type="text" id="cupon" placeholder="Ingresa el código">
            <button>Aplicar</button>
        </div>

        <!-- Sección de Método de Pago -->
        <div class="payment-method">
            <h3>Método de Pago</h3>
            <p>Selecciona cómo deseas pagar tu compra:</p>
            
            <div class="payment-options">
                <label>
                    <input type="radio" name="payment" value="tarjeta" checked>
                    Tarjeta de Crédito / Débito
                </label>

                <label>
                    <input type="radio" name="payment" value="paypal">
                    PayPal
                </label>

                <label>
                    <input type="radio" name="payment" value="oxxo">
                    OXXO Pay
                </label>

                <label>
                    <input type="radio" name="payment" value="transferencia">
                    Transferencia Bancaria
                </label>
            </div>
        </div>

        <!-- Resumen del pedido -->
        <div class="order-summary">
            <div class="summary">
                <p><strong>Envío:</strong> $0.00</p>
                <p><strong>Subtotal:</strong> $1,899.00</p>
                <p><strong>Total:</strong> $1,899.00</p>
                <a href="/completed" class="btn">Ordenar</a>
                <!-- <button class="btn">Ordenar</button> -->
            </div>
        </div>
    </div>
</main>
@include('layout.related-products')
</body>
@include('layout.footer')
</html>