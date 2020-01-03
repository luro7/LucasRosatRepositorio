<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/UsuariosController.php';

//require '../../controladoras/UsuariosController.php';
$Consultas = new UsuariosController();

    $id = $_POST["id"];
    $rta=$Consultas->traerUserxid($id);


echo json_encode($rta);

?>