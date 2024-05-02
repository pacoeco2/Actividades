<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div name="contenedor">
        <div class="formulario">
        <form action="validar.php" method="post" name="formulario">
            USERNAME <input type="text" name="Username">
            <br>
            PASSWORD <input type="password" name="Pass">
            <br>
            <input type="submit" name="submit">
        </form>
        </div>
        <div class="registro">
            <a href="http://localhost/Login/Registro.php" name="registro">Registro</a>
        </div>
    </div>
</body>
</html>