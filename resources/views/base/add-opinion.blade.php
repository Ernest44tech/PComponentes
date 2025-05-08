<!-- resources/views/base/add-opinion.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Opinión</title>
</head>
<body>
    <h1>Agregar tu Opinión</h1>
    <form action="/submit-opinion" method="POST">
        @csrf
        <textarea name="opinion" placeholder="Escribe tu opinión"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
