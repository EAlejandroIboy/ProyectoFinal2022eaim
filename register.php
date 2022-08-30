<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon2.png">
    <link rel="stylesheet" href="register.css">
    <title>Registro</title>
</head>
<body>
    <section class="form-login">
        <form name="form1" action="register_ins.php" method='POST'>
            <h5>Registrarse</h5>
            <input class="controls" type="text" name="nombre" placeholder="Nombre"><br>
            <input class="controls" type="text" name="apellido" placeholder="Apellido"><br>
            <input class="controls" type="text" name="usuario" placeholder="Usuario"><br>
            <input class="controls" type="password" name="pass" placeholder="Contraseña"><br><br>
            <input class="buttons" type="submit" value="Guardar" name="Enviar">
            <p><a href="index.php">¿Ya tienes cuenta? Inicia Sesión</a></p> 
        </form>
    </section>
</body>
</html>