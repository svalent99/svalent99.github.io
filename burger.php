<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "valen.sotelo.123@gmail.com"; // Cambia esto al correo al que deseas recibir los mensajes
    $asunto = "Nuevo mensaje de contacto de Conde Burger";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Mensaje:\n$mensaje";

    mail($destinatario, $asunto, $contenido);

    // Redirige a una página de confirmación o muestra un mensaje de agradecimiento
    header("Location: confirmacion.html");
    exit;
}
?>
