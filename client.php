<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cliente</title>
    <meta http-equiv="refresh" content="5"> <!-- Refresca cada 5 segundos -->
</head>
<body>
    <h1>Mensajes en Tiempo Real</h1>

    <div>
        <?php
        $mensaje = file_exists('mensaje.txt') ? file_get_contents('mensaje.txt') : 'Sin mensajes aún.';
        echo "<p>$mensaje</p>";
        ?>
    </div>
</body>
</html>
