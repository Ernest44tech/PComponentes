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
<main class="configure-content">
    <div class="components-conf">
        <div class="conf-item">
            <h3 class = "tittle-conf">MARCA DEL PROCESADOR</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/amd-logo.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/intel-logo.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">PROCESADOR</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/amd.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/intel.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">DISIPADOR DE CALOR</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/disipador.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/disipador.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">TARJETA MADRE</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/madre.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/madre2.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">MEMORIA RAM</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/ram.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/ram2.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">MEMORIA RAM ADICIONAL</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/ram.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/ram.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">ALMACENAMIENTO</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/ssd.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/ssd2.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">ALMACENAMIENTO ADICIONAL</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/ssd.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/ssd.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">TARJETA GRAFICA</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/grafica.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/grafica2.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/grafica3.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">GABIENETE</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/gabinete.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/gabinete2.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">FUENTE DE PODER</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/fuente.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/fuente2.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">ENSAMBLADO</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/ensamblado.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/ensamblado2.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="conf-item">
            <h3 class = "tittle-conf">RESUMEN</h3>
            <div class="content-conf">
                <div class = "conf-options">
                    <img src="{{ asset('image/amd-logo.png') }}" alt="">
                </div>
                <div class = "conf-options">
                    <img src="{{ asset('image/intel-logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
        <script>
            document.querySelectorAll(".conf-item").forEach(item => {
                item.addEventListener("click", function() {
                    this.classList.toggle("active");
                });
            });
        </script>
    <div class="conf-desc">
        <div class="desc-total">
            <div class="description">
                <h3 class = "tittle">CONFIGURACION DE PC A MEDIDA</h3>
                <P>¡Haz tu computadora por piezas o PC a la carta!</P>
                <P>Utiliza nuestro configurador para hacer tu PC a medida. Solo tienes que elegir los componentes y el sistema te mostrará el precio final.</P>
            </div>
            <div class="more-desc">
                <p>El configurador esta diseñado para ofrecer componentes compatibles lo mas precisamente posible, sin embargo pueden surgir incompatibilidades en algunos casos debido a la gran cantidad de variables al ensamblar un equipo. Si surge alguna incompatibilidad nosotros lo contactaremos para ofrecerle alguna alternativa que la solucione.</p>
            </div>
            <div class="total-conf">
                <h3>TOTAL ACUMULADO</h3>
                <span class="total-price">$15,040.00 MXN</span>
            </div>
        </div>
    </div>
</main>

@include('layout.related-products')
</body>
@include('layout.footer')
</html>