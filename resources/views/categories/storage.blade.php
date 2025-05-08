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

        <h1 class = "heading-1">Almacenamiento</h1>
        <hr>

        <div class="container-products">
            <!-- Producto 1 -->
             <form action="/product" method = "GET">
             <div class="card-product" onclick="this.parentNode.submit()">
                <div class="container-img">
                <img src="{{ asset('image/storage.png') }}" alt="Carro">
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
                    <h3>Disco Duro Externo Adata HD710 Pro 2.5'' / 1TB / USB 3.0 / Para Mac/PC / Amarillo / HD710P-1TU31-CYL</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,199.00 <span></span></p>
                </div>
            </div>
             </form>
            
            <!-- Producto 2 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/storage.png') }}" alt="Carro">
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
                    <h3>Disco Duro Externo Adata HD710 Pro 2.5'' / 1TB / USB 3.0 / Para Mac/PC / Amarillo / HD710P-1TU31-CYL</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,199.00</p>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/storage.png') }}" alt="Carro">
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
                    <h3>Disco Duro Externo Adata HD710 Pro 2.5'' / 1TB / USB 3.0 / Para Mac/PC / Amarillo / HD710P-1TU31-CYL</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,199.00</p>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/storage.png') }}" alt="Carro">
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
                    <h3>Disco Duro Externo Adata HD710 Pro 2.5'' / 1TB / USB 3.0 / Para Mac/PC / Amarillo / HD710P-1TU31-CYL</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,199.00</p>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/storage.png') }}" alt="Carro">
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
                    <h3>Disco Duro Externo Adata HD710 Pro 2.5'' / 1TB / USB 3.0 / Para Mac/PC / Amarillo / HD710P-1TU31-CYL</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,199.00</p>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="card-product">
                <div class="container-img">
                <img src="{{ asset('image/storage.png') }}" alt="Carro">
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
                    <h3>Disco Duro Externo Adata HD710 Pro 2.5'' / 1TB / USB 3.0 / Para Mac/PC / Amarillo / HD710P-1TU31-CYL</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$1,199.00</p>
                </div>
            </div>
        </div>
    </section>
    </main>
    
</body>
@include('layout.footer')
</html>