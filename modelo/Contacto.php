<?php
require_once "../modelo/conexion.php";

class Contacto {
    private $_db;

    public function __construct() {
        $this->_db = new Conexion();
    }

    public function guardarMensaje($nombre, $email, $asunto, $mensaje) {
        $this->_db->conectar();
        $consulta = $this->_db->conexion->prepare("INSERT INTO contacto (nombre, email, asunto, mensaje) VALUES (:nombre, :email, :asunto, :mensaje)");
        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':asunto', $asunto);
        $consulta->bindParam(':mensaje', $mensaje);
        $consulta->execute();
        $this->_db->desconectar();
    }
}
?>
