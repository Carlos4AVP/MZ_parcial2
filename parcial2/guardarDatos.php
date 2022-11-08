<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $marca = $_POST["marca"];
    $oferta = $_POST["oferta"];
    $codigo = $_POST["codigo"];

    $sql = "INSERT INTO registrar (nombre, precio, marca, oferta, codigo)". 
    "VALUES ('".$nombre."',' ".$precio."', '".$marca."', '".$oferta."', '".$codigo."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>