<?php
header('Access-Control-Allow-Origin: *');
require_once '../../conexion/conexion.php';
require_once '../../controller/LocalidadController.php';
include_once dirname(__FILE__). '/../../datos/db.php';

//defino controladora

$LocalidadController= new LocalidadController($basedatos,$servidor,$usuario,$paswd);

//comprobar metodo

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    //OBTENGO DATOS ENVIADOS
    //Solamente cuando es json

    //$body = json_decode(file_get_contents("php://input"), true);

    //Cuando son uno o varios parametros



    //LLAMO A LA FUNCION CON LOS PARAMETROS





    $rta=$LocalidadController->TraerLocalidades();

    //IMPRIMO RESPUESTA

    print(json_encode($rta->getJson()));

}

?>