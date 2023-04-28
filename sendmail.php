<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Configurar la dirección de correo electrónico del destinatario
  $destinatario = "destinatario@ejemplo.com";

  // Obtener los valores del formulario
  $asunto = $_POST["subject"];
  $cuerpo = $_POST["body"];
  $headers = "From: " . $_POST["from"];

  // Enviar el correo electrónico
  if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Correo electrónico enviado";
  } else {
    echo "Hubo un problema al enviar el correo electrónico";
  }
}
?>
