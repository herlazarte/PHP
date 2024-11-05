<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db_hots="localhost";
    $db_nombre="pruebas";
    $db_usuario="root";
    $db_contra="";

    $conexion=mysqli_connect($db_hots,$db_usuario,$db_contra,$db_nombre);

    $query="SELECT * FROM datospersonales";

    $resultados=mysqli_query($conexion,$query);    $fila=mysqli_fetch_row($resultados);

    echo $fila[0];
    ?>
    
</body>
</html>