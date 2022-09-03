<?php
$to = "oruizmateus@gmail.com, osmer@misena.edu.co, osmer15@yahoo.es";
$subject = "Ejemplo Correo inviertaenusa.co";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: mi@cuentadeemail.com" . "\r\n" . "CC: destinatarioencopia@email.com";
 
mail($to, $subject, $message, $headers);

?>