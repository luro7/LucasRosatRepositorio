<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/PedidosController.php';
include_once dirname(__FILE__). '/../../datos/db.php';

$Consultas = new PedidosController($basedatos,$servidor,$usuario,$paswd);


//var_dump($_POST['dni']);

$rta = $Consultas->pedidospendientes();

//                     if (($rta==null)||($rta==' ')){
//                         $rta["mensaje"] = "No se han encontrado Pedidos!.";
//                  }
echo json_encode($rta);