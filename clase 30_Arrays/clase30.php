<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // arrays: indexados(indice) y asociativos(nombre) 
        $semana=array("lunes","martes","miercoles"); //indexada
        sort($semana);
        $dias=array("l"=>"lunes","m"=>"martes","x"=>"miercoles"); //asociativa
        $dias["j"]="jueves"; //agrego un elemento al array asociativo
        
        echo $semana[1] . "<br>";
        echo $dias["l"];
        
        //comprobas si es un array
        
        if(is_array($semana)){
            echo "si";
        }
        else{
            echo"no";
        }

        ////////recoorer arrays asociativos
        
        foreach($dias as $clave => $valor){
            echo  "a $clave le corresponde $valor <br>";
        }

        ////////recoorer arrays indexado

        for($i=0;$i<count($semana);$i++){
            echo $semana[$i] . "<br>";

        }

        // ///////agregar un elemento a un arrays
        $semana[]="viernes";
        
        for($i=0;$i<count($semana);$i++){
            echo $semana[$i] . "<br>";

        }



    
    
    ?>
    
</body>
</html>