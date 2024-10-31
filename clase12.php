<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>&nbsp;</p>

<form name="form1" method="post" action="">

	<p>
    	<label for="num1"></label>
        <input type="text" name="num1" id="num1" />
        <label for="num2"></label>
        <input type="text" name="num2" id="num2" />
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
        	<option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
            <option>Modulo</option>        
        </select>
    </p>
    <p>
    	<input type="submit" name="button" id="button" value="enviar" onClick="prueba" />
    </p>
    </form>
    <?php
        //operadores matematicos 2
        if(isset($_POST["button"])){
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            calcular($operacion);
        }
        function calcular($calculo){       
           

            if(!strcmp("Suma",$calculo)){
                global $num1;
                global $num2;
                echo "El resultado es : " . ($num1+$num2);

            }
            if(!strcmp("Resta",$calculo)){
                global $num1;
                global $num2;
                echo "El resultado es : " . ($num1-$num2);
            }
            if(!strcmp("Multiplicacion",$calculo)){
                global $num1;
                global $num2;
                echo "El resultado es : " . ($num1*$num2);
            }
            if(!strcmp("Division",$calculo)){
                global $num1;
                global $num2;
                echo "El resultado es : " . ($num1/$num2);
            }
            if(!strcmp("Modulo",$calculo)){
                global $num1;
                global $num2;
                echo "El resultado es : " . ($num1%$num2);
            }




        }
    

    ?>
    