<?php
require_once __DIR__ . '/controladores/cLogin.php';
require_once __DIR__ . '/controladores/cTema.php';


if (isset($_REQUEST['accion'])) {
    $accion = $_REQUEST['accion'];
} else {
    $accion = 'inicio';
}

switch ($accion) {
    case 'inicio':
        $controlador = new cLogin();
        $controlador->mostrarFormulario();
        break;

    case 'ingresar':
        $controlador = new cLogin();
        $controlador->login();
        break;

    case 'bienvenida':
        $controlador = new cLogin();
        $controlador->mostrarBienvenida();
        break;

    case 'temas':
        $controlador = new cTema();
        $controlador->listar();
        break;

    default:
        $controlador = new cLogin();
        $controlador->mostrarFormulario();
        break;
}
?>