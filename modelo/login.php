<?php
require_once "modelo/conexion.php";
class Login{
    private $_db;
    public function __construct() {
        $this->_db = new Conexion();
    }
    public function login($email, $password){
        $this->_db->conectar();
        $consulta = $this->_db->conexion->prepare("SELECT * FROM login WHERE email = :email AND password = :password");
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':password', $password);
        $consulta->execute();
        $this->_db->desconectar();
        if($consulta->fetch(PDO::FETCH_OBJ))
            return true;
        else
            return false;
    }
    
}