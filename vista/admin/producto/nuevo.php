<?php require "vista/admin/menu.php"; ?>
<head> 
  <link rel="stylesheet" type="text/css" href="public/css/carruselnuevo.css"> 
</head>
<div id="contenedorr">
    <div id="central">
        <div id="login">
                <div class="titulo">
                </div>
            <form id="loginform" action="<?php echo urlsite ?>?page=producto&opcion=insertar" enctype="multipart/form-data" method="post">
                <input type="text" required name="txtslug" placeholder="Slug:">
                <input type="text" required name="txtnombre" placeholder="Nombre:">
                <input type="text" required name="txtdescripcion" placeholder="Descripción:">
                <input type="number" required name="txtorden" placeholder="Orden:">
                <input type="file" required name="urlfoto">
                <input type="text" required name="txtprecio" placeholder="Precio:">
                <input type="text" required name="txtprecioold" placeholder="Precio Anterior:">
                <input type="submit" class="btn-primary" value="GUARDAR" name="btnguardar">
            </form>
            <p class="mensaje"><?php echo (isset($_GET['msg'])) ? $_GET['msg'] : "" ?></p>
        </div>
    </div>
</div>

<?php require "vista/layout/footer.php"; ?>