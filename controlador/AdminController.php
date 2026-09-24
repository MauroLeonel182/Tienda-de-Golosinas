<?php
 session_start();
 if(!isset($_SESSION['login']))
    header("location:".urlsite);

class AdminController{
    public static function index(){
        require "vista/admin/welcome.php";
    }
}