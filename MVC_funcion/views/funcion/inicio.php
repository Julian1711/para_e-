<?php
$funcionController = new FuncionController();
$listadoFuncion = $funcionController->listar();
?>

<h3>Listado de clientes</h3>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>descripcion</th>
            <a href="?views=funcion/crear"></a>
        </tr>
    </thead>
    <tbody>

        <?php for($i=0; $i < count($listadoFuncion); $i++): ?>
        <tr>
            <?php for($j=0; $j < count($listadoFuncion[$i]); $j++): ?>
            <td><?php echo $listadoFuncion[$i][$j];?></td>

            <?php endfor?>
        </tr>
        <?php endfor?>
    </tbody>
</table>