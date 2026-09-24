<?php require "vista/layout/header.php"; ?>
<style>
.container {
    padding: 10px;
}

.header {
    text-align: center;
    margin-bottom: 5px;
}

.header h1 {
    display: inline-block;
    font-family: Cinzel;
    font-size: 84px;
    font-style: normal;
    font-weight: 300;
    line-height: normal;
    -webkit-background-clip: text;
    color: #000000;
}

.navback {
    margin-bottom: 40px;
    text-align: center;
}

.navback a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #6c757d; /* Color de fondo del botón */
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
}

.navback a:hover {
    background-color: #5a6268; /* Color de fondo al pasar el cursor */
    transform: translateY(-2px);
}

.navback a:active {
    background-color: #545b62; /* Color de fondo al hacer clic */
    transform: translateY(1px);
}

.cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.2s;
    width: 300px; /* Ajusta el tamaño de las cards según necesites */
    text-align: center;
}

.card:hover {
    transform: scale(1.05);
}

.card-img {
    width: 100%;
    height: 200px; /* Ajusta la altura de la imagen */
    object-fit: cover;
}

.card-content {
    padding: 15px;
}

.card-link {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    background-color: #011627; /* Color de fondo del botón */
    color: #fff;
    font-size: 10px;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
}

.card-link:hover {
    background-color: #2EC4B6; /* Color de fondo al pasar el cursor */
    transform: translateY(-2px);
}

.card-link:active {
    background-color: #004494; /* Color de fondo al hacer clic */
    transform: translateY(1px);
}

</style>

<div class="container">
    <div class="header">
        <h1><?php echo $categoria[0]->nombre?></h1>
    </div>
    <div class="navback">
        <a href="javascript:history.back()">Volver</a>
    </div>
    <div class="cards-container">
        <?php foreach($productos as $r): ?>
            <div class="card">
                <img src="public/img/producto/<?php echo $r->urlfoto ?>" alt="<?php echo $r->slug ?>" class="card-img">
                <p>USD <?php echo $r->precio?></p>
                <div class="card-content">
                    <a href="<?php echo urlsite ?>?page=productos&nombre=<?php echo $r->nombre ?>" class="card-link">
                        <?php echo $r->nombre ?>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require "vista/layout/footer.php"; ?>