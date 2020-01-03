<?php
include_once dirname(__FILE__). '/../conexion/conexion.php';
include_once dirname(__FILE__) . '/../model/Localidad.php';
include_once dirname(__FILE__). '/../model/Respuesta.php';
include_once dirname(__FILE__) . '/../datos/DbLocalidad.php';



class LocalidadController{
    public $db;
    //Constructor//
    public function __construct($basedatos,$servidor,$usuario,$paswd)
    {
        $this->db = new DbLocalidad($basedatos,$servidor,$usuario,$paswd);
    }
        public function traerlocalidadxid($id){
            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();
            $sql="select id,nombre,cant_km from localidad where id=".$id;
            $statement = $conexion -> prepare($sql);

            $statement -> execute();
            //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
            if (($statement->rowCount())>0) {
                while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $respuesta =  new Respuesta("1",$result);                }
            }else{
                $respuesta =  new Respuesta("-1","No se encontro la localidad");
            }
            return $respuesta;

        }
        public function GuardarLocalidad($nombre,$cant_km,$id_domicilio){
            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();

            $sql="insert into localidad (nombre,cant_km,id_domicilio) values(:nombre,:cant_km,:id_domicilio )";
            //Utilizo statement para preparar la consulta pero no la envia a la DB todavia.
            $statement = $conexion -> prepare($sql);
            $statement -> bindParam('$:nombre', $nombre);
            $statement -> bindParam(':cant_km', $cant_km);
            $statement -> bindParam(':id_domicilio', $id_domicilio);



            $statement -> execute();
            if (!$statement) {
                $respuesta["codigo"] = -1;
                $respuesta["mensaje"] = "Error, no se guardo la localidad.";
            } else {
                $respuesta["codigo"] = 1;
                $respuesta["mensaje"] = "Localidad guardada.";
            }
            return $respuesta;
        }

    public function TraerLocalidades(){

        $query = sprintf("SELECT * FROM localidad");

        $result = $this->db->getData($query);

        if(count($result)>0) {
            $localidades = [];

            for($i=0; $i< count($result);$i++){

               array_push($localidades, new Localidad($result[$i]['id'],$result[$i]['nombre'],$result[$i]['cant_km'],$result[$i]['id_domicilio']));
            }
            $respuesta =  new Respuesta(1,$localidades);

            return $respuesta;

        }else{
            $respuesta =  new Respuesta(-1,'No se ha encontrado localidades.');
            return $respuesta;
        }

    }
}


