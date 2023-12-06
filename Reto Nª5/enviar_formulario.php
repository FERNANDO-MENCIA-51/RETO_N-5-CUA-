<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "luis.mencia@vallegrande.edu.pe"; 
    $asunto = "Nuevo mensaje desde el formulario de contacto";

    $mensajeCorreo = "Nombre: $nombre \n";
    $mensajeCorreo .= "Correo: $correo \n";
    $mensajeCorreo .= "Mensaje: $mensaje";


    mail($destinatario, $asunto, $mensajeCorreo);

    header("Location: gracias.html");
    exit; 
}
?>
