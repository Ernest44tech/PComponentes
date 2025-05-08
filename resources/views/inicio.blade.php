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
        <img src="{{ asset('image/promo.png') }}" alt="" />
        </a>
        <h1 class = "heading-1">Mejores Productos</h1>

        <div class="container-options">
            <a class ="active">Destacados</a>
            <a href="/recent">Mas Recientes</a>
            <a href="/sells">Mas vendidos</a>
        </div>



        <div class="container-products">
            <!-- Producto 1 -->
             <form class = "form-inf" action="/product" method = "GET">
             <div class="card-product msi" onclick="this.parentNode.submit()">
                <div class="container-img">
                <img src="{{ asset('image/grafica2.png') }}" alt="Carro">
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
                    <h3>Tarjeta de Video MSI GeForce RTX 5090 32G TRIO OC / 32GB GDDR7 / 512-bit / DirectX 12 Ultimate / DisplayPort x3 / HDMI / 912-V530-024</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$67,999.00 <span>$68,999.00</span></p>
                </div>
            </div>
             </form>
            <!-- Producto 2 -->
            <form class = "form-inf" action="/product" method = "GET">
             <div class="card-product msi" onclick="this.parentNode.submit()">
                <div class="container-img">
                <img src="{{ asset('image/grafica2.png') }}" alt="Carro">
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
                    <h3>Tarjeta de Video MSI GeForce RTX 5090 32G TRIO OC / 32GB GDDR7 / 512-bit / DirectX 12 Ultimate / DisplayPort x3 / HDMI / 912-V530-024</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$67,999.00 <span>$68,999.00</span></p>
                </div>
            </div>
            </form>

            <!-- Producto 3 -->
            <div class="card-product amd">
                <div class="container-img">
                <img src="{{ asset('image/amd.png') }}" alt="Carro">
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
                    <h3>Procesador AMD Ryzen 7 9800X3D / AM5 / Up to 5.2 GHz / 8-Core / 96MB L3 Cache / AMD Radeon™ Graphics / No Incluye Disipador / 100-100001084WOF</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$11,299.00 <span>$11,999.00</span></p>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="card-product amd">
                <div class="container-img">
                <img src="{{ asset('image/amd.png') }}" alt="Carro">
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
                    <h3>Procesador AMD Ryzen 7 9800X3D / AM5 / Up to 5.2 GHz / 8-Core / 96MB L3 Cache / AMD Radeon™ Graphics / No Incluye Disipador / 100-100001084WOF</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$11,299.00 <span>$11,999.00</span></p>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="card-product intel">
                <div class="container-img">
                <img src="{{ asset('image/intel.png') }}" alt="Carro">
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
                    <h3>Procesador Intel Core Ultra 5 225 / LGA 1851 / 4.90GHz / 10 Núcleos / 20MB Caché / incluye Disipador / Intel Graphics / Ultra Series 2 Arrow Lake / BX80768225</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$5,899.00 <span>$11,999.00</span></p>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="card-product intel">
                <div class="container-img">
                <img src="{{ asset('image/intel.png') }}" alt="Carro">
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
                    <h3>Procesador Intel Core Ultra 5 225 / LGA 1851 / 4.90GHz / 10 Núcleos / 20MB Caché / incluye Disipador / Intel Graphics / Ultra Series 2 Arrow Lake / BX80768225</h3>
                    <span class="add-cart">
                    <i class="fa-solid fa-cart-plus"></i>
                    </span>
                    <p class="price">$5,899.00 <span>$11,999.00</span></p>
                </div>
            </div>

        </div>
    </section>
    </main>

    <script src="{{ asset('js/funtions.js') }}"></script>
    <script src="{{ asset('js/categories.js') }}"></script>
</body>
    @include('layout.footer')
</html>