<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexion=new mysqli("localhost","root","","pruebas");
        
        if($conexion->connect_errno){
            echo "fallo la conexion" . $conexion->connect_errno;
        }
        //
        $conexion->set_charset("utf8");

        $sql="SELECT * FROM artículos";

        $resultado=$conexion->query($sql);

        //si tenemos un error en la consulta (errores de sintaxis) nos devolvera un error 
        if($conexion->errno){
            die($conexion->errno);
        }

        while($fila=$resultado->fetch_assoc()){
            echo $fila['SECCION'] . "";
            echo $fila['NOMBREARTICULO'] . "";
            echo $fila['PAISDEORIGEN'] . "<br>";

        }

        $conexion->close();
    
    
    ?>
    
</body>
</html>