<?php 
	class Conexion{
		function get_conexion(){
			$link= 'mysql:host=localhost; dbname=jym_db';
			$usuario='root';
			$pass='';
			try {
				$conexion= new PDO($link,$usuario,$pass);
				//echo('conectado');
			} catch (Exception $e) {
				print "Error :" .$e-> getMessage() . "<br/>";
				die();
			}
			return $conexion;
		}
	}

?>