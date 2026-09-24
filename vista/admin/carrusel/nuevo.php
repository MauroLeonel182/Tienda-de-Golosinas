<?php require "vista/admin/menu.php"; ?>
<head> 
  <link rel="stylesheet" type="text/css" href="public/css/carruselnuevo.css"> 
</head>
<div id="contenedorr">
    <div id="central">
        <div id="login">
                <div class="titulo">
                </div>
            <form id="loginform" action="<?php echo urlsite ?>?page=carrusel&opcion=insertar" enctype="multipart/form-data" method="post">
                <input type="text" required name="txtdescripcion" placeholder="Descripción:">
                <input type="url" required name="txtlink" placeholder="Url:">
                <input type="number" required name="txtorden" placeholder="Orden:">
                <input type="file" required name="urlfoto">
                <input type="submit" class="btn-primary" value="GUARDAR" name="btnguardar">
            </form>
            <p class="mensaje"><?php echo (isset($_GET['msg'])) ? $_GET['msg'] : "" ?></p>
        </div>
    </div>
</div>

<?php require "vista/layout/footer.php"; ?>