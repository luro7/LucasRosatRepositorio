<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/PedidosController.php';
include_once dirname(__FILE__). '/../../datos/db.php';

$Consultas = new PedidosController($basedatos,$servidor,$usuario,$paswd);




$rta = $Consultas->traerprecios();


echo json_encode($rta);