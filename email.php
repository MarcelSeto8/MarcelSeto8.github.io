<?php
// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$country = $_POST['country'];

// Configura los detalles del correo electrónico
$para = 'marcel.seto@enti.com';
$asunto = 'Nuevo mensaje de formulario';
$mensaje = "Nombre: $nombre\nEmail: $email\nCountry:\n$country";

// Envía el correo electrónico
mail($para, $asunto, $mensaje);

// Redirige al usuario a una página de confirmación
header(index.html);
?>