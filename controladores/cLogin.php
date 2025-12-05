<?php
require_once __DIR__ . '/../modelos/mModelo.php';

class cLogin
{

    public function mostrarFormulario()
    {
        require __DIR__ . '/../vistas/login.php';
    }

    public function mostrarBienvenida()
    {
        $usuario = $_GET['usuario'] ?? 'Usuario';
        require __DIR__ . '/../vistas/bienvenida.php';
    }

    public function login()
    {
        if (!isset($_POST['correo']) || !isset($_POST['contrasenia'])) {
            $error = "Faltan datos";
            require __DIR__ . '/../vistas/error.php';
            return;
        }

        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasenia'];

        try {
            $usuarioModelo = new mUsuario();
            $fila = $usuarioModelo->obtenerPorCredenciales($correo, $contrasena);

            if ($fila) {
                header("Location: mostrar.php?accion=bienvenida&usuario=" . urlencode($fila['usuario'])); //El urlencode es para que funcione la variable aunque haya espacion o caracteres especiales
                exit();
            } else {
                $error = "Datos incorrectos";
                require __DIR__ . '/../vistas/error.php';
            }

        } catch (PDOException $e) {
            $error = "Error en la base de datos: " . $e->getMessage();
            require __DIR__ . '/../vistas/error.php';
        } catch (Exception $e) {
            $error = "Error inesperado: " . $e->getMessage();
            require __DIR__ . '/../vistas/error.php';
        }
    }
}
?>