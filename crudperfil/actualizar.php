<?php
include 'conecxion.php';
if($_SERVER["REQUEST_METHOD"] =="POST"){

$id = $_POST['id'];
$perfil = $_POST['perfil'];

$sql = "UPDATE perfil SET perfil= '$perfil' WHERE id = '$id'";

if($conectar->query($sql)=== TRUE){
    echo"Se actualizo correctamente";
}else{
    echo "Error";
}
}
$conectar->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
</head>
<body>
    <h2>Update Product</h2>
    <form method="post">
        ID: <input type="text" name="id" value="<?php echo ''; ?>" required><br>
        Perfil: <input type="text" name="perfil" value="<?php echo''; ?>" required><br>
        <input type="submit" value="actualizar">
    </form>
</body>
</html>