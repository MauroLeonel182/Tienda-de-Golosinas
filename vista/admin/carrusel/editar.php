<?php require "vista/admin/menu.php"; ?>
<style>
    #contenedorr {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
        min-width: 100vw;
        min-height: 100vh;
        width: 100%;
        height: 100%;
    }

    #central {
        max-width: 500px;
        width: 100%;
    }

    .titulo {
        font-size: 2em;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    #login {
        width: 100%;
        padding: 30px;
        background-color: #ffffff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        box-sizing: border-box;
    }

    #login input[type="text"],
    #login input[type="url"],
    #login input[type="number"],
    #login input[type="file"] {
        font-size: 1em;
        color: #333;
        display: block;
        width: 100%;
        height: 40px;
        margin-bottom: 15px;
        padding: 5px 10px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    #login .btn-primary {
        font-size: 1em;
        color: #fff;
        width: 100%;
        height: 40px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #login .btn-primary:hover {
        background-color: #0056b3;
    }

    #login .mensaje {
        color: red;
        text-align: center;
    }

    .img-fluid {
        width: 100%;
        height: auto;
        display: block;
        max-width: 200px; /* Max width of the image container */
        max-height: 200px; /* Max height of the image container */
        object-fit: cover; /* Ensure the image covers the container */
        border: 1px solid #ddd;
        border-radius: 4px;
        margin: 0 auto 15px auto; /* Center the image horizontally */
    }
</style>
</head>
<div id="contenedorr">
    <div id="central">
        <div id="login">
            <div class="titulo">Actualizar Información</div>
            <form id="loginform" action="<?php echo urlsite ?>?page=carrusel&opcion=editar" enctype="multipart/form-data" method="post">
                <input type="text" required name="txtdescripcion" value="<?php echo $datos[0]->descripcion ?>" placeholder="Descripción">
                <input type="url" required name="txtlink" value="<?php echo $datos[0]->link ?>" placeholder="Enlace">
                <input type="number" required name="txtorden" value="<?php echo $datos[0]->orden ?>" placeholder="Orden">
                <img src="public/img/carrusel/<?php echo $datos[0]->urlfoto ?>" class="img-fluid" alt="Imagen Actual">
                <input type="file" name="urlfoto">
                <input type="hidden" name="txtid" value="<?php echo $datos[0]->id ?>">
                <input type="submit" class="btn-primary" value="ACTUALIZAR" name="btnactualizar">
            </form>
            <p class="mensaje"><?php echo (isset($_GET['msg'])) ? $_GET['msg'] : "" ?></p>
        </div>
    </div>
</div>

<?php require "vista/layout/footer.php"; ?>
