<?php
class ConectarBD{
    private $servidor = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $basededatos = "proyecto";
    private $conexion;

    public function __construct(){
        $this->conexion = new mysqli($this->servidor,$this->usuario,$this->clave,$this->basededatos);
        if($this->conexion->connect_error){
            echo $this->conexion->connect_error;
            die();
        }
    }
    
    public function consultasinRetorno($cadenasql){
        $this->conexion->query($cadenasql);
    }

    public function consultaConRetorno($cadenasql){
        return $this->conexion->query($cadenasql);
    }

    public function desConectarse(){
        $this->conexion->close();
    }
}

