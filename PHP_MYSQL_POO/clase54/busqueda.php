<?php
        $seccion=$_GET["seccion"];
        $p_origen=$_GET["p_orig"];
   
        try{
            //objeto que representa la conexión a la base de datos.

            $base= new PDO('mysql:host=localhost; dbname=pruebas','root','');
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");
                                                        //utilizamos marcadores :SECC y :PAIG
            $sql="SELECT * from articulos WHERE SECCION = :SECC AND PAISDEORIGEN = :PAIG ";
 
            $resultado=$base->prepare($sql);

            $resultado->execute(array("SECC"=>$seccion, "PAIG"=>$p_origen));

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