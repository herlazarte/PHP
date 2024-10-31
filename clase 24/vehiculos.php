<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         class Coche{
            var $rueda;
            var $color;
            var $motor;
            
            public function __construct(){
    
                $this->rueda=4;
                $this->color="";
                $this->motor=1600;
            }
    
            function arrancar(){
                echo "estoy arrancando";
            }
            function girar(){
                echo "estoy girandi";
            }
            function frenar(){
                echo "estoy frenando";
            }
    
            function establece_color($color_coche,$nom_coche){
                $this->color=$color_coche;
                echo "El color del ". $nom_coche  ." es :" . $this->color;

            }
    
         }
        



         //----------------------------------------------------------------------------------------------

         class Camion{
            var $rueda;
            var $color;
            var $motor;
            
            public function __construct(){
    
                $this->rueda=8;
                $this->color="";
                $this->motor=2600;
            }
    
            function arrancar(){
                echo "estoy arrancando";
            }
            function girar(){
                echo "estoy girandi";
            }
            function frenar(){
                echo "estoy frenando";
            }
    
            function establece_color($color_camion,$nom_camion){
                $this->color=$color_coche;
                echo "El color del ". $nom_coche  ." es :" . $this->color;
            }
        }    
            
    
    ?>
    
</body>
</html>