<?php
require_once __DIR__ . '/Conectar.php';

class UsuarioModelo {
    protected $pdo;

    public function __construct(){
        $c = new Conectar();
        $this->pdo = $c->conectar();
    }

    public function obtenerPorCredenciales($correo, $contrasena){
        $sql = 'SELECT * FROM usuarios WHERE correo="'.$correo.'" AND contrasenia="'.$contrasena.'"';
        try{
            $resultado = $this->pdo->query($sql);
            return $resultado->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            throw $e;
        }
    }
}
?>
