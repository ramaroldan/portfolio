<?php
// Verificar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $motivo = $_POST['motivo'];
    $message = $_POST['message'];

    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su e-mail es: " . $mail . " \r\n";
    $message .= "Teléfono de contacto: " . $phone . " \r\n";
    $message .= "Motivo: " . $motivo . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'ramironroldan@gmail.com';
    $asunto = 'BROASSOC WEB';

    // Intentar enviar el correo
    if (mail($para, $asunto, utf8_decode($message), $header)) {
        echo '<h3>Enviado exitosamente!</h3>';
        echo '<script type="text/javascript">setTimeout(function(){ window.location.href = "https://ramna.online/index.html"; }, 1000);</script>';
    } else {
        echo '<p>Error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.</p>';
    }
}
?>



