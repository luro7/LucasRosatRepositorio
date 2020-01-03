<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/UsuariosController.php';

$UsuariosController = new UsuariosController();

if (!empty($_POST["telefono"]) && (!empty($_POST["password"]))) {
    $telefono = $_POST["telefono"];
    $password = $_POST["password"];
    $rta=$UsuariosController->loginUsuario($telefono,$password);
}else{
    $rta["codigo"] = -1;
    $rta["mensaje"] = "Debe completar todos los campos";
}
echo json_encode($rta);

?>