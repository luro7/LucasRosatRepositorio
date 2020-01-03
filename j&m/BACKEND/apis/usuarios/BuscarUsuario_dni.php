<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/UsuariosController.php';
include_once dirname(__FILE__). '/../../model/Respuesta.php';

	//require '../../controladoras/UsuariosController.php';
	$Consultas = new UsuariosController();
		if (!empty($_POST["dni"])) {
			$dni = $_POST["dni"];

			$respuesta=$Consultas->buscarUsuario_dni($dni);
	    }else{
//             var_dump($_POST["dni"]);
            $respuesta =  new Respuesta("-2","Debe ingresar un numero de DNI.");

        }

		echo json_encode($respuesta);

?>