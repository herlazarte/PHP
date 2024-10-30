<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //metodo estaticos

    class Compra_Vehiculo{
        private $precio_base;
        //declaro privada y statica a la variable ayuda y la igualo a 0
        private static $ayuda=0;

        function __construct($gama){
            if($gama=="urbano"){
                $this->precio_base=10000;
            }elseif($gama=="compacto"){
                $this->precio_base=20000;
            }elseif($gama=="berlina"){
                $this->precio_base=30000;
            }
        }

        static function desc_gob(){
            self::$ayuda=4500;
        }

        function climatizador(){
            $this->precio_base+=2000;
        }

        function gps(){
            $this->precio_base+=2500;

        }

        function tapiceria_color($color){
            if($color=="blanco"){
                $this->precio_base+=3000;
            }
            elseif($color=="beige"){
                $this->precio_base+=3500;
            }
            else{
                $this->precio_base+=5000;
            }
        }

        function precio_final(){
            return $this->precio_base-self::$ayuda;
        }
    }

    //desde la clase llamo al metodo statico y este se aplica en todas los objetos despues
    Compra_Vehiculo::desc_gob();

    $compra_antonio= new Compra_Vehiculo("compacto");
    $compra_antonio->climatizador();
    $compra_antonio->tapiceria_color("blanco");
    echo $compra_antonio->precio_final() . "<br>";

    $compra_ana= new Compra_Vehiculo("compacto");
    $compra_ana->climatizador();
    $compra_ana->tapiceria_color("rojo");
    echo $compra_ana->precio_final();

    
    
    ?>
    
</body>
</html>