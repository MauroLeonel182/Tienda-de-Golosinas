<?php
session_start();
if(!isset($_SESSION['login']))
    header("location:".urlsite);
require "modelo/carrusel.php";

class CarruselController{
    public static function listar(){
        $carrusel = new Carrusel();
        $datos = $carrusel->buscar("1");
        require "vista/admin/carrusel/listado.php";
    }
    
    public static function form_insertar(){
        require "vista/admin/carrusel/nuevo.php";

    }

    public static function insertar(){
        $_descripcion = $_REQUEST['txtdescripcion'];
        $_link = $_REQUEST['txtlink'];
        $_orden = $_REQUEST['txtorden'];
        $_urlfoto = $_FILES['urlfoto']['name'];
    

        $dir_subida = 'public/img/carrusel/';
        $fichero_subido = $dir_subida . basename($_FILES['urlfoto']['name']);

        
        move_uploaded_file($_FILES['urlfoto']['tmp_name'], $fichero_subido);

        $carrusel = new Carrusel();
        $data     = "'".$_descripcion."','".$_urlfoto."','".$_link."',".$_orden;
        $accion   = $carrusel->insertar($data);
        if($accion)
            header('location:'.urlsite."?page=carrusel");
        else
            header('location:'.urlsite."?page=carrusel&opcion=form_insertar&msg=¡ERROR NO SE PUDO INSERTAR!");
    }

    public static function form_editar(){
        $carrusel  = new Carrusel();
        $datos     = $carrusel->buscar("id=".$_REQUEST['id']);
        require "vista/admin/carrusel/editar.php";
    }

    public static function editar(){
        $_id = $_REQUEST['txtid'];
        $_descripcion = $_REQUEST['txtdescripcion'];
        $_link = $_REQUEST['txtlink'];
        $_orden = $_REQUEST['txtorden'];
        $_urlfoto = "";
    
        if(isset($_FILES['urlfoto'])){
            $dir_subida = 'public/img/carrusel/';
            $fichero_subido = $dir_subida . basename($_FILES['urlfoto']['name']);
            move_uploaded_file($_FILES['urlfoto']['tmp_name'], $fichero_subido);
            $_urlfoto = ",urlfoto='".$_FILES['urlfoto']['name']."'";
        }

        $carrusel = new Carrusel();
        $data     = "descripcion='".$_descripcion."',link='".$_link."',orden=".$_orden.$_urlfoto;
        $accion   = $carrusel->actualizar($data,"id=".$_id);
        if($accion)
            header('location:'.urlsite."?page=carrusel");
        else
            header('location:'.urlsite."?page=carrusel&opcion=form_editar&msg=¡ERROR no se pudo actualizar!");
    
    }

    public static function eliminar(){
        $carrusel  = new Carrusel();
        $datos     = $carrusel->eliminar("id=".$_REQUEST['id']);
        header('location:'.urlsite."?page=carrusel");
    }

}