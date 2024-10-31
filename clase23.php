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
        private int $rueda;
        private string $color;
        private int $motor;
        
        //constructor : estado inicial al objeto
        public function __construct(){

            $this->rueda=4;
            $this->color="";
            $this->motor=1600;
        }

        //funcioanlidades o metodos
        function arrancar(){
            echo "estoy arrancando";
        }
        function girar(){
            echo "estoy girandi";
        }
        function frenar(){
            echo "estoy frenando";
        }

     }
    
     $renault=new Coche();//estado inicial al objeto/instancia 
     $mazda=new Coche();
     $seat=new Coche();

     $mazda->girar();
     echo $mazda->rueda;
     
    
    
    
    ?>
    
</body>
</html>