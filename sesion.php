<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon2.png">
    <link rel="stylesheet" href="sesion.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="navbar">
                <a href="adidas.html">Inicio</a> 
                <a href="tiendas.php">Tiendas</a> 
                <a href="contactenos.php">Contáctenos</a>
            </div>
        </header>
        <section class="titulo">Iniciar Sesión</section>
        <section class="formulario">
            <div class="container">
                <form name="form1" action="mensajes.php" method="post">
                    <label for="nombre">Usuario</label><br>
                    <input type="text" placeholder="Ingrese su usuario" name="usuario" required><br>
                    <label for="telefono">Contraseña</label><br>
                    <input type="password" placeholder="Ingrese su contraseña" name="pass" required><br>
                    <input type="button" value="Enviar Mensaje" input class="buttons" id="button" onclick="usrpas()">
                </form>
            </div>
        </section>
        <footer>
            <p class="pbx"><b>PBX. 20222004</b></p>
            <p class="direccion"><b>Dirección: Liceo Canadiense</b></p>
            <p class="carne"><b>Carne: 2021-40132</b></p>
            <p class="nombre"><b>Nombre: Elder Alejandro Iboy Montenegro</b></p>
        </footer>
    </div>
    <script>
        function usrpas(){
            if (document.form1.usuario.value=="admin" && document.form1.pass.value=="mensajes"){window.location="mensajes.php"}
            else {alert("Usuario o Contraseña incorrecta")}
        }
            document.oncontextmenu=new Function("return false");
    </script>
</body>
</html>