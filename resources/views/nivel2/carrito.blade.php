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
  <main class="main-cart">
      <div class="content-cart">
        <div class="cart-products">
            <!-- Producto 1 -->
            <div class="card-product">
                  <div class="product-img">
                    <img src="{{ asset('image/alpine.jpg') }}" alt="Carro">
                  </div>
                  <div class="content-carrito">
                        <h3>Soporte Para Volante de Carreras G920,Soporte Para Volante,Gaming Cockpit,soporte de volante,simulador de conducción para Volante Logitech G27,G25 y G29 (Vvolante y Pedales no Incluidos)</h3>
                        <p class="cart-price">$949.5</p>
                  </div>
            </div>

            <!-- Producto 2 -->
            <div class="card-product">
                  <div class="product-img">
                    <img src="{{ asset('image/alpine.jpg') }}" alt="Carro">
                  </div>
                  <div class="content-carrito">
                    <h3>Soporte Para Volante de Carreras G920,Soporte Para Volante,Gaming Cockpit,soporte de volante,simulador de conducción para Volante Logitech G27,G25 y G29 (Vvolante y Pedales no Incluidos)</h3>
                    <p class="cart-price">$949.5</p>
                </div>
            </div>
        </div>
        <div class="cart-total">
          <p>Subtotal (2)</p>
          <p class="subtotal">$1899</p>
          <a href="/order" class="checkout-btn">Proceder al pago</a>
        </div>
      </div>
  </main>
  @include('layout.related-products')
</body>
@include('layout.footer')
</html>