<?php

include_once dirname(__FILE__). '/../../controller/FinanzasController.php';
include_once dirname(__FILE__) . '/../../model/Respuesta.php';
include_once dirname(__FILE__). '/../../datos/db.php';

//require '../../controladoras/UsuariosController.php';
$Consultas = new FinanzasController($basedatos, $servidor, $usuario, $paswd);

$fecha_ini=$_GET['fecha_ini'];
$fecha_fin=$_GET['fecha_fin'];
$id_localidad=$_GET['id_localidad'];
$id_localidad_hasta=$_GET['id_localidad_hasta'];
$id_usuario=$_GET['id_usuario'];


$rta=$Consultas->traerfinanzas($fecha_ini,$fecha_fin, $id_localidad, $id_localidad_hasta, $id_usuario);


echo json_encode($rta);

?>