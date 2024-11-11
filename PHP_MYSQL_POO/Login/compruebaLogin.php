<?php
try{

    $base= new PDO("mysql:host=localhost; dbname=pruebas","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="SELECT *FROM usuarios WHERE usuario= :user AND contraseña= :contra";
    $resultado=$base->prepare($sql);
    /*
    htmlentities() es una función que convierte los caracteres especiales en entidades HTML,
    lo que significa que los caracteres como <, >, &, etc. se convierten en sus equivalentes HTML, 
    como &lt;, &gt;, &amp;, etc.

    addslashes() es una función que agrega barras invertidas (\) antes de los caracteres especiales,
    como comillas dobles (") y comillas simples (').

    htmlentities() se utiliza para proteger contra ataques de inyección de código malicioso 
    en el lado del cliente (en el navegador), 

    addslashes() se utiliza para proteger contra ataques de inyección de código malicioso 
    en el lado del servidor (en la base de datos).

    */


    $login=htmlentities(addslashes($_POST["user"]));
    $password=htmlentities(addslashes($_POST["contra"]));

    //bindValue() vincula un valor a un parámetro de una consulta SQL
    $resultado->bindValue(":user",$login);
    $resultado->bindValue(":contra",$password);


    $resultado->execute();

    $num_registros=$resultado->rowCount();

    if($num_registros != 0){
        echo "Ingresaste";

    }else{
        // Establecer la ubicación de la respuesta
        header("location:login.php");
    }
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}

?>