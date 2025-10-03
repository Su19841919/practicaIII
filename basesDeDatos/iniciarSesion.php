<?php 
  include("../basesDeDatos/conexion.php");
  session_start();

  $Usuario = $_POST["Nombre"];
  $apellido = $_POST["Apellido"];
  $contrasenia = $_POST["contrasenia"];

  $_SESSION['nombre'] = $Usuario; 
  $_SESSION['apellido'] = $apellido;  
  
 $query = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Apellido = '$apellido' AND contrasenia = '$contrasenia' AND rol = 'administrador'  ";
    
    if(mysqli_query($conexion, $query)){
      header("Location: ../administrador/admin.php ");
    }else{
        header("Location: ../usuario/cuentaUsuario.php");
    }


?>