<?php
require_once("./config/enrutador.php");
require_once("./controller/funcionControler.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <main class="container">
        <?php
        $enrutador = new Enrutador();
        if(isset($_GET["views"])){
            $enrutador->Cargarview($_GET["views"]);
        }else{
            echo "carga";
            ?>
            <a href="index.php?views=funcion/inicio">inicio</a>
            <?php
        }
       ?> 
    </main>
</body>
</html>

