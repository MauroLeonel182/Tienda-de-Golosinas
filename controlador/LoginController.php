<?php
session_start();
require "modelo/login.php";
class LoginController{
    public static function index(){
        if(isset($_SESSION['login']))
            header('location:'.urlsite."?page=admin");
        require "vista/front/formlogin.php";
    }
    public static function login(){
        $_modelo = new Login();
        $_email = trim($_POST['txtemail']);
        $_passw = md5(trim($_POST['txtpassword']));

        $_resultado= $_modelo->login($_email,$_passw);
        if($_resultado){
            $_SESSION['login'] = $_email;
            header('location:'.urlsite."?page=admin");
        }else{
            echo '
            <script>
                alert("Usuario inexistente, favor verificar sus datos correctamente");
                window.location = "?page=login";
            </script>
            ';
        }
    }
    public static function logout(){
        if(!isset($_SESSION['login']))
            header('location:'.urlsite);
        unset($_SESSION['login']);
        session_destroy();
        header('location:'.urlsite);
    }
}