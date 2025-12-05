<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <h1 style="color: var(--color-error);">Error</h1>

        <div class="mensaje-error">
            <?php echo $error; ?>
        </div>

        <br>
        <a href="mostrar.php?accion=inicio">Volver al inicio</a>
    </div>
</body>

</html>