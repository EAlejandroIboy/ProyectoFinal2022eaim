<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon2.png">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body>
    <section class="form-login">
        <form name="form1" action="adidas.php" method="post">
            <h5>Login</h5>
            <input class="controls" type="text" name="usuario" placeholder="Usuario"><br>
            <input class="controls" type="password" name="pass" placeholder="Contraseña"><br><br>
            <input class="buttons" type="button" value="Ingresar" id="button" onclick="usrpas()">
            <p><a href="register.php">¿Eres Nuevo? Registrate</a></p> 
        </form>
    </section>>
    <script>
        function usrpas(){
            if (document.form1.usuario.value=='LCP' && document.form1.pass.value=='123'){window.location="adidas.php"}
            else {alert("Usuario o Contraseña incorrecta")}
            }
            document.oncontextmenu=new Function("return false");
    </script>
</body>
</html>