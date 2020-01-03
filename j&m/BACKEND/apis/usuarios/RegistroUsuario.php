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
    (!empty($_POST["id_domicilio"])) &&
    (!empty($_POST["password"]))  &&
    (!empty($_POST["es_admin"])) ) {


         $usuario_nombre = $_POST["usuario_nombre"];
         $apellido = $_POST["apellido"];
         $dni = $_POST["dni"];
         $telefono = $_POST["telefono"];
         $email = $_POST["email"];
         $id_domicilio = $_POST["id_domicilio"];
         $password= $_POST["password"];
         $es_admin = $_POST["es_admin"];


         $id_respuesta = $Consultas->registrarUsuario($usuario_nombre, $apellido, $dni, $telefono, $email, $id_domicilio, $password, $es_admin);
         }else{


            $id_respuesta["codigo"] = -2;
            $id_respuesta["mensaje"] = "Debe completar todos los campos";
         }   
    echo json_encode($id_respuesta);

?>