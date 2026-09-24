<?php require "vista/layout/header.php"; ?>
<style>

.cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
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
    font-size: 18px;
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
<div class="cards-container">
    <?php foreach($categorias as $r): ?>
        <div class="card">
            <img src="public/img/categorias/<?php echo $r->urlfoto ?>" alt="<?php echo $r->slug?>" class="card-img">
            <div class="card-content">
                <a href="<?php echo urlsite ?>?page=productos&slug=<?php echo $r->slug ?>" class="card-link">
                    <?php echo $r->slug ?>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php require "vista/layout/footer.php"; ?>
