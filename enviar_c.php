<?php
    $destino= "rach.rc36@hotmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subjet = $_POST["subjet"];
    $message = $_POST["message"];
    $contenido = "Nombre: " . $name . "\nCorreo: " . $email . "\nAsunto: " . $subjet . "\nMensaje: " . $message;
    mail($destino,$subjet, $contenido);
    header("Location:index.html");
?>