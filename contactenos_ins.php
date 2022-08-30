<?php
//Este insertar es para los correos de Contactenos
include('bd.php');

if (isset($_POST['Enviar'])) {
    $nomensaje = $_POST['nomensaje'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $query = "INSERT INTO mensajes(nomensaje, nombre, telefono, correo, mensaje) VALUES ('$nomensaje', '$nombre', '$telefono', '$correo', '$mensaje')";

    $resultado = mysqli_query($conn, $query);
    
    if(!$resultado){
        die("Error al Guardar");
    }
    header("location:contactenos.php");
}
?>