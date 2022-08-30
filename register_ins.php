<?php
//Este insertar es para los usuarios del Registro
include('bd.php');

if (isset($_POST['Enviar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['pass'];

    $query = "INSERT INTO usuario(nombre, apellido, usuario, contraseña) VALUES ('$nombre', '$apellido', '$usuario', '$contraseña')";

    $resultado = mysqli_query($conn, $query);
    
    if(!$resultado){
        die("Error al Guardar");
    }
    header("location:register.php");
}
?>