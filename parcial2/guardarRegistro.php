<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $marca = $_POST["marca"];
    $oferta = $_POST["oferta"];
    $codigo = $_POST["codigo"];

    $sql = "UPDATE registrar SET nombre='".$nombre."' , precio= ".$precio.",". 
    "marca = '".$marca."', oferta = '".$oferta."', codigo ='".$codigo."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>