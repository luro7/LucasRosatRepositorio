<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/PedidosController.php';
include_once dirname(__FILE__). '/../../datos/db.php';
include_once dirname(__FILE__). '/../../model/Respuesta.php';

$Consultas = new PedidosController($basedatos,$servidor,$usuario,$paswd);
$pedidos=json_decode(file_get_contents('php://input'), TRUE);
    if ($pedidos!=NULL){
//        (!empty($_POST["id_usuario"])) &&
//        (!empty($_POST["id_localidad"])) &&
//        (!empty($_POST["cantidad"])) &&
//        (!empty($_POST["id_estado"])) &&
//        (!empty($_POST["hora_ini"])) &&
//        (!empty($_POST["hora_fin"]))) {

    $id_servicio=$pedidos["id_servicio"];

    $id_localidad=$pedidos["id_localidad"];
    $id_localidad_hasta=$pedidos["id_localidad_hasta"];
        $domicilio_desde=$pedidos["domicilio_desde"];
        $domicilio_hasta=$pedidos["domicilio_hasta"];

        $id_usuario=$pedidos["id_usuario"];

    $id_estado=$pedidos["id_estado"];
    $hora_ini=$pedidos["hora_ini"];
    $hora_fin=$pedidos["hora_fin"];
    $cantidadb=$pedidos["cantidad"];
    $tipo=$pedidos["tipo"];


//        $id_servicio = $_POST["id_servicio"];
//        $id_usuario = $_POST["id_usuario"];
//        $id_localidad = $_POST["id_localidad"];
//        $cantidad = $_POST["cantidad"];
//        $id_estado = $_POST["id_estado"];
//        $hora_ini = $_POST["hora_ini"];
//        $hora_fin = $_POST["hora_fin"];




//var_dump($cantidadb);
        $valor = $pedidos["valor"];
        
        $respuesta = $Consultas->NuevoPedido($id_servicio, $id_usuario, $id_localidad,$id_localidad_hasta,$domicilio_desde,$domicilio_hasta, $id_estado, $hora_ini, $hora_fin, $valor,$cantidadb,$tipo);

        $respuesta =  new Respuesta("1","Pedido realizado con exito!");

    }else{
        $respuesta =  new Respuesta("-2","Debe completar todos los campos");

    }

echo json_encode($respuesta);

?>