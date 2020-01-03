<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/UsuariosController.php';

$Consultas = new UsuariosController();

if ((!empty($_POST["usuario_nombre"])) &&
    (!empty($_POST["apellido"])) &&
    (!empty($_POST["dni"])) &&
    (!empty($_POST["telefono"])) &&
    (!empty($_POST["email"]))  &&
    (!empty($_POST["domicilio"])) 
     ) {

    $id = $_POST["id"];
    $usuario_nombre = $_POST["usuario_nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $domicilio = $_POST["domicilio"];



    $id_respuesta = $Consultas->editaruser($id,$usuario_nombre,$apellido,$dni,$telefono,$email,$domicilio );
}else{


    $id_respuesta["codigo"] = -2;
    $id_respuesta["mensaje"] = "Debe completar todos los campos";
}
echo json_encode($id_respuesta);

?>