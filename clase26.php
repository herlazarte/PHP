<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* MODULARIZACION: dividir el codigo en modulo/partes (clases) 
       ENCAPSULAMIENTO: 
        modificadores de acceso:
            public:accesible desde cualquier parte
            private:accesible desde la clase
            protected: accesible desde la propia clase y clases heredadas
    
    
    */
    class Coche{
        //declaro privada la variable rueda
        private $rueda;
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


     class Camion extends Coche{
    
        
        public function __construct(){

            $this->rueda=8;
            $this->color="";
            $this->motor=2600;
        }

        function arrancar(){
            parent::arrancar();
            echo "camion arrancas";
        }

    }
    //trato de accceder a la variable privada
    $pegaso=new Coche();
    $pegaso->rueda=7;
    echo "el pegaso tien " . $pegaso->rueda . "ruedas";   
        
    
    ?>
    
</body>
</html>