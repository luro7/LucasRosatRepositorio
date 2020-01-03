<?php

include_once dirname(__FILE__). '/../conexion/conexion.php';
include_once dirname(__FILE__). '/../model/Respuesta.php';

    class UsuariosController{

        public function loginUsuario($telefono,$password){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "SELECT * FROM usuarios where telefono=:telefono and password=:password";

            $statement = $conexion->prepare($sql);

            $statement->bindParam(':telefono', $telefono);
            $statement->bindParam(':password', $password);
            $statement->execute();


            //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."

            if (($statement->rowCount())>0) {
                session_start();
                while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $respuesta =  new Respuesta(1,$result);

                    $_SESSION['telefono'] = $telefono;
                    $_SESSION['user_esadmin'] =$result['es_admin'];
                    $_SESSION['nombre'] =$result['usuario_nombre'];
                    $_SESSION['dni'] =$result['dni'];
                    $_SESSION['user_id'] =$result['id'];


                }
            }else{
                $respuesta =  new Respuesta(-1,'Usuario y/o contraseña incorrecta.');
            }
            return $respuesta;
        }

        public function registrarUsuario($usuario_nombre,$apellido,$dni,$telefono,$email,$id_domicilio,$password,$es_admin){
                  
                   $rta2[0]="Usuario registrado correctamente.";
                $modelo = new Conexion();
                $conexion = $modelo->get_conexion();

                 $sql2 = "SELECT telefono FROM `usuarios` WHERE telefono=".$telefono;
                 $statement2 = $conexion->prepare($sql2);
                   $statement2->execute();

            if (($statement2->rowCount())==0){

                $sql = "INSERT into usuarios (usuario_nombre,apellido,dni,telefono,email,id_domicilio,password,es_admin) VALUES (:usuario_nombre, :apellido, :dni, :telefono, :email, :id_domicilio, :password, :es_admin)";
                //Utilizo statement para preparar la consulta pero no la envia a la DB todavia.
                
                $statement = $conexion->prepare($sql);
                $statement->bindParam(':usuario_nombre', $usuario_nombre);
                $statement->bindParam(':apellido', $apellido);
                $statement->bindParam(':dni', $dni);
                $statement->bindParam(':telefono', $telefono);
                $statement->bindParam(':email', $email);
                $statement->bindParam(':id_domicilio', $id_domicilio);
                $statement->bindParam(':password', $password);
                $statement->bindParam(':es_admin', $es_admin);
                //$statement->execute();
                $rta = $statement->execute();
                $sql3="SELECT LAST_INSERT_ID();";
                $statement3 = $conexion->prepare($sql3);
                $statement3->execute();
                $idreg = $statement3->fetch(PDO::FETCH_ASSOC);
                
               
                
            if (!$rta) {
                $respuesta =  new Respuesta(-1,"Error, no se puede registrar el Usuario.");
                

            } else {
                 
                $respuesta =  new Respuesta(1,$rta2);
                array_push($respuesta->mensaje,$idreg);
                
               
                

            }}else{$respuesta =  new Respuesta(-3,"Error!, El telefono ya ha sido registrado.");}
            return $respuesta;
        }

        public function traerUserxid($id){
            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();
            $sql="SELECT * from usuarios where id=".$id;
            $statement = $conexion -> prepare($sql);
//            var_dump($statement);
            $statement -> execute();

            if (($statement->rowCount())>0) {
                while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $respuesta =  new Respuesta("1",$result);                }
            }else{
                $respuesta =  new Respuesta("-1","No se encontro el cliente");
            }
            return $respuesta;
        }

        public function obtenerUsuarios(){
            $rows=null;
            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();
            $sql="SELECT * from usuarios";
            $statement = $conexion -> prepare($sql);
            $statement -> execute();
            //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
            if (($statement->rowCount())>0) {
                while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $rta["codigo"] = 1;
                    $rta["mensaje"][] = $result;
                }
            }else{
                $rta["codigo"] = -1;
                $rta["mensaje"]= "No se encontraron clientes";
            }
            return $rta;
        }

        public function buscarUsuario_dni($dni){
            $rows=null;
            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();
            $sql="SELECT * from usuarios INNER JOIN domicilio ON usuarios.id_domicilio=domicilio.id WHERE usuarios.dni=:dni";
//            var_dump($sql);
            $statement = $conexion -> prepare($sql);
            $statement -> bindParam(':dni',$dni);
            $statement -> execute();
            $respuesta=false;
            //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
            if(($statement->rowCount())>0){
                while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $respuesta =  new Respuesta(1,$result);

                }
            }
            if($respuesta==false){
                $respuesta =  new Respuesta(-1,'El cliente no se encuentra registrado.');

            }
            return $respuesta;
        }

        public function buscarUserPorTel($telefono){
            $rows=null;
            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();
            $sql="SELECT * from usuarios WHERE usuarios.telefono=:telefono";
            $statement = $conexion -> prepare($sql);
            $statement -> bindParam(':telefono',$telefono);
            $statement -> execute();
            //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
            $respuesta=false;
            //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
            if(($statement->rowCount())>0){
                while ($result = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $respuesta =  new Respuesta("1",$result);

                }
            }
            if($respuesta==false){
                $respuesta =  new Respuesta("-1",'No se encontraron resultados.');

            }
            return $respuesta;
        }



        public function editaruser($id,$usuario_nombre,$apellido,$dni,$telefono,$email,$domicilio){
            $rows=null;
            $modelo = new Conexion();
            $conexion= $modelo -> get_conexion();
            $sql="UPDATE usuarios
                  inner join domicilio on usuarios.id_domicilio=domicilio.id
                   SET usuario_nombre = '".$usuario_nombre."',
                                        apellido= '".$apellido."',
                                         dni='".$dni."',
                                         telefono='".$telefono."',
                                         email='".$email."',
                                         domicilio.nombre='".$domicilio."'
                                         WHERE usuarios.id=".$id;

            $statement = $conexion -> prepare($sql);
            $statement -> bindParam(':usuario_nombre',$usuario_nombre);
            $statement -> bindParam(':apellido',$apellido);
            $statement -> bindParam(':dni',$dni);
            $statement -> bindParam(':telefono',$telefono);
            $statement -> bindParam(':email',$email);
            $statement -> bindParam(':nombre',$domicilio);
            $statement -> execute();


            //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
            $respuesta=false;
            //Con la funcion "fetch()" se guardan en la variable el resultado de la consulta."
            if(($statement->rowCount())>0){

                    $respuesta =  new Respuesta("1",'Perfil Actualizado');

                }

            if($respuesta==false){
                $respuesta =  new Respuesta("-1",'Error!.No se ha actualizado su perfil.');

            }
            return $respuesta;
        }

    }
?>