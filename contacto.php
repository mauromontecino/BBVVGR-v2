<?php

$destino = "mauromontecino2@gmail.com";
//Esto es al correo que se enviarÃ¡ el mensaje

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre: " . $nombre . "\n" . "Email: " . $email . "\n". "Mensaje :" . $mensaje;
mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: pages/contacto.html');
