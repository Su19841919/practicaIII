<?php 
  include("../basesDeDatos/conexion.php");
  session_start();

  $Usuario = $_POST["Nombre"];
  $apellido = $_POST["Apellido"];
  $contrasenia = $_POST["contrasenia"];

  $_SESSION['nombre'] = $Usuario; 
  $_SESSION['apellido'] = $apellido;  
  
  $buscarUsuario = "SELECT * FROM usuarios WHERE contrasenia = '$contrasenia'";

  $resultado = mysqli_query($conexion, $buscarUsuario);

  $filas = mysqli_fetch_assoc($resultado);

  if($filas['rol'] == 'administrador'){
    header("Location: ../administrador/admin.php");
  }else{
    header("Location: ../usuario/cuentaUsuario.php");
  }



     
  

?>