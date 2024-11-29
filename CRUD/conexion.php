<?php
    try{
        $base= new PDO("mysqli:hostname:localhost; dbname=pruebas","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");


    }catch(Exception $e){

        echo "Error : " . $e->getMessage();
        echo "Linea error : " . $e->getLine();

    }




?>