<?php

Class Localidad{
    public $id;
    public $nombre;
    public $cant_km;
    public $id_domicilio;


    public function __construct($id,$nombre,$cant_km,$id_domicilio)
    {
        $this->id = sprintf($id);
        $this->nombre = $nombre;
        $this->cant_km = sprintf($cant_km);
        $this->id_domicilio = sprintf($id_domicilio);

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

    public function getCant_km(){
        return $this->cant_km;
    }

    public function setId_cliente($cant_km){
        $this->cant_km = $cant_km;
    }

    public function getId_domicilio(){
        return $this->id_domicilio;
    }

    public function setId_domicilio($id_domicilio){
        $this->id_domicilio = $id_domicilio;
    }



    public function getJson(){
        return get_object_vars($this);
    }



}
?>
