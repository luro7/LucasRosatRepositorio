<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/UsuariosController.php';

    $Consultas = new UsuariosController();
    $rta=$Consultas->obtenerUsuarios();

    echo json_encode($rta);

?>