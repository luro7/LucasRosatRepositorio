<?php
include_once dirname(__FILE__) . '/../conexion/conexion.php';

include_once dirname(__FILE__) . '/../model/Respuesta.php';
include_once dirname(__FILE__). '/../datos/DbFinanzas.php';
class FinanzasController
{
    private $db;

    //Constructor//
    public function __construct($basedatos, $servidor, $usuario, $paswd)
    {
        $this->db = new DbFinanzas($basedatos, $servidor, $usuario, $paswd);
    }

    public function traerfinanzas($fecha_ini,$fecha_fin, $id_localidad, $id_localidad_hasta, $id_usuario)
    {
           $fecha_f="".$fecha_fin;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        if (($fecha_ini == '')&&($fecha_fin=='') && ($id_localidad == '') && ($id_localidad_hasta == '')) {
                 $strconsulta="WHERE id_usuario=".$id_usuario;
            }elseif (($id_usuario=='') && ($id_localidad == '') && ($id_localidad_hasta == '')) {
                       $strconsulta="WHERE fecha>='".$fecha_ini."' and fecha<='".$fecha_f."'";
                   }elseif (($id_usuario=='') && ($fecha_ini == '')&&($fecha_fin=='')) {
                              $strconsulta="WHERE id_localidad=" . $id_localidad." and id_localidad_hasta=".$id_localidad_hasta;
                            }elseif(($fecha_ini == '')&&($fecha_fin=='')){
                              $strconsulta="WHERE id_usuario=".$id_usuario." and id_localidad=" . $id_localidad." and id_localidad_hasta=".$id_localidad_hasta;
                                     }elseif(($id_localidad == '') && ($id_localidad_hasta == '')){
                                                 $strconsulta="WHERE id_usuario=".$id_usuario." and fecha>='".$fecha_ini."' and fecha<='".$fecha_f."'" ;
                                              }elseif(($id_usuario=='')){
                                                        $strconsulta="WHERE fecha>='".$fecha_ini."' and fecha<='".$fecha_f."' and id_localidad=" . $id_localidad." and id_localidad_hasta=".$id_localidad_hasta;
                                                                        }

            $sql = "SELECT pedidos.id,
                               servicios.descrip as servicio,
                               usuarios.usuario_nombre,
                               localidad_desde.nombre as localidad_desde,
                               localidad_hasta.nombre as localidad_hasta,       
                               pedidos.fecha,      
                               pedidos.valor          
                       FROM pedidos 
                               INNER JOIN usuarios ON pedidos.id_usuario=usuarios.id 
                               INNER JOIN servicios ON pedidos.id_servicio=servicios.id 
                               iNNER JOIN localidad as localidad_desde  ON pedidos.id_localidad=localidad_desde.id
                               inner join localidad as localidad_hasta on pedidos.id_localidad_hasta=localidad_hasta.id
                               INNER JOIN estado ON pedidos.id_estado=estado.id 
                               INNER JOIN bultos ON pedidos.id=bultos.id_pedido
                               ".$strconsulta;


                       $sql2="select Round(sum(pedidos.valor),2) as total from pedidos ".$strconsulta;


            $result = $this->db->getData($sql);
            $result2 = $this->db->getData($sql2);

            if (!$result) {
                $respuesta = new Respuesta("-1", 'No se ha encontrado resultados');
            } else {
                $pedido = [];


                for ($i = 0; $i < count($result); $i++) {

                    $Pedidos = new stdClass();
                    $Pedidos->id = $result[$i]['id'];
                    $Pedidos->servicio = $result[$i]['servicio'];
                    $Pedidos->cliente = $result[$i]['usuario_nombre'];
                    $Pedidos->localidad = $result[$i]['localidad_desde'];
                    $Pedidos->localidad_hasta = $result[$i]['localidad_hasta'];
                    $Pedidos->fecha = $result[$i]['fecha'];
                    $Pedidos->valor = $result[$i]['valor'];

                    array_push($pedido, $Pedidos);
                    $respuesta = new Respuesta("1", $pedido);
                    $respuesta->mensaje[count($result)]=$result2[0];
                }


            }

        return $respuesta;
    }
}