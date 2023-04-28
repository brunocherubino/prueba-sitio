<?php

if (isset($_POST['submit'])) {
  $to = "tu-correo@ejemplo.com";
  $subject = "Nuevo mensaje de " . $_POST['nombre'];
  $message = "Nombre: " . $_POST['nombre'] . "\n" .
             "Correo electrónico: " . $_POST['correo'] . "\n" .
             "Número de teléfono: " . $_POST['telefono'] . "\n\n" .
             "Mensaje:\n" . $_POST['mensaje'];
  $headers = "From: " . $_POST['correo'];

  if (mail($to, $subject, $message, $headers)) {
    echo "¡El mensaje ha sido enviado con éxito!";
  } else {
    echo "Error al enviar el mensaje. Por favor, intenta nuevamente.";
  }
}

?>
