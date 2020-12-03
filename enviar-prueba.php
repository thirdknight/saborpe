<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];

$mensaje = $_POST["mensaje"];

$body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>mensaje: " . $mensaje ;

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Phpmailer/Exception.php';
require 'PhpMailer/PHPMailer.php';
require 'PhpMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bigocarlos@googlemail.com';                     // SMTP username
    $mail->Password   = 'Guapakomm11';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('bigocarlos@googlemail.com', $nombre);
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
     // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Envio';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';

    $mail->send();
    echo '<script>
    alert("El mensaje se envio correctamente");
    window.history.go(-1);
    </script>';
} catch (Exception $e) {
    echo "Hubo un error al envia el mensaje: {$mail->ErrorInfo}";
}