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
      <td>Contraseña:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="contra" id="contra"></td>
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
    //switch case
    if(isset($_POST["enviando"])){
        $nom=$_POST["nombre_usuario"];
        $contra=$_POST["contra"];
        switch (true){
            case $nom=="juan" && $contra==1234:
                echo "usuario autorizado, hola juan";
                break;
            case $nom=="maria" && $contra=="1234":
                echo "usuario autorizado, hola maria";
                break;
            case $nom=="pedro" && $contra=="1234":
                echo "usuario autorizado, hola pedro";
                break;
            default:
                echo "usuario no autorizado";
        }
    }

    
    
   
    ?>

    
</body>
</html>