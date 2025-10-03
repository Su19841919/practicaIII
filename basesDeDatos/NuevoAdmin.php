<?php 
  include("../basesDeDatos/conexion.php");

  $Usuario = $_POST["Nombre"];
  $apellido = $_POST["Apellido"];
  $contrania = $_POST["contrasenia"];
  
   $query = "INSERT INTO usuarios(Usuario, Apellido, contrasenia) VALUES ('$Usuario', '$apellido', '$contrania')";
    if(mysqli_query($conexion, $query)){
      echo "Nuevo usuario agregado";
    }else{
        echo "Error";
    }


?>