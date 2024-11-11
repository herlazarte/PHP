<?php
$id=$_POST["id"];

try{
    $conex= new PDO("mysql:host=localhost;dbname=pruebas","root","");
    $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conex->exec("SET CHARACTER SET utf8");
    $sql="DELETE FROM articulos WHERE id=:id";

    $result=$conex->prepare($sql);

    $result->execute(array(":id"=>$id));

    echo "se elimino correctamente el registro ";



}catch(Exception $e){

    die ("error " . $e->getMessage());

}finally{
    $conex=null;

}




?>