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
    <main class = "main-content">
    @include('layout.filter')
    <section class="container-top-products">
        <a href="/promotions" class="promo">
        <img src="{{ asset('image/promo2.png') }}" alt="" />
        </a>
        <h1 class = "heading-1">Mas vendidos</h1>

        <div class="container-options">
            <a href="/inicio">Destacados</a>
            <a href="/recent">Mas Recientes</a>
            <a class ="active">Mas vendidos</a>
        </div>



        <div class="container-products">
            <!-- Producto 1 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/headset2.png') }}" alt="Carro">
                <span class="discount">-13%</span>
                    <div class="button-group">
                        <span>
                        <i class="fa-solid fa-eye"></i>
                        </span>
                        <span>
                        <i class="fa-regular fa-heart"></i>
                        </span>
                    </div>
                </div>
                <div class="content-card-product">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Headsets con cancelacion de ruido</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,230 <span>$1,000</span></p>
                </div>
            </div>
            
            <!-- Producto 2 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/headset2.png') }}" alt="Carro">
                <span class="discount">-13%</span>
                    <div class="button-group">
                        <span>
                        <i class="fa-solid fa-eye"></i>
                        </span>
                        <span>
                        <i class="fa-regular fa-heart"></i>
                        </span>
                    </div>
                </div>
                <div class="content-card-product">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Headsets con cancelacion de ruido</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,230 <span>$1,000</span></p>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/headset2.png') }}" alt="Carro">
                <span class="discount">-13%</span>
                    <div class="button-group">
                        <span>
                        <i class="fa-solid fa-eye"></i>
                        </span>
                        <span>
                        <i class="fa-regular fa-heart"></i>
                        </span>
                    </div>
                </div>
                <div class="content-card-product">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Headsets con cancelacion de ruido</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,230 <span>$1,000</span></p>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/headset2.png') }}" alt="Carro">
                <span class="discount">-13%</span>
                    <div class="button-group">
                        <span>
                        <i class="fa-solid fa-eye"></i>
                        </span>
                        <span>
                        <i class="fa-regular fa-heart"></i>
                        </span>
                    </div>
                </div>
                <div class="content-card-product">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Headsets con cancelacion de ruido</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,230 <span>$1,000</span></p>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/headset2.png') }}" alt="Carro">
                <span class="discount">-13%</span>
                    <div class="button-group">
                        <span>
                        <i class="fa-solid fa-eye"></i>
                        </span>
                        <span>
                        <i class="fa-regular fa-heart"></i>
                        </span>
                    </div>
                </div>
                <div class="content-card-product">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Headsets con cancelacion de ruido</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,230 <span>$1,000</span></p>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/headset2.png') }}" alt="Carro">
                <span class="discount">-13%</span>
                    <div class="button-group">
                        <span>
                        <i class="fa-solid fa-eye"></i>
                        </span>
                        <span>
                        <i class="fa-regular fa-heart"></i>
                        </span>
                    </div>
                </div>
                <div class="content-card-product">
                    <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </div>
                    <h3>Headsets con cancelacion de ruido</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,230 <span>$1,000</span></p>
                </div>
            </div>
        </div>
    </section>
    </main>

    <script src="{{ asset('js/funtions.js') }}"></script>
</body>
    @include('layout.footer')
</html>