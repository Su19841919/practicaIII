<?php 

include("../basesDeDatos/conexion.php");

if($_POST){

    $num_edificio = $_POST["Num_edificio"];

    $imagen = $_FILES["imagenElegida"]["name"];
    $tipo = $_FILES["imagenElegida"]["type"];
    $ruta = $_FILES["imagenElegida"]["tmp_name"];

   
    $funcionalidad = $_POST["funcionEdificio"];

    $espacioPublico =  $_POST["espacioPublico"];

    $porcentajeEdificiado = $_POST["PorcentajeEdificado"];
 
    $elementos = $_POST["ElementosEdificio"];

   
    $sql = "INSERT INTO edificio(Num_edificio,imagen,tipo, ruta, funcion, espacio_publico, porcentaje_edificado,elementos) 
    VALUES ('$num_edificio', ' $imagen', '$tipo', '$ruta', ' $funcionalidad ', '$espacioPublico', '$porcentajeEdificiado', '$elementos')";
    
    if(mysqli_query($conexion, $sql)){
      header('Location: TerminarRegistro.php ');
    }else{
        echo "Error";
    }
   



}




?>