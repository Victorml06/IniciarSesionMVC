<?php
require_once __DIR__ . '/controladores/LoginControlador.php';

$controller = new LoginControlador();
$controller->login();
?>