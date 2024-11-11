<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertar.php" method="post"">
    <table>
        <tr>
            <td>Seccion: <input type="text" name="seccion" id="seccion"></td>
        </tr>
        <tr>
            <td>Nombre del articulo <input type="text" name="nom_arti" id="nom_arti"></td> 
        </tr>
        <tr>
            <td>Fecha <input type="text" name="fecha" id="fecha"> </td>
        </tr>
        <tr>
            <td>Pais de origen <input type="text" name="pais_orig" id="pais_orig"></td>
        </tr>
        <tr>
            <td>Precio <input type="text" name="precio" id="precio"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="enviando" value="enviar"></td>
        </tr>
        
    </table>
    
    </form>
    
</body>
</html>