<?php 

    $conexion = mysqli_connect("localhost", "root", "", "edificios");
   
    if(!$conexion){
        echo "Error";
    }

?>