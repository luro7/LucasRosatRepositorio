<?php

	Class Servicio{
		protected $id;
		protected $nombre;
		protected $importe;
		protected $tiempo;
		protected $id_agenda;	   
		
		public function __construct($id,$nombre,$importe,$tiempo,$id_agenda)
		{
			$this->id = sprintf($id);
			$this->nombre = sprintf($nombre);	    
		    $this->importe = sprintf($importe);
	    	$this->tiempo = sprintf($tiempo);
	    	$this->id_agenda = sprintf($id_agenda);
		}

		public function getId(){
				return $this->id;
			}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
				return $this->nombre;
			}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getImporte(){
			return $this->importe;
		}

		public function setImporte($importe){
			$this->importe = $importe;
		}	

		public function getTiempo(){
			return $this->tiempo;
		}

		public function setTiempo($tiempo){
			$this->tiempo = $tiempo;
		}

		public function getId_agenda(){
			return $this->id_agenda;
		}

		public function setId_agenda($id_agenda){
			$this->id_agenda = $id_agenda;
		}

		public function getJson(){
          return get_object_vars($this);
    	}

    	

	}	
?>
