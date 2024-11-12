<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
//isset() se utiliza para verificar si una variable está definida y no es null.
if(!isset($_SESSION["usuario"])){
    header("location:login.php");

}
?>    

<?php
    echo "Hola " . $_SESSION["usuario"] . "<br>";
?>

<p>Estas registrado</p>

<p><a href="cerrarSesion.php">Cerrar Sesion</a></p>

    
</body>
</html>