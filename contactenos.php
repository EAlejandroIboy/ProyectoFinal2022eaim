<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon2.png">
    <link rel="stylesheet" href="contactenos.css">
    <title>Contáctenos</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="navbar">
                <a href="adidas.html">Inicio</a> 
                <a href="productos.php">Productos / Servicios</a> 
                <a href="tiendas.php">Tiendas</a> 
                <a class="active" href="contactenos.php">Contáctenos</a>
                <a href="sesion.php">Ver Mensajes</a>
            </div>
        </header>
        <section class="titulo">Contáctenos</section>
        <section class="formulario">
            <div class="container">
                <form action="insertar.php" method='POST'>
                    <label for="nombre">Nombres*</label><br>
                    <input type="text" placeholder="Ingrese nombre y apellido" name="nombre" required><br>
                    <label for="telefono">Teléfono / Celular</label><br>
                    <input type="text" placeholder="Ingrese el número de telefono" name="telefono" minlength="8" maxlength="8"><br>
                    <label for="correo">Correo Electronico*</label><br>
                    <input type="text" placeholder="Ingrese correo electronico" name="correo" required><br>
                    <label for="mensaje">Mensaje*</label><br>
                    <input type="text" placeholder="Ingrese su mensaje" name="mensaje" required><br>
                    <input type="submit" value="Enviar Mensaje" name="Enviar">
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
</body>
</html>