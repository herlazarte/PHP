<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// % y _ en las consultas tambien vimos 
$db_host = "localhost";
$db_nombre = "pruebas";
$db_usuario = "root";
$db_contra = "";

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM ARTÍCULOS WHERE PAISDEORIGEN ='España'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {

    //usa esta funcion para acceder al valor asociativo
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo $fila['SECCIÓN'] . " ";
        echo $fila['NOMBREARTÍCULO'] . " "; // Asumiendo que el nombre
        echo $fila['PAISDEORIGEN'] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

mysqli_close($conexion);
?>
    
</body>
</html>