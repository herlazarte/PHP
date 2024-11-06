<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //capturamos excepciones con try y catch 
        try{
            $base= new PDO('mysql:host=localhost; dbname=pruebass','root','');
            echo "Conexion Ok";
        }catch(Exception $e){
            die('Error' . $e->getMessage());
        }finally{
            $base=null;
        }
    
    ?>
    
</body>
</html>