<?php
require "modelo/carrusel.php";
require "modelo/producto.php";
require "modelo/categoria.php";

class FrontController{

    public static function index(){
        $c = new Carrusel();
        $p = new Producto();
        $imagenes=$c->buscar("1");
        $productos=$p->buscar("1");
        require "vista/front/main.php";
    }

    public static function categorias(){
        $c = new Categoria();
        $categorias = $c->buscar("1");
        require "vista/front/categorias.php";
    }

    public static function productoPorCategoria(){
        $c = new Categoria();
        $p = new Producto();
        $categoria=$c->buscar("slug='".$_REQUEST['slug']."'");
        $productos=$p->buscar("categoria_id=".$categoria[0]->id);
        require "vista/front/productosporcategoria.php";
    }
}