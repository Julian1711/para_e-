<?php
include 'conecxion.php';

$id= null;
if(isset($_GET['id'])){
    $id = $_GET['$id'];
}elseif (isset($_POST['id'])){
    $id = $_POST['id'];
}

if($id !== null && $id !==''){
    $id = $conectar->real_escape_string($id);

    $sql = "SELECT * FROM perfil WHERE id = '$id'";
    $resultado = $conectar->query($sql);

    if ($resultado->num_rows > 0){
    
        while ($row = $result->fetch_assoc()) {
            echo "id: " . htmlspecialchars( $row["id"]) . " - Perfil: " . $row["perfil"] . "<br>";
        }
    } else {
        echo "No resultados";
    }
} 

$conectar->close();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Perfiles</title>
</head>
<body>
    <h2>Lista de Perfiles</h2>
</body>
</html>
