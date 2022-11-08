<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>

<body class="fondo">
    <?php
        include 'conexion.php';
        include 'menu.php';

    ?>
        <div class="container">
        <div class="row">
        <div class="col-12">
    <?php
        if($_GET["termino"] == ""){
    ?>
        <br>
        <div class="alert alert-danger">No existen registros con ese término de búsqueda</div><br><br>
        <a href="consultarDatos.php">Regresar</a>
    <?php } else { 
        $sql = "SELECT * from registrar WHERE nombre LIKE '%" . $_GET["termino"] . "%'";
        $producto = $conexion->query($sql);
        if($producto->num_rows == 0) {
            echo "<br><div class='alert alert-danger'>No existen registros con ese término de búsqueda</div><br><br>";
        } else {
    ?>
    <br><br><br><br>
    <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Marca</th>
                            <th>Oferta</th>
                            <th>Código</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
            <tbody>
                <?php while($row = $producto->fetch_assoc()) { ?>
                    <tr class="bg-light">
                        <td class="bg-white text-dark"><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["precio"]; ?></td>
                        <td><?php echo $row["marca"]; ?></td>
                        <td><?php echo $row["oferta"]; ?></td>
                        <td><?php echo $row["codigo"]; ?></td>

                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-info">Editar</a>
                                        <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-danger">Eliminar</a>                            
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } } ?>
                </div></div></div>
    <script src="js/bootstrap.js"></script>
</body>
</html>