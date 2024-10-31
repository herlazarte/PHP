<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        /*
        -constanstes
        -define("nombre_constanste"," valor"); 
        -debe ir en MAYUSCULA
        -no lleva $
        -el ambito de la constanste e global
        -solo almacena valores escalares, que no se puede dividir en partes mas pequeñas
        -case_insensitive= si queres que sea sensible a las mayusculas y minisculas
        -hay constanste predefinidas

        */

        define("AUTOR","Juan");

        echo "AUTOR";
        echo "El nombre es: " . AUTOR . "<br>";
        echo "Esta linea es la : " . __LINE__ . "<br>" ;    
        echo "El archivo es : " . __FILE__ . "<br>" ;

        
    
    
    
    ?>
    
</body>
</html>