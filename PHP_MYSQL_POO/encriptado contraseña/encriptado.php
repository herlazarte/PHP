<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pass="1234";

        $hash=password_hash($pass,PASSWORD_DEFAULT);
        echo "La contra encriptada es: ".$hash;

        /*comparamos la contraseña encriptada con la contraseña normal
         
        pass=1234
        hash=encriptada 
        
        */
        if(password_verify($pass,$hash)){
            echo "La contra coincide";
        }else{
            echo "La contra no coincide";
        }
    ?>
    
</body>
</html>