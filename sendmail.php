<?php
// Importar la clase PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar la clase PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Configurar el mensaje del correo electrónico
$asunto = "Nuevo mensaje de " . $nombre;
$cuerpo = "Nombre: " . $nombre . "\n" .
          "Correo electrónico: " . $correo . "\n" .
          "Número de teléfono: " . $telefono . "\n\n" .
          "Mensaje:\n" . $mensaje;

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurar el servidor SMTP
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Cambiar por el servidor SMTP de tu proveedor de correo electrónico
    $mail->SMTPAuth = true;
    $mail->Username = 'Brunocherubinoo01@gmail.com'; // Cambiar por tu dirección de correo electrónico
    $mail->Password = 'brunocomu01'; // Cambiar por tu contraseña
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurar los destinatarios y el mensaje
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('Brunocherubinoo01@gmail.com'); // Cambiar por la dirección de correo electrónico del destinatario
    $mail->Subject = $asunto;
    $mail->Body = $cuerpo;

    // Enviar el mensaje
    $mail->send();
    echo '¡Mensaje enviado!';
} catch (Exception $e) {
    echo 'Error al enviar el mensaje: ' . $mail->ErrorInfo;
}
?>
