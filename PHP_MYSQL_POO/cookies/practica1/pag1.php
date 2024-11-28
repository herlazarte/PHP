<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(isset($_COOKIE["idioma_seleccionado"])){
        
        if($_COOKIE["idioma_seleccionado"]=="es"){
            header("location:es.php");
        }
        elseif($_COOKIE["idioma_seleccionado"]=="in"){
            header("location:in.php");
        }

    }
?>
<table>
    <tr>
        <td><h1>Elije idioma</h1></td>
    </tr>
    <tr>
        <td>
            <a href="crearCookie.php?idioma=es"><p>Español</p></a>
        </td>
        <td>
            <a href="crearCookie.php?idioma=in">Ingles</a>

        </td>
    </tr>


</table>
    
</body>
</html>