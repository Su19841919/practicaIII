<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/fomulario.css">
    <title>Document</title>
</head>
<body>
    <form action="nuevoEdificio.php" method="post" enctype="multipart/form-data">
        <label>Número de edificio</label>
        <input type="number" name="Num_edificio">

        <label>Elegir foto</label>
        <input type="file" name="imagenElegida">

        <label>Escribir su función</label>
        <input type="text" name="funcionEdificio">

        <label>Espacio público</label>
        <input type="text" name="espacioPublico">

        <label>Porcentaje edificado</label>
        <input type="text" name="PorcentajeEdificado">

        <label>Elementos</label>
        <textarea name="ElementosEdificio">
            Escribir los elementos del edificio
        </textarea>
    
        </select>
        <button>Siguiente</button>
    </form>
</body>
</html>