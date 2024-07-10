<?php
require_once("./config/conector.php");
class Funcion{
    private $id;
    private $nombre;
    private $descripcion;
    private $conectarse;

    public function __construct(){
        $this->conectarse = new ConectarBD();
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
        $this->nombre=$nombre; 
    }

    public function getDescripcion(){
        return $this->descripcion;
    } 

    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

    public function listAll(){
        $cadenasql = "SELECT * FROM funcion";
        $resultado = $this->conectarse->consultaConRetorno($cadenasql);
        $datos = $resultado->fetch_all();
        return $datos;
    }

    public function create(){
        $cadenasql = "INSERT INTO funcion (id, nombre, descripcion) VALUES ('$this->id', '$this->nombre', '$this->descripcion')";
        $this->conectarse->consultasinRetorno($cadenasql);
    }

}
