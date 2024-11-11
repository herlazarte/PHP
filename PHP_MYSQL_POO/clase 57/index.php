<?php 
 require "devuelveProductos.php";
 $productos= new DevuelvePRoductos();
 $array_productos= $productos->get_productos();
 
 $pais=$_GET["pais"];
 $array_paises=$productos->get_pais($pais);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //  foreach($array_productos as $s){
    //     echo "<table>
    //         <tr>
    //             <td>{$s['SECCION']}</td>
    //             <td>{$s['NOMBREARTICULO']}</td>
    //             <td>{$s['PAISDEORIGEN']}</td>
    //             <
    //         </tr>
    //     </table>";


    // }
    foreach($array_paises as $s){
        echo "<table>
            <tr>
                <td>{$s['SECCION']}</td>
                <td>{$s['NOMBREARTICULO']}</td>
                <td>{$s['PAISDEORIGEN']}</td>
                <
            </tr>
        </table>";
    }
    
    ?>
    
</body>
</html>