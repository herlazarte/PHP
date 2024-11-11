<?php
$seccion=$_POST["seccion"];
$nom_articulo=$_POST["nom_arti"];
$fecha=$_POST["fecha"];
$pais=$_POST["pais_orig"];
$precio=$_POST["precio"];

try{
    $conex= new PDO("mysql:host=localhost;dbname=pruebas","root","");
    $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conex->exec("SET CHARACTER SET utf8");
    $sql="INSERT INTO articulos (SECCION,NOMBREARTÍCULO,FECHA,PAISDEORIGEN,PRECIO) VALUES (:seccion,:nomarticulo,:fecha,:pais,:precio)";

    $result=$conex->prepare($sql);

    $result->execute(array(":seccion"=>$seccion,":nomarticulo"=>$nom_articulo,":fecha"=>$fecha,":pais"=>$pais,":precio"=>$precio));

    echo "se insertaron correctamente los registros ";



}catch(Exception $e){

    die ("error " . $e->getMessage());

}finally{
    $conex=null;

}




?>