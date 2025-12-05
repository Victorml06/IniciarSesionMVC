<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor">
        <h1>Iniciar Sesión</h1>

        <form method="post" action="mostrar.php?accion=ingresar">
            <label>Correo:</label>
            <input type="text" name="correo" required placeholder="ejemplo@email.com">

            <label>Contraseña:</label>
            <input type="password" name="contrasenia" required>

            <input type="submit" value="Entrar">
        </form>
    </div>
</body>

</html>