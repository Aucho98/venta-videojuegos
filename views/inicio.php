<?php
/* require de productos */
require_once "libraries/productos.php";



$productos = productos_destacados();


?>


<div class="d-flex justify-content-center p-5">
    <div>
        <h1 class="text-center mb-5 fw-bold">Bienvenido a Attack in Game</h1>
        <div class="row mb-5 d-flex align-items-center">

            <div class="col-7 ">
                <h2 class="text-white text-center">Juegos digitales a un clic</h2>
                <p class="fs-4 text-center text-white">¿querés conseguir juegos a un buen precio? llegate al mejor lugar del internet.</p>
                <div class="d-flex justify-content-center">
                    <a class=" btn btn-outline-light" href="index.php?sec=todos"> VER CATALOGO</a>
                </div>

            </div>
            <div class="col-5 mb-5">
                <img class="d-block mx-auto img-fluid" src="img/portada.webp" alt="inicio">
            </div>

        </div>

    </div>

</div>


<h1 class="text-center text-white mb-4 ">Productos Destacados</h1>





<div class="row">

    <?php foreach ($productos as $juego) { ?>

        <div class="col-3 ">
            <div class="card mb-3">
                <img src="img/<?= $juego['portada'] ?>" class="img-fluid" alt="<?= $juego['titulo'] ?>" style="max-height: 350px; overflow: hidden;">
                <div class="card-body" style="height:125px; overflow: hidden;">
                    <p class="fs-6 m-0 fw-bold text-danger"></p>
                    <h5 class="card-title"><?= $juego['titulo'] ?></h5>
                    <p class="card-text"><?= recortar_palabras($juego['bajada'], 8) ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">plataforma: <?= $juego['plataforma'] ?></li>
                    <li class="list-group-item">Genero: <?= $juego['genero'] ?></li>
                    <li class="list-group-item">Publicación: <?= $juego['publicacion'] ?></li>
                </ul>
                <div class="card-body">
                    <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?= $juego['precio'] ?></p>
                    <a href="index.php?sec=producto&id=<?= $juego['id'] ?>" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                </div>

            </div>
        </div>

    <?php } ?>

</div>

<h2 class="text-center text-white mb-4 ">Categorias</h2>

<div class="row d-flex justify-content-center align-items-center p-5 ">
    <a href="index.php?sec=juegos&plat=play" class="col-4">
        <div class="card" style="width: 18rem;">
            <img class="img-fluid" src="img/play2.jfif" alt="play4" style="height: 200px;">
            <div class="card-body">
                <p class="card-text text-center">playstation 4.</p>
            </div>
        </div>
    </a>

    <a href="index.php?sec=juegos&plat=pc" class="col-4">
        <div class="card" style="width: 18rem;">
            <img class="img-fluid" src="img/pc.jpg" alt="pc" style="height: 200px;">
            <div class="card-body">
                <p class="card-text text-center">PC.</p>
            </div>
        </div>
    </a>
    <a href="index.php?sec=juegos&plat=nintendo" class="col-4">
        <div class="card" style="width: 18rem;">
            <img class="img-fluid" src="img/nintendo.jfif" alt="nintendo" style="height: 200px;">
            <div class="card-body">
                <p class="card-text text-center">Nintendo.</p>
            </div>
        </div>
    </a>
</div>


<img class="img-fluid" src="img/nav3.jpg" alt="nav">