<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icon2.png">
    <link rel="stylesheet" href="mensajes.css">
    <title>Mensajes</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="navbar">
                <a href="adidas.php">Inicio</a> 
                <a href="productos.php">Productos / Servicios</a> 
                <a href="tiendas.php">Tiendas</a> 
                <a href="contactenos.php">Contáctenos</a>
                <a class="active" href="mensajes.php">Ver Mensajes</a>
            </div>
        </header>
        <section class="titulo">Mensajes Recibidos</section>
        <section class="tabla">
        <table>
          <tr>
            <th>No. Mensaje</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Mensaje</th>
            <th>Acciones</th>
          </tr>
          <?php
          include('bd.php');
          $query = "SELECT nomensaje, nombre, telefono, correo, mensaje FROM mensajes";
          $resultado = mysqli_query($conn, $query);
          while($row=mysqli_fetch_array($resultado)){
          ?>
          <tr>
            <td><?php echo $row['nomensaje']?></td>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['telefono']?></td>
            <td><?php echo $row['correo']?></td>
            <td><?php echo $row['mensaje']?></td>
            <td align="center">
              <a href="eliminar.php?id=<?php echo $row['nomensaje']?>"><img src="images/Eliminar_icon.png" width="40%"></a>
            </td>
          </tr>
          <?php } ?>
        </table>
        </section>
        <!-- Aqui esta el botón para generar un PDF con los datos -->
        <a style="text-decoration:none; color: black;" href="pdf.php">
        <button id="pdf"><img src="images/pdf.png" width="40px"></button></a>
        <footer>
            <p class="pbx"><b>PBX. 20222004</b></p>
            <p class="direccion"><b>Dirección: Liceo Canadiense</b></p>
            <p class="carne"><b>Carne: 2021-40132</b></p>
            <p class="nombre"><b>Nombre: Elder Alejandro Iboy Montenegro</b></p>
        </footer>
    </div>
</body>
</html>