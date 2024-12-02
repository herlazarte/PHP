<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include("conexion.php");

if(!isset($_POST["actualizar"])){
    $id=$_GET["id"];
    $nom=$_GET["nom"];
    $ape=$_GET["ape"];
    $dir=$_GET["dir"];

}else{
    $id=$_POST["id"];
    $nom=$_POST["nom"];
    $ape=$_POST["ape"];
    $dir=$_POST["dir"];
    $sql="UPDATE datos_usuarios SET Nombre=:miNom, Apellido=:miApe, Direccion=:miDir WHERE id=:miId";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":miId"=>$id,":miNom"=>$nom,":miApe"=>$ape,":miDir"=>$dir));
    header("location:index.php");
}


?>
<h1>Editar</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <label for="nombre">Nombre</label>
    <input type="text" name="nom" id="nombre" value="<?php echo $nom?>">
    <label for="apellido">Apellido</label>
    <input type="text" name="ape" id="apellido" value="<?php echo $ape?>">
    <label for="direccion">Direccion</label>
    <input type="text" name="dir" id="direccion" value="<?php echo $dir?>">
    <input type="submit" name="actualizar" value="Actualizar">
</form>
    
</body>
</html>
