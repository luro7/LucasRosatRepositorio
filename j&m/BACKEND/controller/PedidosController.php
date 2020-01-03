<?php
include_once dirname(__FILE__). '/../conexion/conexion.php';
// include_once dirname(__FILE__) . '/../model/Pedido.php';
include_once dirname(__FILE__). '/../model/Respuesta.php';
include_once dirname(__FILE__). '/../datos/DbPedido.php';

	class PedidosController{
        private $db;
        //Constructor//
        public function __construct($basedatos,$servidor,$usuario,$paswd)
        {
            $this->db = new DbPedido($basedatos,$servidor,$usuario,$paswd);
        }

        public function traerprecios(){
            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();
            $sql2 = sprintf("SELECT valor FROM medidas");
            $statement2 = $conexion -> prepare($sql2);
            $statement2 -> execute();
            $r = $this->db->getData($sql2);




//            for($i=0; $i< count($r);$i++){
                $precios=new stdClass;

               $precios-> preciochico=$r[0]['valor'];
                $precios->preciomediano=$r[1]['valor'];
                $precios->preciogrande=$r[2]['valor'];
//            }
            if(!$statement2) {
                $respuesta =  new Respuesta("-1",'No se ha encontrado pedidos');
//                return $respuesta;
            }else{$respuesta =  new Respuesta("1",$precios);

        }return $respuesta;}

       public function pedidoscancelados(){
           $modelo = new Conexion();
           $conexion= $modelo -> get_conexion();
           $sql = sprintf("SELECT pedidos.id,
                                         servicios.descrip,
                                         usuarios.usuario_nombre,
                                         localidad_desde.nombre as localidad_desde,
                                         localidad_hasta.nombre as localidad_hasta,
                                         pedidos.domicilio_desde,
                                         pedidos.domicilio_hasta,
       
                                         estado.estado,
                                         pedidos.fecha,
                                         pedidos.hora_ini,
                                         pedidos.hora_fin,
                                         pedidos.valor,
                                         bultos.bulto_cantidad,
                                         bultos.bulto_tipo
                                   FROM pedidos 
                                                INNER JOIN usuarios ON pedidos.id_usuario=usuarios.id 
                                                INNER JOIN servicios ON pedidos.id_servicio=servicios.id 
                                                iNNER JOIN localidad as localidad_desde  ON pedidos.id_localidad=localidad_desde.id
                                                inner join localidad as localidad_hasta on pedidos.id_localidad_hasta=localidad_hasta.id
                                                INNER JOIN estado ON pedidos.id_estado=estado.id 
                                                INNER JOIN bultos ON pedidos.id=bultos.id_pedido
                                   WHERE estado.id=2");
           $statement2 = $conexion -> prepare($sql);
           $statement2 -> execute();
           $result = $this->db->getData($sql);
           if(!$result) {
               $respuesta =  new Respuesta("-1",'No se ha encontrado pedidos cancelados');
//                return $respuesta;
           }else{
               $pedido=[];
               for($i=0; $i< count($result);$i++){
                   $Pedidos = new stdClass();
//                    var_dump($result[$i]['id_pedido']);
                   $Pedidos->id = $result[$i]['id'];
                   $Pedidos->servicio = $result[$i]['descrip'];


                   $Pedidos->cliente = $result[$i]['usuario_nombre'];

//                $Pedidos->id_cliente  = $result[$i]['id_cliente'];
                   $Pedidos->localidad  = $result[$i]['localidad_desde'];
                   $Pedidos->localidad_hasta  = $result[$i]['localidad_hasta'];
                   $Pedidos->domicilio_desde  = $result[$i]['domicilio_desde'];
                   $Pedidos->domicilio_hasta  = $result[$i]['domicilio_hasta'];


                   $Pedidos->estado   = $result[$i]['estado'];
                   $Pedidos->fecha    = $result[$i]['fecha'];
                   $Pedidos->hora_ini    = $result[$i]['hora_ini'];
                   $Pedidos->hora_fin    = $result[$i]['hora_fin'];
                   $Pedidos->valor   = $result[$i]['valor'];

                   $Pedidos->bulto_cantidad   = json_decode($result[$i]['bulto_cantidad']);
                   $Pedidos->bulto_tipo   = json_decode($result[$i]['bulto_tipo']);

                   array_push($pedido, $Pedidos);
                   $respuesta =  new Respuesta("1",$pedido);
//                $respuesta["id_respuesta"] = "1";
//                $respuesta["mensaje"]["pedidos"] = $pedido;
               }

           }
           return $respuesta;}

       public function pedidospendientes(){
           $modelo = new Conexion();
           $conexion= $modelo -> get_conexion();
           $sql = sprintf("SELECT pedidos.id,
                                         servicios.descrip,
                                         usuarios.usuario_nombre,
                                         localidad_desde.nombre as localidad_desde,
                                         localidad_hasta.nombre as localidad_hasta,
                                         pedidos.domicilio_desde,
                                         pedidos.domicilio_hasta,
       
                                         estado.estado,
                                         pedidos.fecha,
                                         pedidos.hora_ini,
                                         pedidos.hora_fin,
                                         pedidos.valor,
                                         bultos.bulto_cantidad,
                                         bultos.bulto_tipo
                                   FROM pedidos 
                                                INNER JOIN usuarios ON pedidos.id_usuario=usuarios.id 
                                                INNER JOIN servicios ON pedidos.id_servicio=servicios.id 
                                                iNNER JOIN localidad as localidad_desde  ON pedidos.id_localidad=localidad_desde.id
                                                inner join localidad as localidad_hasta on pedidos.id_localidad_hasta=localidad_hasta.id
                                                INNER JOIN estado ON pedidos.id_estado=estado.id 
                                                INNER JOIN bultos ON pedidos.id=bultos.id_pedido
                                   WHERE estado.id=3");
           $statement2 = $conexion -> prepare($sql);
           $statement2 -> execute();
           $result = $this->db->getData($sql);
           if(!$result) {
               $respuesta =  new Respuesta("-1",'No se ha encontrado pedidos pendientes');
//                return $respuesta;
           }else{
               $pedido=[];
               for($i=0; $i< count($result);$i++){
                   $Pedidos = new stdClass();
//                    var_dump($result[$i]['id_pedido']);
                   $Pedidos->id = $result[$i]['id'];
                   $Pedidos->servicio = $result[$i]['descrip'];


                   $Pedidos->cliente = $result[$i]['usuario_nombre'];

//                $Pedidos->id_cliente  = $result[$i]['id_cliente'];
                   $Pedidos->localidad  = $result[$i]['localidad_desde'];
                   $Pedidos->localidad_hasta  = $result[$i]['localidad_hasta'];
                   $Pedidos->domicilio_desde  = $result[$i]['domicilio_desde'];
                   $Pedidos->domicilio_hasta  = $result[$i]['domicilio_hasta'];


                   $Pedidos->estado   = $result[$i]['estado'];
                   $Pedidos->fecha    = $result[$i]['fecha'];
                   $Pedidos->hora_ini    = $result[$i]['hora_ini'];
                   $Pedidos->hora_fin    = $result[$i]['hora_fin'];
                   $Pedidos->valor   = $result[$i]['valor'];

                   $Pedidos->bulto_cantidad   = json_decode($result[$i]['bulto_cantidad']);
                   $Pedidos->bulto_tipo   = json_decode($result[$i]['bulto_tipo']);

                   array_push($pedido, $Pedidos);
                   $respuesta =  new Respuesta("1",$pedido);
//                $respuesta["id_respuesta"] = "1";
//                $respuesta["mensaje"]["pedidos"] = $pedido;
               }

           }
           return $respuesta;}
       public function pedidosconfirmados(){
           $modelo = new Conexion();
           $conexion= $modelo -> get_conexion();
           $sql = sprintf("SELECT pedidos.id,
                                         servicios.descrip,
                                         usuarios.usuario_nombre,
                                         localidad_desde.nombre as localidad_desde,
                                         localidad_hasta.nombre as localidad_hasta,
                                         pedidos.domicilio_desde,
                                         pedidos.domicilio_hasta,
       
                                         estado.estado,
                                         pedidos.fecha,
                                         pedidos.hora_ini,
                                         pedidos.hora_fin,
                                         pedidos.valor,
                                         bultos.bulto_cantidad,
                                         bultos.bulto_tipo
                                   FROM pedidos 
                                                INNER JOIN usuarios ON pedidos.id_usuario=usuarios.id 
                                                INNER JOIN servicios ON pedidos.id_servicio=servicios.id 
                                                iNNER JOIN localidad as localidad_desde  ON pedidos.id_localidad=localidad_desde.id
                                                inner join localidad as localidad_hasta on pedidos.id_localidad_hasta=localidad_hasta.id
                                                INNER JOIN estado ON pedidos.id_estado=estado.id 
                                                INNER JOIN bultos ON pedidos.id=bultos.id_pedido
                                   WHERE estado.id=1");
           $statement2 = $conexion -> prepare($sql);
           $statement2 -> execute();
           $result = $this->db->getData($sql);
           if(!$result) {
               $respuesta =  new Respuesta("-1",'No se ha encontrado confirmados');
//                return $respuesta;
           }else{
               $pedido=[];
               for($i=0; $i< count($result);$i++){
                   $Pedidos = new stdClass();
//                    var_dump($result[$i]['id_pedido']);
                   $Pedidos->id = $result[$i]['id'];
                   $Pedidos->servicio = $result[$i]['descrip'];


                   $Pedidos->cliente = $result[$i]['usuario_nombre'];

//                $Pedidos->id_cliente  = $result[$i]['id_cliente'];
                   $Pedidos->localidad  = $result[$i]['localidad_desde'];
                   $Pedidos->localidad_hasta  = $result[$i]['localidad_hasta'];
                   $Pedidos->domicilio_desde  = $result[$i]['domicilio_desde'];
                   $Pedidos->domicilio_hasta  = $result[$i]['domicilio_hasta'];


                   $Pedidos->estado   = $result[$i]['estado'];
                   $Pedidos->fecha    = $result[$i]['fecha'];
                   $Pedidos->hora_ini    = $result[$i]['hora_ini'];
                   $Pedidos->hora_fin    = $result[$i]['hora_fin'];
                   $Pedidos->valor   = $result[$i]['valor'];

                   $Pedidos->bulto_cantidad   = json_decode($result[$i]['bulto_cantidad']);
                   $Pedidos->bulto_tipo   = json_decode($result[$i]['bulto_tipo']);

                   array_push($pedido, $Pedidos);
                   $respuesta =  new Respuesta("1",$pedido);
//                $respuesta["id_respuesta"] = "1";
//                $respuesta["mensaje"]["pedidos"] = $pedido;
               }

           }
           return $respuesta;}


        public function TraerPedidosxId_Cliente($dni){


            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();
            $sql2 = sprintf("SELECT id FROM usuarios WHERE dni = %d",$dni);
            $statement2 = $conexion -> prepare($sql2);
            $statement2 -> execute();
            $row2 = $statement2->fetch(PDO::FETCH_ASSOC);
            $id=$row2['id'];
//           var_dump($id);

            $sql = sprintf("SELECT pedidos.id,
                                         servicios.descrip,
                                         usuarios.usuario_nombre,
                                         localidad_desde.nombre as localidad_desde,
                                         localidad_hasta.nombre as localidad_hasta,
                                         pedidos.domicilio_desde,
                                         pedidos.domicilio_hasta,
       
                                         estado.estado,
                                         pedidos.fecha,
                                         pedidos.hora_ini,
                                         pedidos.hora_fin,
                                         pedidos.valor,
                                         bultos.bulto_cantidad,
                                         bultos.bulto_tipo
                                   FROM pedidos 
                                                INNER JOIN usuarios ON pedidos.id_usuario=usuarios.id 
                                                INNER JOIN servicios ON pedidos.id_servicio=servicios.id 
                                                iNNER JOIN localidad as localidad_desde  ON pedidos.id_localidad=localidad_desde.id
                                                inner join localidad as localidad_hasta on pedidos.id_localidad_hasta=localidad_hasta.id
                                                INNER JOIN estado ON pedidos.id_estado=estado.id 
                                                INNER JOIN bultos ON pedidos.id=bultos.id_pedido
                                   WHERE id_usuario=%d",$id);
            $result = $this->db->getData($sql);







            if(!$result) {
                $respuesta =  new Respuesta("-1",'No se ha encontrado pedidos');
//                return $respuesta;
            }else{
            $pedido=[];
                for($i=0; $i< count($result);$i++){
                $Pedidos = new stdClass();
//                    var_dump($result[$i]['id_pedido']);
                $Pedidos->id = $result[$i]['id'];
                $Pedidos->servicio = $result[$i]['descrip'];


                $Pedidos->cliente = $result[$i]['usuario_nombre'];

//                $Pedidos->id_cliente  = $result[$i]['id_cliente'];
                $Pedidos->localidad  = $result[$i]['localidad_desde'];
                    $Pedidos->localidad_hasta  = $result[$i]['localidad_hasta'];
                    $Pedidos->domicilio_desde  = $result[$i]['domicilio_desde'];
                    $Pedidos->domicilio_hasta  = $result[$i]['domicilio_hasta'];


                $Pedidos->estado   = $result[$i]['estado'];
                $Pedidos->fecha    = $result[$i]['fecha'];
                $Pedidos->hora_ini    = $result[$i]['hora_ini'];
                $Pedidos->hora_fin    = $result[$i]['hora_fin'];
                $Pedidos->valor   = $result[$i]['valor'];

                    $Pedidos->bulto_cantidad   = json_decode($result[$i]['bulto_cantidad']);
                    $Pedidos->bulto_tipo   = json_decode($result[$i]['bulto_tipo']);

                array_push($pedido, $Pedidos);
                    $respuesta =  new Respuesta("1",$pedido);
//                $respuesta["id_respuesta"] = "1";
//                $respuesta["mensaje"]["pedidos"] = $pedido;
            }

        }
            return $respuesta;}


		public function NuevoPedido($id_servicio,$id_usuario,$id_localidad,$id_localidad_hasta,$domicilio_desde,$domicilio_hasta,$id_estado,$hora_ini,$hora_fin,$valor,$cantidadb,$tipo){
			$modelo = new Conexion();
			$conexion= $modelo -> get_conexion();

			$sql="insert into pedidos (id_servicio,id_usuario,id_localidad,id_localidad_hasta,domicilio_desde,domicilio_hasta,id_estado,fecha,hora_ini,hora_fin,valor)
                                values(:id_servicio,:id_usuario,:id_localidad,:id_localidad_hasta,:domicilio_desde,:domicilio_hasta,:id_estado, NOW(),:hora_ini,:hora_fin,:valor)";
			//Utilizo statement para preparar la consulta pero no la envia a la DB todavia.
			$statement = $conexion -> prepare($sql);
			$statement -> bindParam(':id_servicio', $id_servicio);
			$statement -> bindParam(':id_usuario', $id_usuario);
			$statement -> bindParam(':id_localidad', $id_localidad);
            $statement -> bindParam(':id_localidad_hasta', $id_localidad_hasta);
            $statement -> bindParam(':domicilio_desde', $domicilio_desde);
            $statement -> bindParam(':domicilio_hasta', $domicilio_hasta);

			$statement -> bindParam(':id_estado', $id_estado);
			$statement -> bindParam(':hora_ini', $hora_ini);
			$statement -> bindParam(':hora_fin', $hora_fin);
			$statement -> bindParam(':valor', $valor);

			
			$statement -> execute();
			$id_pedido=$conexion->lastInsertId();
//			var_dump("idpedido:".$id_pedido);
//			var_dump("cantidad:".$cantidadb);
//			var_dump("tipo:".$tipo);
			$this->guardarbultos($cantidadb,$tipo,$id_pedido);


			if (!$statement) {
                $respuesta =  new Respuesta("-1","Error!, no se guardo el pedido");

            } else {
                $respuesta =  new Respuesta("1","Pedido Guardado!");

            }
            return $respuesta;
		}


		public function eliminarPedido($id){
			$rows=null;
			$modelo = new Conexion();
			$conexion= $modelo -> get_conexion();
			$sql="delete from pedidos where id=:id";
			$statement= $conexion ->prepare($sql);
			$statement -> bindParam(':id',$_POST['id'], PDO::PARAM_INT);
			$statement -> execute();
            $sql2="delete from bultos where id_pedido=:id";
            $statement2= $conexion ->prepare($sql2);

            $statement2 -> execute();
			if ((!$statement)&&(!$statement2)) {
                $respuesta["codigo"] = -1;
                $respuesta["mensaje"] = "Error, no se pudo eliminar";
            } else {
                $respuesta["codigo"] = 1;
                $respuesta["mensaje"] = "Pedido eliminado correctamente.";
            }
            return $respuesta;
		}

		public function buscarPedido($nombre_ing){
			$rows=null;
			$modelo = new Conexion();
			$conexion= $modelo -> get_conexion();
			$nombre = "%".$nombre_ing."%";
			$sql="select * from pedidos where nombre like :nombre";
			$statement = $conexion -> prepare($sql);
			$statement -> bindParam(":nombre", $nombre);
			$statement -> execute();
			//Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
			while ($result = $statement->fetch()) {
				$rows[]= $result;
			}
			return $rows;
		}


		public function cargarUnpedido($id_pedido){
			$rows=null;
			$modelo = new Conexion();
			$conexion= $modelo -> get_conexion();
			$sql="select * from pedidos where id_pedido= :id_pedido";
			$statement = $conexion -> prepare($sql);
			$statement -> bindParam(":id_pedido",$id_prod);
			$statement -> execute();
			//Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
			while ($result = $statement->fetch()) {
				$rows[]= $result;
			}
			return $rows;
		}

		public function modificarPedido($campo,$valor,$id_pedido){
			$modelo = new Conexion();
			$conexion= $modelo -> get_conexion();
			$sql="update pedidos set $campo = :valor where id_pedido = :id_pedido";
			$statement=$conexion -> prepare($sql);
			$statement -> bindParam(":valor",$valor);
			$statement -> bindParam(":id_pedido", $id_pedido);
			if (!$statement) {
				return "Error al modificar";
			}else{
				$statement -> execute();
				return "Pedido modificado correctamente";
			}
		}


        public function guardarbultos ($cantidad,$tipo,$id_pedido){
           $jsoncantidad=json_encode($cantidad);
           $jsontipo=json_encode($tipo);
//           var_dump($jsontipo);
//            var_dump($jsoncantidad);



            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();

            $sql="insert into bultos (bulto_cantidad,bulto_tipo,id_pedido) values('".$jsoncantidad."','".$jsontipo."',".$id_pedido.")";
            //Utilizo statement para preparar la consulta pero no la envia a la DB todavia.
            $statement = $conexion -> prepare($sql);
//            $statement -> bindParam(':bultos', $jsonbultos);
//            $statement -> bindParam(':id_pedido', $id_pedido);
            $statement -> execute();
            $id=$conexion->lastInsertId();

//            var_dump($statement,$id);
            if ($statement->rowCount()>0) {
//                var_dump('yeah',$id);
                $respuesta =  new Respuesta("2","bulto Guardado!");

            } else {
//                var_dump('nop',$id);
                $respuesta =  new Respuesta("-2","Error!, no se guardo el bulto");

            }

           return  $respuesta;
        }

	}




?>