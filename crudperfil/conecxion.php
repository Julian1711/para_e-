<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$dbnombre = "proyecto";

$conectar = new mysqli($servidor, $usuario, $password, $dbnombre);

if ($conectar->connect_error){
    die('Error al conecta'. $conectar->connect_error);
};
 
