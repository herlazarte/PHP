<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //funciones
    /*
    las funciones permite automatizar tareas. esto permite
    eliminar codigo repetititvo en los programas
    funciones predefinidas y propias
    
    */

    function frase_mayus($frase,$conversion=true){
        //convierte en miniscula
        $frase= strtolower($frase);
        
        //convierte primera letra en mayuscula
        if($conversion==true){
            $resultado=ucwords($frase);
        }else{
            //convierte toda la frase en mayuscula
            $resultado=strtoupper($frase);
        }
        return $resultado;

    }
    
    echo(frase_mayus("esto es un test"));





    ?>
    
</body>
</html>