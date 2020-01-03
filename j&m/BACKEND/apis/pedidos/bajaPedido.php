<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include_once dirname(__FILE__). '/../../controller/PedidosController.php';
include_once dirname(__FILE__). '/../../datos/db.php';

$Consultas = new PedidosController($basedatos,$servidor,$usuario,$paswd);

    if (!empty($_POST["id"])) {
        $id = $_POST["id"];
        $rta = $Consultas->eliminarPedido($id);

        $rta["codigo"] = 1;
        $rta["mensaje"] = "Pedido Eliminado";

    }else{
        $rta["codigo"] = -1;
        $rta["titulo"] = "Aviso";
        $rta["mensaje"] = "No se ha podido eliminar";
    }

echo json_encode($rta);

?>