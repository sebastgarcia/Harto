<?php
    $destino= "estudio.harto@gmail.com";
    $nombre= $_POST ["Nombre"];
    $telefono= $_POST ["Telefono"];
    $correo= $_POST ["Correo"];
    $mensaje= $_POST ["Mensaje"];

    $contenido = "Nombre: " . $nombre . "\nTelefono: " . $telefono . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

    mail($destino, $contenido);
    header ("Location:contacto.html");

?>