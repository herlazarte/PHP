<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // getter: devolver el estado de la propiedad
    // setter: modificar la propiedad

    class Coche{

        //declaro protected asi no sea accesible desde fuera de la clase, pero los que hereden de esta clase si puedan acceder
        protected $ruedas;
    
        function __construct(){
            $this->ruedas = 4;
        }
    
        function get_ruedas(){

            return $this->ruedas;
        }

    }

    class Camiom extends Coche{
        function __construct(){
            $this->ruedas = 8;
        }

        function get_ruedas(){
            return $this->ruedas;

        }



    }

    $mazda= new Coche();
    echo "el mazda tiene " . $mazda->get_ruedas() . "ruedas <br>";
    $pegaso= new Camiom();
    echo "el pegaso tiene " . $pegaso->get_ruedas() . "ruedas <br>";
   
    
    
    
    ?>
    
</body>
</html>