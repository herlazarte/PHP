<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

        function ejecutaConsulta($labusqueda){
            $db_hots="localhost";
            $db_nombre="pruebas";
            $db_usuario="root";
            $db_contra="";
        
            $conexion=mysqli_connect($db_hots,$db_usuario,$db_contra);
            
            //se ejecuta cuando hay un error al conectarse a la db
            if(mysqli_connect_errno()){
                echo "fallo al conectar";
                exit();
            }
        
            //aqui especificamos la base de datos        
            mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra");
         
            $query="SELECT * FROM artículos WHERE NOMBREARTICULO='$labusqueda'";
        
            $resultados=mysqli_query($conexion,$query);
        
            while(($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))){
                echo $fila['SECCION'] . "";
                echo $fila['NOMBREARTICULO'] . "";
                echo $fila['PAISDEORIGEN'] . "<br>";
              
            }
            //cerramos la conexion a la db
            mysqli_close($conexion);
        }
            ?>
</head>
<body>
<?php
    $mibusqueda=$_GET["buscar"];
    $mipag=$_SERVER["PHP_SELF"];

    if($mibusqueda !=NULL){
        ejecutaConsulta($mibusqueda);

    }else {
        echo("<form action='" . $mipag . "' method= 'GET'>
        <label>Buscar:<input type='text' name='buscar'></label>
        <input type='submit' name='enviando' value='dale'>
        </form>");
    }



?>
    
</body>
</html>