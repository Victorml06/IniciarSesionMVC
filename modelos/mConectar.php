<?php
require_once __DIR__ . '/../config/configbd.php';

class mConectar
{
    protected $conexion;

    public function __construct()
    {
        
        $dsn = 'mysql:host=' . SERVERNAME . ';dbname=' . DATABASE . ';charset=utf8mb4';
        $this->conexion = new PDO($dsn, USER, PASSWORD);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function conectar()
    {
        return $this->conexion;
    }
}
?>