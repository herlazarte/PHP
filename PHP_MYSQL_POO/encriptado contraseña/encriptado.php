<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pass = "123456";
    echo password_hash($pass, PASSWORD_DEFAULT);
    ?>
    
</body>
</html>