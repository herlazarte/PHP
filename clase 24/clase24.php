<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("vehiculos.php");

    $mazda=new Coche();
    $pegazo=new Camion();

    echo "El mazda tiene: " . $mazda->rueda . "Ruedas <br>";
    echo "el pegazo tiene " . $pegazo->rueda . "Ruedas <br>";

    
    
    ?>
    
</body>
</html>