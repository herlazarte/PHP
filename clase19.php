<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //bucle for
        for($i=0; $i<10; $i++){
            echo "numero de vuelta:" .$i ."<br>";
        }

        //interruptor break
        for($i=0; $i<10; $i++){
            echo "numero de vuelta:" .$i ."<br>";
            if($i==5){
                echo "interrumpiendo en: " .$i;
                break;
            }
        }

        //continue
        for($i=20;$i>=-10;$i--){
            if($i==0){
                echo"no se puede dividir en 0" . "<br>";
                continue;
            }
            echo"9/$i = " . 9/$i . "<br>";
        }

    ?>
    
</body>
</html>