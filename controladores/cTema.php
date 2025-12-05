<?php
require_once __DIR__ . '/../modelos/mModelo.php';

class cTema
{
    public function listar()
    {
        try {
            $modelo = new mTema();
            $temas = $modelo->obtenerUsuariosYTemas();
            require __DIR__ . '/../vistas/temas.php';
        } catch (Exception $e) {
            $error = "Error al obtener temas: " . $e->getMessage();
            require __DIR__ . '/../vistas/error.php';
        }
    }
}
?>