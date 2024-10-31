<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $alimento=array("fruta"=>array("tropical"=>"kiwi",
                                        "citrico"=>"naranja",
                                        "otros"=>"manzana"),
                        "leche"=>array("animal"=>"vaca",
                                        "vegetal"=>"coco"),
                        "carne"=>array("vacuno"=>"lomo",
                                        "porcino"=>"pata"));

        // echo $alimento["carne"]["vacuno"] . "<br>";

        foreach($alimento as $clave_alim=>$alim){
             echo "$clave_alim: <br>";
            
             //mientras haya elemento en la lista, por cada alim lo desglole en su clave y valor
            foreach($alim as $clave => $valor){
                echo "$clave = $valor<br>";
            } 
             echo "<br>";
        }

        echo var_dump($alimento);
    ?>
    
</body>
</html>