<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   

        //clase 1

        // echo "hola alumnos";//comentario  /* varias lineas*/
        
        // $nombre="juan";
        // $apellido="lazarte";


        //clase 3 y 4

        //cocatenar 
        // print $nombre . $apellido;
        
        // print "el nombre y apellido es: $nombre  $apellido";

        // echo $nombre,$apellido<br>; 

        //clase 5

        // include("darDatoss.php"); // incluye archivos externos
        // require ("dardatoss.php"); // incluye y si no existe el archivo, detiene el flujo hasta aqui     

        // damedatos();
        
        // echo "despues de la fun";
        
        //clase 6 Ambito de las variables local,global,super global

        //  $nombre="agus";

        //  function dameNombre(){
            
        //     global $nombre;

        //      $nombre="EL nombre es " .$nombre;

        //  }

        //  dameNombre();

        //  echo $nombre;

        //clase 7 variables estaticas


        // function incrementoVariable(){

        //     static $contador=0;

        //     $contador++;

        //     echo $contador . "<br>" ;



        // }

        // incrementoVariable();
        // incrementoVariable();
        // incrementoVariable();
        // incrementoVariable();

        //clase 8 string, formas de declarar y comparar, 1 son iguales, 0 son iguales

        // $var1="casa";
        // $var2="CASA";

        // $resultado=strcmp($var1,$var2); //tiene en cuenta hasta lo que esta en mayuscula

        // $resultado2=strcasecmp($var1,$var2); //no tiene en cuenta las mayuscula

        // echo "El resultado es $resultado" . '<br>' ;
        // echo "El resultado es $resultado2";

    ?>
    
</body>
</html>