<?php

include_once dirname(__FILE__). '/../conexion/conexion.php';
//include_once dirname(__FILE__). '/../model/cliente.php';

class ServiciosController{

public function traerservicioxid($id){

        $modelo = new Conexion();
        $conexion= $modelo -> get_conexion();
        $sql="select id,descrip,importe from servicios where id=".$id;
        $statement = $conexion -> prepare($sql);
//            var_dump($statement);
        $statement -> execute();
        //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
    if (($statement->rowCount())>0) {
        while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
            $respuesta =  new Respuesta("1",$result);                }
    }else{
        $respuesta =  new Respuesta("-1","No se encontro el servicio");
    }
    return $respuesta;


}





}
?>