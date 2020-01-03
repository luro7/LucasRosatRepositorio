<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/UsuariosController.php';
include_once dirname(__FILE__). '/../../model/Respuesta.php';

$Consultas = new UsuariosController();

    if (!empty($_POST["telefono"])) {
        $telefono=$_POST["telefono"];
        $respuesta = $Consultas->buscarUserPorTel($telefono);
    }else{
        $respuesta =  new Respuesta("-1","Debe ingresar el telefono que desea buscar.");

    }
echo json_encode($respuesta);

?>