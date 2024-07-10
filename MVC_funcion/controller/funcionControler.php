<?php
require_once("./models/funcion.php");

class FuncionController{
    private $funcion;

    public function __construct(){
        $this->funcion= new Funcion();
    }

    public function listar(){
        $listado = $this->funcion->listAll();
        return $listado;
    }

    public function crear($id, $nombre, $descripcion){
        $this->funcion->setId($id);
        $this->funcion->setNombre($nombre);
        $this->funcion->setDescripcion($descripcion);

        $this->funcion->create();
    }
}