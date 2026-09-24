<?php require "vista/admin/menu.php"?>
<style>
/* Contenedor principal */
.contenedor {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px;
}

/* Estilos para la cabecera de bienvenida */
.welcome-header {
    text-align: center;
    padding: 50px 50px;
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}

.welcome-header h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.welcome-header p {
    font-size: 1.2em;
    color: #6c757d;
}

/* Estilos para la sección de características */
.features {
    padding: 50px 20px;
}

.features h2 {
    text-align: center;
    font-size: 2em;
    margin-bottom: 40px;
}

.features-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.feature-item {
    flex: 0 1 calc(33% - 20px);
    box-sizing: border-box;
    margin-bottom: 40px;
    text-align: center;
}

.feature-item img {
    width: 100%;
    max-width: 300px;
    height: auto;
    margin-bottom: 20px;
}

.feature-item h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.feature-item p {
    font-size: 1em;
    color: #6c757d;
}
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s;
    margin-bottom: 10px;
}

.btn:hover {
    background-color: #0056b3;
}

</style>
<head> 
  <link rel="stylesheet" type="text/css" href="public/css/style.css"> 
</head>
<body>
<div class="contenedor">
  <header class="welcome-header">
    <h1>Bienvenido a CandyShop modo ADMINISTRADOR</h1>
    <p>Desde este modo podras realizar cambios en la pagina web que las visualizara el cliente.</p>
    <a class="btn" href="<?php echo urlsite?>">Ver Pagina</a>
  </header>

  <section class="features">
    <h2>¿Que puedo modificar??</h2>
    <div class="features-grid">
      <div class="feature-item">
        <img src="public/img/categoria.jpg" alt="Sección de Categorias">
        <h3>Sección de Categorias</h3>
        <p>En este apartado puedes seleccionar las categorias y cargarlas al sistema.</p>
      </div>
      <div class="feature-item">
        <img src="public/img/productos.jpg" alt="Calidad garantizada">
        <h3>Agregar productos</h3>
        <p>Desde esta sección puedes cargar el listado de productos de tu tienda que estan en stock.</p>
      </div>
      <div class="feature-item">
        <img src="public/img/ofertas.jpg" alt="Entrega rápida">
        <h3>Sección Ofertas</h3>
        <p>En este apartado puedes seleccionar y agregar los productos que quieres que aparezcan en ofertas.</p>
      </div>
    </div>
</div>
</body>
<?php require "vista/layout/footer.php"; ?>