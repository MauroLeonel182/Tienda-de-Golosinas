<?php
require "config.php";
$page ="index";
if(isset($_GET['page']))
    $page = $_GET['page'];
switch($page){
    case 'login':
        require "controlador/LoginController.php";
        LoginController::index();
        break;
    case 'loginout':
        require "controlador/LoginController.php";
        LoginController::login();
        break;
    case 'logout': 
        require "controlador/LoginController.php";
        LoginController::logout();
        break;
    case 'admin':
        require "controlador/AdminController.php";
        AdminController::index();
        break;
    case 'carrusel':
        require "controlador/CarruselController.php";
        $controller = new CarruselController();
        if (isset($_GET['opcion'])) {
            $metodo = $_GET['opcion'];
            if (method_exists($controller, $metodo)) {
                $controller->{$metodo}();
            }
            } else {
                $controller->listar();
            }
    break;
    case 'categoria':
        require "controlador/CategoriaController.php";
        $controller = new CategoriaController();
        if (isset($_GET['opcion'])) {
            $metodo = $_GET['opcion'];
            if (method_exists($controller, $metodo)) {
                $controller->{$metodo}();
            }
            } else {
                $controller->listar();
            }
    break;
    case 'producto':
        require "controlador/ProductoController.php";
        $controller = new ProductoController();
        if (isset($_GET['opcion'])) {
            $metodo = $_GET['opcion'];
            if (method_exists($controller, $metodo)) {
                $controller->{$metodo}();
            }
            } else {
                $controller->listar();
            }
    break;
    case 'productos':
        require "controlador/FrontController.php";
        if(isset($_GET['slug']))
            FrontController::productoPorCategoria();
        else
            FrontController::categorias();
    break;
    case 'contacto':
        require "vista/front/contacto.php";
    break;


    default : 
    require "controlador/FrontController.php";
    FrontController::index();
    break;
}