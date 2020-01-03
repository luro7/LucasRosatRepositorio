<?php

Class Finanzas{
    public $id_pedido;
    public $servicio;
    public $cliente;
    public $localidad;
    public $localidad_hasta;
    public $fecha;
    public $valor;


    public function __construct($id_pedido,$servicio,$cliente,$localidad,$localidad_hasta,$fecha,$valor)
    {
        $this->servicio = sprintf($id_pedido);
        $this->servicio = sprintf($servicio);
        $this->cliente = sprintf($cliente);
        $this->localidad = sprintf($localidad);
        $this->localidad = sprintf($localidad_hasta);


        $this->fecha = sprintf($fecha);

        $this->valor = sprintf($valor);

    }

    public function getid_pedido(){
        return $this->id_pedido;
    }

    public function setid_pedido($id_pedido){
        $this->id_pedido = $id_pedido;
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




    public function getFecha(){
        return $this->fecha;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }



    public function getvalor(){
        return $this->valor;
    }

    public function setvalor($valor){
        $this->valor = $valor;
    }



    public function getJson(){
        return get_object_vars($this);
    }



}
?>