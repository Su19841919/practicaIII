<?php 
    include("../basesDeDatos/conexion.php");

    $nombre = $_FILES["archivoElegido"]["name"];

    $tipo = $_FILES["archivoElegido"]["type"];
    
    $ruta = $_FILES["archivoElegido"]["tmp_name"];

    $localidad = $_POST["localidad"];

    $municipio = $_POST["Municipio"];

    $departamento = $_POST["Departamento"];

    $sql = "INSERT INTO localidad(nombre, tipo, ruta,nombreLocalidad, municipio, departamento) VALUES ('$nombre', '$tipo', '$ruta','$localidad', '$municipio', '$departamento')";
    
    if(mysqli_query($conexion, $sql)){
      header('Location: admin.php');
    }else{
        echo "Error";
    }

?>