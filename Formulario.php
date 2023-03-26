<?php
$name = $_POST("name");
$email = $_POST("email");
$titulo = $_POST("titulo");
$mensaje = $_POST("mensaje");

$mensaje = "Este mensaje fue enviado por" .nombre . ",\r\n";
$mensaje = "Su e-mail es:" .email  ",\r\n";
$mensaje = "Mensaje:".mensaje ",\r\n";
$mensaje = "Titulo:" .titulo ",\r\n";
$mensaje = "Enviado el" .date("d/m/Y", time());

$destinatario = "facupaezk@gmail.com"
$destinatario = "lucasseyahian15@gmail.com"

$asunto = "este mail fue mandado por CORSO"

mail($para, $asunto, utf8_decode(mensaje), $header)

header("location:exito.html")
?>