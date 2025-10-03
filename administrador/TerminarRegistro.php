<?php 

  include("../basesDeDatos/conexion.php");


  if($_POST){
    $latitud = $_POST["latitud"];

    $altitud = $_POST["altitud"];

    $calle = $_POST["calle"];
   
    $orientacion = $_POST["Orientacion"];
  
    $localidad = $_POST["localidad"];

    $edificioElegido = $_POST["edificio"];


    
    $nuevo = "INSERT INTO localizacion(Latitud, Altitud, calle, orientacion, id_localidad, id_edificio)
    VALUES (' $latitud', '$altitud', ' $calle', '$orientacion', ' $localidad', '$edificioElegido' )";
    
    if(mysqli_query($conexion,$nuevo)){
      header("Location:admin.php");
    }else{
        echo "Error";
    }
     


  }

?>


<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/fomulario.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label>Ingresar la latitud del edificio</label>
        <input type="text" name="latitud">

        <label>Ingresar la altitud del edifcio</label>
        <input type="text" name="altitud">

        <label>Ingresar calle del edificio</label>
        <input type="text" name="calle">

        <label>Orientación del edificio</label>
        <input type="text" name="Orientacion">

        <?php 
          include("conexion.php");
          $localidad = "SELECT * FROM localidad";

          $resultado = mysqli_query($conexion, $localidad);
        ?>

        <select name="localidad"> 
            <option>Elegir localidad</option>
            <?php 
              while($fila = mysqli_fetch_assoc($resultado)){
            ?>
              <option value="<?php echo $fila['id_localidada']; ?>">
                <?php echo $fila["nombreLocalidad"]; ?>
              </option>
            <?php 
              }
            ?>
        </select>

        <?php 
          include("conexion.php");
          $edificio = "SELECT * FROM edificio";

          $edificios = mysqli_query($conexion, $edificio);
        ?>

        <select name="edificio"> 
            <option>Confirmar número de edificio</option>
            <?php 
              while($edif = mysqli_fetch_assoc($edificios)){
            ?>  
              <option value="<?php echo $edif['id_edificio']; ?>">
                <?php echo $edif["Num_edificio"]; ?>
              </option>
            <?php 
              }
            ?>
        </select>


        <button>Finalizar registro</button>
    </form>
</body>
</html>