<?php
include "conecxion.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$perfil = $_POST['perfil'];

$perfil = $conectar->real_escape_string($perfil);

$sql = "INSERT INTO perfil  (perfil) VALUES  ('$perfil')";

if($conectar->query($sql)===TRUE){
    echo "Se creo correctamente";
}else{
    echo "Error". $sql. "<br>" . $conectar->error;

    $conectar->close();
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h2>Create Product</h2>
    <form method="post">
        Perfil: <input type="text" name="perfil" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

