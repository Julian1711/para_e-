<?php
$funcionController = new FuncionController();
if(isset(($_POST["crear"]))){
    echo "Se creo correctamente";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$funcionController->crear($id, $nombre, $descripcion);

}


