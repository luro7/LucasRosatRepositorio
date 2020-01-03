<?php

include_once dirname(__FILE__). '/../conexion/conexion.php';
//include_once dirname(__FILE__). '/../model/cliente.php';
include_once dirname(__FILE__). '/../model/Respuesta.php';

class EstadoController{



    public function traerestadoxid($id){
        $modelo = new Conexion();
        $conexion= $modelo -> get_conexion();
        $sql="select id,estado from estado where id=".$id;
        $statement = $conexion -> prepare($sql);
//            var_dump($statement);
        $statement -> execute();
        //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
        if (($statement->rowCount())>0) {
            while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                $respuesta =  new Respuesta("1",$result);                }
        }else{
            $respuesta =  new Respuesta("-1","No se encontro es estado");
        }
        return $respuesta;
    }

    public function cambiarestado($estado,$idpedido){
        switch ($estado) :
            case 1:$idestado=1;
                break;
            case 2:$idestado=2;
                break;
            case 3:$idestado=3;
                break;
            endswitch;

        $modelo = new Conexion();
        $conexion= $modelo -> get_conexion();
        $sql2="select id_estado from pedidos where id=".$idpedido;
        $statement2 = $conexion -> prepare($sql2);
        $statement2 -> execute();
        $result=$statement2->fetch(PDO::FETCH_OBJ)->id_estado;
//      var_dump(intval($result).'/////'.$idestado.'/////'.$estado);
        if ($idestado!=intval($result)){
        $sql = "UPDATE pedidos\n". "SET id_estado =".$idestado." where id=".$idpedido;
        $statement = $conexion -> prepare($sql);

        $statement -> execute();

        //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta.
        if (($statement->rowCount())>0) {
                $respuesta =  new Respuesta("1","Estado Modificado");
          }else{
                $respuesta =  new Respuesta("-1","Error!, no se ha podido modificar el estado");

               }}else{$respuesta =  new Respuesta("-3","error! no ha habido cambios en estado");}
        return $respuesta;
    }





}
?>