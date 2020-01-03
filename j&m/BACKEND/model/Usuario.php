<?php

	Class Usuario{
		protected $id;
		protected $usuario_nombre;
		protected $apellido;
		protected $dni;
		protected $telefono;
		protected $email;
		protected $id_domicilio;	
		protected $password;	
		protected $es_admin;	

		public function __construct($id,$usuario_nombre,$apellido,$dni,$telefono,$email,$id_domicilio,$password,$es_admin)
		{
			$this->id = sprintf($id);
			$this->usuario_nombre = sprintf($usuario_nombre);
	    	$this->apellido = sprintf($apellido);
		    $this->dni = sprintf($dni);		    
		    $this->telefono = sprintf($telefono);
		    $this->email = sprintf($email);
	    	$this->id_domicilio = sprintf($id_domicilio);
	    	$this->password = sprintf($password);
	    	$this->es_admin = sprintf($es_admin);
		}

		public function getId(){
				return $this->id;
			}

		public function setId($id){
			$this->id = $id;
		}

		public function getUsuario_nombre(){
				return $this->usuario_nombre;
			}

		public function setUsuario_nombre($usuario_nombre){
			$this->usuario_nombre = $usuario_nombre;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function setApellido($apellido){
			$this->apellido = $apellido;
		}

		public function getDni(){
			return $this->dni;
		}

		public function setDni($dni){
			$this->dni = $dni;
		}	

		public function getTelefono(){
			return $this->telefono;
		}

		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getId_domicilio(){
			return $this->id_domicilio;
		}

		public function setId_domicilio($id_domicilio){
			$this->id_domicilio = $id_domicilio;
		}

		public function getPassword(){
			return $this->password;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function getEs_admin(){
			return $this->es_admin;
		}

		public function setEs_admin($es_admin){
			$this->es_admin = $es_admin;
		}

		public function getJson(){
          return get_object_vars($this);
    	}

    	

	}	
?>
