<?php 
  include("../basesDeDatos/conexion.php");

  $Nombre = $_POST["Nombre"];
  $apellido = $_POST["Apellido"];
  $contrania = $_POST["contrasenia"];
  $usuario = $_POST["usuario"];
  
   $query = "INSERT INTO usuarios(Usuario, Apellido, contrasenia, rol) VALUES ('$Nombre', '$apellido', '$contrania', '$usuario')";
    if(mysqli_query($conexion, $query)){
      header("Location: ../index.html");
    }else{
        echo "Error";
    }


?>