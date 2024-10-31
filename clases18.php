<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //bucles while y do while
        
        $var1=1;
        while($var1<6){
            echo "vuelta nro :" . $var1 ."<br>";
            $var1++;
        }
        echo "fin del bucle 1";


        //entra por lo menos una vez al bucle
        $var2=6;     
        do{
            echo "vuelta nro :" . $var2 ."<br>";
            $var2++;

        }while($var2<6);

        echo "fin del bucle 2";
    
    
    
    ?>
    
</body>
</html>