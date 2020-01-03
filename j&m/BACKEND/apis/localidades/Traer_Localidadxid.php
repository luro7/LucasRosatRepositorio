<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/LocalidadController.php';
include_once dirname(__FILE__). '/../../datos/db.php';

//defino controladora

$LocalidadController= new LocalidadController($basedatos,$servidor,$usuario,$paswd);

$id = $_POST["id"];
$rta=$LocalidadController->traerlocalidadxid($id);


echo json_encode($rta);

?>