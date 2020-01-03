<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/EstadoController.php';
include_once dirname(__FILE__). '/../../model/Respuesta.php';

//require '../../controladoras/UsuariosController.php';
$Consultas = new EstadoController();
if (!empty($_POST["estado"])&&(!empty($_POST["id_pedido"]))){
    $estado=$_POST["estado"];
    $idpedido=$_POST["id_pedido"];

    $respuesta=$Consultas->cambiarestado($estado,$idpedido);
}else{

    $respuesta =  new Respuesta("-2","Error!, no se ha pedido modificar el estado");
}




echo json_encode($respuesta);

?>