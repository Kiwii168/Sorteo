<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
</head>
<body>
    <h1>Panel de Administración</h1>
    <form method="POST" action="">
        <input type="text" name="mensaje" placeholder="Escribe un mensaje" required>
        <button type="submit">Guardar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mensaje = $_POST['mensaje'];
        file_put_contents('mensaje.txt', $mensaje);
        echo "<p>Mensaje guardado: <strong>$mensaje</strong></p>";
    }
    ?>
</body>
</html>
