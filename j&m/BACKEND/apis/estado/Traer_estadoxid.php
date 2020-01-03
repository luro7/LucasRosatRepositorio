<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/EstadoController.php';

//require '../../controladoras/UsuariosController.php';
$Consultas = new EstadoController();

$id = $_POST["id"];
$rta=$Consultas->traerestadoxid($id);


echo json_encode($rta);

?>