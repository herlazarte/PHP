<?php
        $busqueda=$_GET["buscar"]; 
   
        try{
            //objeto que representa la conexión a la base de datos.

            $base= new PDO('mysql:host=localhost; dbname=pruebas','root','');
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");
            
            $sql="SELECT * from articulos WHERE NOMBREARTÍCULO = ? ";

            //prepare se utiliza para preparar una consulta SQL para su ejecución. 
            $resultado=$base->prepare($sql);

            //execute es un metodo que se utiliza para ejecutar la consulta preparada
            $resultado->execute(array($busqueda));

            // fetch para obtener los resultados de la consulta ejecutada.

            //PDO::FETCH_ASSOC es un parámetro que indica que se deben obtener los resultados en forma de un array asociativo.

            while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                echo "Nombre del articulo " . $registro["NOMBREARTÍCULO"] . "Fecha " . date("d-m-y",strtotime($registro["FECHA"])) . 
                "Pais de origen " . $registro["PAISDEORIGEN"] . "Precio " . $registro["PRECIO"] . "<br>";

            }
            $resultado->closeCursor();
            
        }catch(Exception $e){
            echo $e->getMessage();

        }finally{
            $base=null;
        }

        
    ?>