<link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="{{ asset('js/funtions.js') }}"></script>
<title>PComponentes</title>
<header class="navegacion">
    <nav class="navbar">
        <a href="/inicio" class="icon">
        <img src="{{ asset('image/logo.png') }}" class = "bounce" alt="Ícono" />
        </a>
        <div class="content-nav">
            <ul class="nav-links">
             <li><a href="/inicio"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="/configure-pc">CONFIGURAR PC</a></li>
                <li><a href="/categorias">CATEGORIAS</a></li>
                <li><a href="/promotions">PROMOCIONES</a></li>
                <li><a href="/outlet">OUTLET</a></li>
            </ul>

            <div class="search-bar">
                <input type="text" id="buscador" placeholder="Buscar">
                <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>

        <div class="icons">
            <div class="cart">
                <a href="/carrito" class="cart-link">
                <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <div class="cart-dropdown">
                    <ul>
                    <li><a href="/carrito">Soporte Para Volante - $599</a></li>
                    <li><a href="/#">Soporte Para Volante - $599</a></li>
                    <li><a href="/#">Soporte Para Volante - $599</a></li>
                    <li><a href="/#">Soporte Para Volante - $599</a></li>
                    </ul>
                    <button class="checkout-btn">Proceder al pago</button>
                </div>
            </div>
            <div class="account">
                <a href="/account" class="account-link">
                <i class="fa-solid fa-user"></i>
                 </a>
                <div class="account-drop">
                    <ul>
                        <li><a href="/account">Mi Cuenta</a></li>
                        <li><a href="/track">Mis Pedidos</a></li>
                        <li><a href="/security">Seguridad</a></li>
                        <li><a href="/address">Direcciones</a></li>
                        <li><a href="/payments">Mis Pagos</a></li>
                    </ul>
                    <a href="/auth"><button class="sesion-btn">Iniciar Sesion</a>
                </div>
            </div>
        <button class="nav-toggle" onclick="toggleNav()">
        <i class="fa-solid fa-bars"></i>
        </button>
    </nav>
    
    <script>document.addEventListener("keyup", (e) => {
        if (e.target.matches("#buscador")) {
            let searchText = e.target.value.toLowerCase();
            
            document.querySelectorAll(".card-product").forEach((producto) => {
                let productText = producto.textContent.toLowerCase();
                
                if (productText.includes(searchText)) {
                    producto.classList.remove("search");
                } else {
                    producto.classList.add("search");
                }
            });
             }
        });
    </script>
</header>
