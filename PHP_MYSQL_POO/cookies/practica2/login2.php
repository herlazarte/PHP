<!DOCTYPE html>
<html lang="en">
<head>
</head>
<html>
<body>
    <?php

    $autenticado=false;

    if(isset($_POST["enviar"])){
        try{

            $base= new PDO("mysql:host=localhost; dbname=pruebas","root","");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql="SELECT *FROM usuarios WHERE usuario= :user AND contraseña= :contra";
            $resultado=$base->prepare($sql);


            $login=htmlentities(addslashes($_POST["user"]));
            $password=htmlentities(addslashes($_POST["contra"]));

            $resultado->bindValue(":user",$login);
            $resultado->bindValue(":contra",$password);


            $resultado->execute();

            $num_registros=$resultado->rowCount();

            if($num_registros!= 0){
                $autenticado=true;
                if(isset($_POST["recordar"])){
                    setcookie("nom_user",$_POST["user"],time()+86400);
                }


            }else{

                echo "Usuario o contraseña incorrecto";
            }
        }catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }

    ?>

        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    <?php

    #aqui isset comprueba si no esta definido y esta null   
        if($autenticado==false){
            if(!isset($_COOKIE["nom_user"])){
                include("formulario.html");
            }
    }
        
    ?>
<h1>Contenido
    
</h1>

</body>
</html>