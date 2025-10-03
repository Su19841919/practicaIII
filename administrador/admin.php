<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/admin.css">
    <title>Document</title>
</head>
<body>
    <h1>Administrador: 
        <?php 
           echo $_SESSION['nombre'];
           echo " ";
           echo $_SESSION['apellido'];
        ?>
    </h1>
    <nav>
       <ul>
            <li><a href="registrarLocalidad.php">Resgistrar localidad</a></li>
            <li><a href="RegistrarEdificio.php">Resgistrar edificio</a></li>
            <li><a href="agregarUsuario.html">Agregar administrador</a></li>
            <li><a href="../basesDeDatos/cerrarSesion.php">Cerrar sesión</a></li>
       </ul>
    </nav>
    
</body>
</html>