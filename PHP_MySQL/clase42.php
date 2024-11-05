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
        
            $conexion=mysqli_connect($db_hots,$db_usuario,$db_contra);
            
            //se ejecuta cuando hay un error al conectarse a la db
            if(mysqli_connect_errno()){
                echo "fallo al conectar";
                exit();
            }
        
            //aqui especificamos la base de datos        
            mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra");
            mysqli_set_charset($conexion, "utf8");
         
            $query="INSERT INTO artículos (SECCION,NOMBREARTICULO) VALUES ('DEPORTE','PELOTA DE TENIS' ) ";
        
            $resultados=mysqli_query($conexion,$query);
            

            //cerramos la conexion a la db
            mysqli_close($conexion);
            ?>


    
</body>
</html>