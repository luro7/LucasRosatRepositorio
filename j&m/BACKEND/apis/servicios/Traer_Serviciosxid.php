<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/ServiciosController.php';

//require '../../controladoras/UsuariosController.php';
$Consultas = new ServiciosController();

$id = $_POST["id"];
$rta=$Consultas->traerservicioxid($id);


echo json_encode($rta);

?>