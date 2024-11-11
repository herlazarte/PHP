<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="compruebaLogin.php" method="post">
        <table>
            <tr>
                <td>Login</td>
                <td><input type="text" name="login" id="login"></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="text" name="contra" id="contra"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="Login"></td>
            </tr>
        </table>

    </form>

    
</body>
</html>