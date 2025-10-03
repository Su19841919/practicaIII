<?php 
  include("../basesDeDatos/conexion.php");

  $Usuario = $_POST["Nombre"];
  $apellido = $_POST["Apellido"];
  $contrania = $_POST["contrasenia"];
  $admin = $_POST["admin"];
  
   $query = "INSERT INTO usuarios(Usuario, Apellido, contrasenia,rol) VALUES ('$Usuario', '$apellido', '$contrania', '$admin')";
    if(mysqli_query($conexion, $query)){
      header("Location: ../administrador/admin.php");
    }else{
        echo "Error";
    }


?>