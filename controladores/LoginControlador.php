<?php
require_once __DIR__ . '/../modelos/UsuarioModelo.php';

class LoginControlador {
    public function login(){
        if(!isset($_POST['correo']) || !isset($_POST['contrasenia'])){
            echo "Faltan datos";
            return;
        }

        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasenia'];

        $usuarioModelo = new UsuarioModelo();

        try{
            $fila = $usuarioModelo->obtenerPorCredenciales($correo, $contrasena);

            if($fila){
                require __DIR__ . '/../vistas/bienvenida.php';
            } else {
                echo "Datos incorrectos";
            }

        } catch(PDOException $e){
            echo "Error en la base de datos";
        }
    }
}
?>
