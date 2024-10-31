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
            <option>Incremento</option> 
            <option>Decremento</option>        
        </select>
    </p>
    <p>
    	<input type="submit" name="button" id="button" value="enviar" onClick="prueba" />
    </p>
    </form>
    <p>&nbsp;</p>
    <?php

        //usamos incremento y decremento
        
        if(isset($_POST["button"])){
            $var1=$_POST["num1"];
            $var2=$_POST["num2"];
            $op=$_POST["operacion"];

            calcular($op);

        }

        function calcular($cal){

            if(!strcmp("Incremento",$cal)){
                global $var1;
                $var1++;
                $result=$var1;

                echo "El resultado es: " . $result;



            }
            if(!strcmp("Decremento",$cal)){
                global $var1;
                $var1--;
                $result=$var1;

                echo "El resultado es: " . $result;



            }
        }
    
    
    ?>

    
</body>
</html>
