<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio-estilos.css') }}">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <title>PComponentes</title>
</head>
<body>
@include('layout.header')
    <main class="address-new">
        <div class="new-address">
            <h2>Agregar una nueva dirección</h2>
            <form>
            <div class="form-group">
            <label for="pais">País o región</label>
            <select id="pais" name="pais">
                
            </select>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre completo (nombre y apellido)</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="calle">Calle y número</label>
            <input type="text" id="calle" name="calle">
        </div>
        <div class="form-group">
            <label for="calle2">Calle, número ext e int</label>
            <input type="text" id="calle2" name="calle2">
        </div>
        <div class="form-group">
            <label for="apartamento">Apartamento, suite, unidad, edificio, piso, etc.</label>
            <input type="text" id="apartamento" name="apartamento">
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" id="ciudad" name="ciudad">
        </div>
        <div class="form-group">
            <label for="estado">Estado/Provincia/Región</label>
            <input type="text" id="estado" name="estado">
        </div>
        <div class="form-group">
            <label for="codigo-postal">Código postal</label>
            <input type="text" id="codigo-postal" name="codigo-postal">
        </div>
        <div class="form-group">
            <label for="telefono">Número de teléfono</label>
            <input type="text" id="telefono" name="telefono">
        </div>
        <div class="form-group checkbox">
            <input type="checkbox" id="default-address" name="default-address">
            <label for="default-address">Usar como mi dirección predeterminada.</label>
        </div>
        <div class="form-group">
            <button type="submit">Agregar dirección</button>
        </div>
    </form>
        </div>
    </main>
    @include('layout.related-products')
</body>
@include('layout.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="{{ asset('js/funtions.js') }}"></script>
</html>