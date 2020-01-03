<?php

	Class Pedido{
		public $id;
		public $servicio;
		public $cliente;
		public $localidad;
		public $localidad_hasta;
		public $domicilio_desde;
		public $domicilio_hasta;

		public $estado;
		public $fecha;
		public $hora_ini;
		public $hora_fin;
		public $valor;
		public $bulto_cantidad;
		public $bulto_tipo;
		
		public function __construct($id,$servicio,$cliente,$localidad,$localidad_hasta,$domicilio_desde,$domicilio_hasta,$estado,$fecha,$hora_ini,$hora_fin,$valor,$bulto_cantidad,$bulto_tipo)
		{
			$this->id = $id;
			$this->servicio = sprintf($servicio);
	    	$this->cliente = sprintf($cliente);
		    $this->localidad = sprintf($localidad);
			$this->localidad_hasta = sprintf($localidad_hasta);
			$this->domicilio_desde = sprintf($domicilio_desde);
			$this->domicilio_hasta = sprintf($domicilio_hasta);

	    	$this->estado = sprintf($estado);
	    	$this->fecha = sprintf($fecha);
	    	$this->hora_ini = sprintf($hora_ini);
	    	$this->hora_fin = sprintf($hora_fin);
	    	$this->valor = sprintf($valor);
			$this->bulto_cantidad = sprintf($bulto_cantidad);
			$this->bulto_tipo = sprintf($bulto_tipo);
		}

		public function getId(){
				return $this->id;
			}

		public function setId($id){
			$this->id = $id;
		}

		public function getservicio(){
				return $this->servicio;
			}

		public function setservicio($servicio){
			$this->servicio = $servicio;
		}

		public function getcliente(){
			return $this->cliente;
		}

		public function setcliente($cliente){
			$this->cliente = $cliente;
		}

		public function getlocalidad(){
			return $this->localidad;
		}

		public function setlocalidad($localidad){
			$this->localidad = $localidad;
		}
		public function getlocalidad_hasta(){
			return $this->localidad_hasta;
		}

		public function setlocalidad_hasta($localidad_hasta){
			$this->localidad_hasta = $localidad_hasta;
		}
		public function getdomicilio_desde(){
			return $this->domicilio_desde;
		}

		public function setdomicilio_desde($domicilio_desde){
			$this->domicilio_desde = $domicilio_desde;
		}
		public function getdomicilio_hasta(){
			return $this->domicilio_hasta;
		}

		public function setdomicilio_hasta($domicilio_hasta){
			$this->domicilio_hasta = $domicilio_hasta;
		}



		public function getestado(){
			return $this->estado;
		}

		public function setestado($estado){
			$this->estado = $estado;
		}
		public function getFecha(){
			return $this->fecha;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function getHora_ini(){
			return $this->hora_ini;
		}

		public function setHora_ini($hora_ini){
			$this->hora_ini = $hora_ini;
		}
		public function getHora_fin(){
			return $this->hora_fin;
		}

		public function setHora_fin($hora_fin){
			$this->hora_fin = $hora_fin;
		}
		public function getvalor(){
			return $this->valor;
		}

		public function setvalor($valor){
			$this->valor = $valor;
		}

		public function getbulto_cantidad(){
			return $this->bulto_cantidad;
		}

		public function setbulto_cantidad($bulto_cantidad){
			$this->bulto_cantidad = $bulto_cantidad;
		}
		public function getbulto_tipo(){
			return $this->bulto_tipo;
		}

		public function setbulto_tipo($bulto_tipo){
			$this->bulto_tipo = $bulto_tipo;
		}

		public function getJson(){
          return get_object_vars($this);
    	}

    	

	}	
?>
