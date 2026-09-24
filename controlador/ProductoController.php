<?php
session_start();
if(!isset($_SESSION['login']))
    header("location:".urlsite);
require "modelo/producto.php";

class ProductoController{
    public static function listar(){
        if(isset($_REQUEST['id']))
            $_SESSION['categoria_id'] = $_REQUEST['id'];
        $producto = new Producto();
        $datos = $producto->buscar("categoria_id =".$_SESSION['categoria_id']);
        require "vista/admin/producto/listado.php";
    }

    public static function form_insertar(){
        require "vista/admin/producto/nuevo.php";
    }

    public static function insertar(){
        $_slug = $_REQUEST['txtslug'];
        $_nombre = $_REQUEST['txtnombre'];
        $_descripcion = $_REQUEST['txtdescripcion'];
        $_urlfoto = $_FILES['urlfoto']['name'];
        $_orden = $_REQUEST['txtorden'];
        $_precio = $_REQUEST['txtprecio'];
        $_precioold = $_REQUEST['txtprecioold'];
        $_create = date("Y-m-d");
        $_update = date("Y-m-d");
        
    

        $dir_subida = 'public/img/producto/';
        $fichero_subido = $dir_subida . basename($_FILES['urlfoto']['name']);

        
        move_uploaded_file($_FILES['urlfoto']['tmp_name'], $fichero_subido);

        $producto = new producto();
        $data     = "'".$_slug."','".$_nombre."','".$_descripcion."','".$_urlfoto."','".$_orden."',0,".$_precio.",".$_precioold.",'".$_create."','".$_update."',".$_SESSION['categoria_id'];
        $accion   = $producto->insertar($data);
        if($accion)
            header('location:'.urlsite."?page=producto");
        else
            header('location:'.urlsite."?page=productol&opcion=form_insertar&msg=¡ERROR NO SE PUDO INSERTAR!");
    }

    public static function form_editar(){
        $producto = new Producto();
        $datos     = $producto->buscar("id=".$_REQUEST['id']);
        require "vista/admin/producto/editar.php";
    }

    public static function editar(){
        $_id = $_REQUEST['txtid'];
        $_slug = $_REQUEST['txtslug'];
        $_nombre = $_REQUEST['txtnombre'];
        $_descripcion = $_REQUEST['txtdescripcion'];
        $_orden = $_REQUEST['txtorden'];
        $_precio = $_REQUEST['txtprecio'];
        $_precio_old = $_REQUEST['txtprecio_old'];
        $_update = date("Y-m-d");
        $_urlfoto = "";
    
        if(!empty($_FILES['urlfoto']['name'])){
            $dir_subida = 'public/img/producto/';
            $fichero_subido = $dir_subida . basename($_FILES['urlfoto']['name']);
            move_uploaded_file($_FILES['urlfoto']['tmp_name'], $fichero_subido);
            $_urlfoto = ",urlfoto='".$_FILES['urlfoto']['name']."'";
        }

        $producto = new Producto();
        $data     = "slug='".$_slug."',nombre='".$_nombre."',descripcion='".$_descripcion."',orden=".$_orden.",precio=".$_precio.",precio_old=".$_precio_old.", updated_at='".$_update."'".$_urlfoto;
        $accion   = $producto->actualizar($data, "id=".$_id);
        if($accion)
            header('location:'.urlsite."?page=producto");
        else
            header('location:'.urlsite."?page=producto&opcion=form_insertar&msg=¡ERROR NO SE PUDO INSERTAR!");
    
    }

    public static function eliminar(){
        $producto  = new Producto();
        $datos     = $producto->eliminar("id=".$_REQUEST['id']);
        header('location:'.urlsite."?page=producto");
    }


}