<?php // controlador/ContactoControlador.php
require "../modelo/Contacto.php";

class ContactoControlador {
    private $contacto;

    public function __construct() {
        $this->contacto = new Contacto();
    }

    public function enviarFormulario($nombre, $email, $asunto, $mensaje) {
        $this->contacto->guardarMensaje($nombre, $email, $asunto, $mensaje);
        echo '
            <script>
                alert("¡Envio exitoso! Nos pondremos en contacto contigo lo antes posible.");
                window.location = "/Candy/?page=contacto";
            </script>
        ';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registro'])) {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['subject'];
    $mensaje = $_POST['message'];

    $controlador = new ContactoControlador();
    $controlador->enviarFormulario($nombre, $email, $asunto, $mensaje);
}
?>