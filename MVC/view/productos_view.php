<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table{
        border-collapse: collapse;
    }
    td{
        border: 1px solid black;
    }
</style>

</head>
<body>
<table>
    <tr>
        <td>Nombre</td>
    </tr>

    <?php
        foreach($matrizProductos as $registro){
            echo "<tr><td>" . $registro["NOMBREARTÍCULO"]."</td></tr>";
        }
    
    
    ?>
</table>
    
</body>
</html>