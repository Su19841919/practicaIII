<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/fomulario.css">
    <title>Document</title>
</head>
<body>
    <form action="recibir.php" method="post" enctype="multipart/form-data">
        <label>Nombre de la localidad</label>
        <input type="text" name="localidad">

        <label>Elegir foto</label>
        <input type="file" name="archivoElegido">

        <label>Municipio</label>
        <input type="text" name="Municipio">

        <label>Departamento</label>
        <input type="text" name="Departamento">

        <button>Registrar localidad</button>
    </form>
</body>
</html>