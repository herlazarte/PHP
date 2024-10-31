<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>
<body>
<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>
    <?php
    //prioridad de operadores , buscar en la pagina
    //if, if else, elseif


        // $var1=true;
        // $var2=false;
        // $result=$var1 and $var2; //se almacena false

        // if($result==true){

        //     echo "correcto";
        // }else{

        //     echo "incorrecto";
        // }

    
        if(isset($_POST["enviando"])){
            $edad=$_POST["edad_usuario"];

            if($edad<=18){
                echo "es menor de edad";
            }else if($edad<=40){
                echo "eres joven";
            }else if($edad<=65){
                echo "eres maduro";
            }else{
                echo "cuidate";
            }



        }
    ?>

    
</body>
</html>
