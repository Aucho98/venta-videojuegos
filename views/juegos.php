<?php

require_once "libraries/productos.php";


$serieSeleccionada = $_GET['plat'] ?? FALSE;

$productos = catalogo_x_plataformac($serieSeleccionada);


$miTitulo = $serieSeleccionada ? ucwords(str_replace("_", " ", $serieSeleccionada)) : FALSE;

?>

<h1 class="text-center my-5 ">juegos de <?= $miTitulo ?> </h1>

<div class="row">

    <?php if (count($productos)) {   ?>
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

    <?php } else { ?>
        <div class="col-12">
            <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
        </div>
    <?php } ?>
</div>