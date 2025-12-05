<?php
require_once __DIR__ . '/mConectar.php';

class mUsuario
{
    protected $pdo;

    public function __construct()
    {
        $c = new mConectar();
        $this->pdo = $c->conectar();
    }

    public function obtenerPorCredenciales($correo, $contrasena)
    {
        $sql = 'SELECT * FROM usuarios WHERE correo="' . $correo . '" AND contrasenia="' . $contrasena . '"';
        try {
            $resultado = $this->pdo->query($sql);
            return $resultado->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw $e; //el throw es para que se muestre el error
        }
    }
}

class mTema
{
    protected $pdo;

    public function __construct()
    {
        $c = new mConectar();
        $this->pdo = $c->conectar();
    }

    public function obtenerUsuariosYTemas()
    {
        $sql = "SELECT usuario, tema FROM usuarios";
        try {
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
?>