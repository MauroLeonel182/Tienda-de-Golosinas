<?php
session_start();
if(!isset($_SESSION['login']))
    header("location:".urlsite);
require "modelo/categoria.php";

class CategoriaController{
    public static function listar(){
        $categoria = new Categoria();
        $datos = $categoria->buscar("1");
        require "vista/admin/categoria/listado.php";
    }

    public static function form_insertar(){
        require "vista/admin/categoria/nuevo.php";
    }

    public static function insertar(){

        $_slug = $_REQUEST['txtslug'];
        $_nombre = $_REQUEST['txtnombre'];
        $_descripcion = $_REQUEST['txtdescripcion'];
        $_urlfoto = $_FILES['urlfoto']['name'];
        $_orden = $_REQUEST['txtorden'];
        $_create = date("Y-m-d");
        $_update = date("Y-m-d");
        
    

        $dir_subida = 'public/img/categorias/';
        $fichero_subido = $dir_subida . basename($_FILES['urlfoto']['name']);

        
        move_uploaded_file($_FILES['urlfoto']['tmp_name'], $fichero_subido);

        $categoria = new Categoria();
        $data     = "'".$_slug."','".$_nombre."','".$_descripcion."','".$_urlfoto."','".$_orden."','".$_create."',".$_update;
        $accion   = $categoria->insertar($data);
        if($accion)
            header('location:'.urlsite."?page=categoria");
        else
            header('location:'.urlsite."?page=categorial&opcion=form_insertar&msg=¡ERROR NO SE PUDO INSERTAR!");
    }

    public static function form_editar(){
        $categoria  = new Categoria();
        $datos     = $categoria->buscar("id=".$_REQUEST['id']);
        require "vista/admin/categoria/editar.php";
    }

    public static function editar(){
        $_id = $_REQUEST['txtid'];
        $_slug = $_REQUEST['txtslug'];
        $_nombre = $_REQUEST['txtnombre'];
        $_descripcion = $_REQUEST['txtdescripcion'];
        $_orden = $_REQUEST['txtorden'];
        $_update = date("Y-m-d");
        $_urlfoto = "";
    
        if(!empty($_FILES['urlfoto']['name'])){
            $dir_subida = 'public/img/categorias/';
            $fichero_subido = $dir_subida . basename($_FILES['urlfoto']['name']);
            move_uploaded_file($_FILES['urlfoto']['tmp_name'], $fichero_subido);
            $_urlfoto = ",urlfoto='".$_FILES['urlfoto']['name']."'";
        }

        $categoria = new Categoria();
        $data     = "slug='".$_slug."',nombre='".$_nombre."',descripcion='".$_descripcion."',orden=".$_orden.", updated_at=".$_update.$_urlfoto;
        $accion   = $categoria->actualizar($data, "id=".$_id);
        if($accion)
            header('location:'.urlsite."?page=categoria");
        else
            header('location:'.urlsite."?page=categorial&opcion=form_insertar&msg=¡ERROR NO SE PUDO INSERTAR!");
    
    }

    public static function eliminar(){
        $categoria  = new Categoria();
        $datos     = $categoria->eliminar("id=".$_REQUEST['id']);
        header('location:'.urlsite."?page=categoria");
    }


}