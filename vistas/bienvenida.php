<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <h1>¡Bienvenido/a, <?php echo $usuario;?>!</h1>

        <p class="texto-centro">¿Qué te gustaría hacer ahora?</p>

        <div class="grupo-botones">
            <a href="mostrar.php?accion=temas" class="boton boton-primario">Ver Temas de Usuarios</a>

            <a href="mostrar.php?accion=inicio" class="boton boton-secundario">Cerrar Sesión</a>
        </div>
    </div>
</body>

</html>