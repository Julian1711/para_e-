<?php
include 'conecxion.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM perfil WHERE id=$id";

    if($conectar->query($sql)===TRUE){
        echo "Se elimino correctamente";
    }else{
        echo "Error al eliminar";
    }

    $conectar->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
</head>
<body>
    <h2>Delete Product</h2>
    <form method="get">
        ID: <input type="text" name="id" required><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>