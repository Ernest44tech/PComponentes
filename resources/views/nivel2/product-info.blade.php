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

<div class="container-product">
    <main class="info-product">
        <div class="card-productdesc">
            <div class="img-product">
                <div class="img-principal">
                <img src="{{ asset('image/grafica2.png') }}" alt="">
                </div>
                <div class="reel-img">
                    <img src="{{ asset('image/grafica2.png') }}" alt="">
                    <img src="{{ asset('image/grafica2.png') }}" alt="">
                    <img src="{{ asset('image/grafica2.png') }}" alt="">
                    <img src="{{ asset('image/grafica2.png') }}" alt="">
                </div>
            </div>
            <div class="desc-product">
                <span class="desc">Tarjeta de Video MSI GeForce RTX 5090 32G TRIO OC / 32GB GDDR7 / 512-bit / DirectX 12 Ultimate / DisplayPort x3 / HDMI / 912-V530-024</span>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <span class="price">$67,999.00</span>
                <div class = "amount-button">
                    <div class="amount-group">
                    <label for="pais">Cantidad:</label>
                    <select id="amount" name="cantidad">
                        <option selected>0</option>
                        <option value="1">1</option>
                        <option value="3">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button><i class="fa-solid fa-cart-shopping"></i>Agregar al carrito</button>
                </div>
            </div>
        </div>
    </main>
    <section class="opinions">
    <div class="opinions-content">
            <div class="opinions-total">
                <div class="total stars">
                    <h3>Opiniones de clientes</h3>
                    <div class="stars-init">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <span class="total-stars"> 4 de 5</span>
                    </div>

                    <div class="rating-bar">
                        <div class="rating-row">
                            <span>5 estrellas</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 80%;"></div>
                            </div>
                            <span>80%</span>
                        </div>
                        <div class="rating-row">
                            <span>4 estrellas</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                            <span>60%</span>
                        </div>
                        <div class="rating-row">
                            <span>3 estrellas</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 40%;"></div>
                            </div>
                            <span>40%</span>
                        </div>
                        <div class="rating-row">
                            <span>2 estrellas</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%;"></div>
                            </div>
                            <span>20%</span>
                        </div>
                        <div class="rating-row">
                            <span>1 estrella</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 10%;"></div>
                            </div>
                            <span>10%</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="add-opinion">
                    <h4>Escribir reseña sobre este producto</h4>
                    <p>Comparte tu opinión con otros clientes</p>
                    <a href="/add-opinion" class="opinion-new">Escribir mi opinión</a>
                </div>
            </div>
            <div class="opinion-cards">
                <div class="users-opinion">
                    <h4>Las mejores reseñas</h4>
                    <div class="user-cal">
                        <i class="fa-solid fa-circle-user"></i>
                        <p>Karina SGarcia</p>
                    </div>
                    <div class="stars-user">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <span class="date">Comentado en Mexico el 4 de febrero de 2025</span>
                    <p class="verified">Compra verificada</p>
                    <span class="comment-user">Escelente producto y buena calidad, recomendado</span>
                    <hr>
                </div>

                <!-- Opinion 2 -->
                <div class="users-opinion">
                    <div class="user-cal">
                        <i class="fa-solid fa-circle-user"></i>
                        <p>Mario M.</p>
                    </div>
                    <div class="stars-user">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <span class="date">Comentado en México el 1 de diciembre de 2024</span>
                    <p class="verified">Compra verificada</p>
                    <span class="comment-user">Buena calidad y precio, funciona muy bien</span>
                    <hr>
                </div>

                <!-- Opinion 3 -->
                <div class="users-opinion">
                    <div class="user-cal">
                        <i class="fa-solid fa-circle-user"></i>
                        <p>Cesar Cano</p>
                    </div>
                    <div class="stars-user">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <span class="date">Comentado en México el 24 de noviembre de 2024</span>
                    <p class="verified">Compra verificada</p>
                    <span class="comment-user">Escelente producto y buena calidad, recomendado</span>
                    <hr>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
@include('layout.footer')
</html>