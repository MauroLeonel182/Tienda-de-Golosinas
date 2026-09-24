<?php require "vista/layout/header.php"; ?>
<style>
 /* Contenedor principal */
.contenedor {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px;
}
/* Estilos para el video */
.section-2{
    width: 100%;
}
.section-2 video {
    width: 100%;
    height: 700px;
    z-index: -1;
}



/* Estilos para la cabecera de bienvenida */
.welcome-header {
    text-align: center;
    padding: 50px 50px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}

.welcome-header h1 {
    color: #ff6600;
    margin-bottom: 20px;
    text-align: center;
    font-size: 40px;
}

.welcome-header p {
    font-size: 1.2em;
    color: #6c757d;
}
.carousel-container {
    max-width: 800px;
    margin: auto;
    overflow: hidden;
    border-radius: 5px;
}

.carousel-item {
    position: relative;
}

.img-carrusel {
    width: 100%;
    display: block;
}

.titulo-ofertas h2, .descripcion-producto {
    color: #ff6600;
    text-align: center;
    margin-bottom: 20px;
    font-size: 40px;
}

.descripcion-producto {
    display: none;
}

.descripcion-producto.active {
    display: block;
}
</style>
<div class="section-2">
    <video onloadstart="this.muted=true" autoplay loop>
        <source src="public/img/Gomitas/video.mp4" type="video/mp4">
    </video>
</div>
<header class="welcome-header">
    <h1>Bienvenido a CandyShop</h1>
    <p>Tu destino definitivo para los amantes de los dulces. Sumérgete en un paraíso de golosinas y descubre la magia de CandyShop.</p>
  </header>
<div class="titulo-ofertas">
    <h2>¡Ofertas Especiales!</h2>
</div>
<div class="carousel-container">
    <?php foreach($imagenes as $index => $r): ?>
        <div class="carousel-item">
            <img src="<?php echo urlsite . "public/img/carrusel/" . $r->urlfoto ?>" class="img-carrusel" alt="Carrusel Image">
        </div>
    <?php endforeach; ?>
</div>
<?php foreach($imagenes as $index => $r): ?>
    <div id="descripcion-<?php echo $index; ?>" class="descripcion-producto">
        <p><?php echo $r->descripcion; ?></p>
    </div>
<?php endforeach; ?>
<?php require "vista/layout/footer.php"; ?>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.carousel-container').slick({
            autoplay: true, // Auto-reproducción
            autoplaySpeed: 2000, // Velocidad de auto-reproducción en milisegundos
            dots: true, // Muestra los puntos de navegación
        });

        // Mostrar la primera descripción al cargar la página
        $('#descripcion-0').addClass('active');

        // Cambiar la descripción cuando se cambia la imagen del carrusel
        $('.carousel-container').on('afterChange', function(event, slick, currentSlide){
            $('.descripcion-producto').removeClass('active');
            $('#descripcion-' + currentSlide).addClass('active');
        });
    });
</script>
