<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Temas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="contenedor ancho">
        <h1>Temas de Usuarios</h1>
        <table border="0">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Tema</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($temas)) {
                    foreach ($temas as $tema) {
                ?>
                        <tr>
                            <td><?php echo htmlspecialchars($tema['usuario']); ?></td>
                            <td><?php echo htmlspecialchars($tema['tema']); ?></td>
                        </tr>
                <?php
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="2">No hay usuarios/temas registrados.</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="mostrar.php">Cerrar Sesión</a>
    </div>
</body>

</html>