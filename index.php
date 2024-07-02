<?php
require_once "libraries/funciones.php";

$secciones_validas = [
  "inicio" => [
    "titulo" => "Bienvenidos"
  ],
  "consultas" => [
    "titulo" => "Consultas"
  ],
  "nosotros" => [
    "titulo" => "Nosotros"
  ],
  "juegos" => [
    "titulo" => "Nuestro catalogo"
  ],
  "producto" => [
    "titulo" => "producto indvidual"
  ],
  "todos" => [
    "titulo" => "Nuestro catalogo"
  ],
  "alumno" => [
    "titulo" => "Programador web"
  ]

];
$seccion = isset($_GET['sec']) ? $_GET['sec'] : "inicio";

if (!array_key_exists($seccion, $secciones_validas)) {
  $vista = "404";
  $titulo = "404 - pagina no encontrada";
} else {
  $vista = $seccion;
  $titulo = $secciones_validas[$seccion]['titulo'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attack in Game</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="css/estillos.css">
  <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>

    <a href="index.php?sec=inicio" class="titulo-principal">
      <img width="50" height="50" src="img/play.jpg" alt="">
      <h1>Attack In Game</h1>

    </a>


    <nav>
      <a href="index.php?sec=inicio">inicio</a>
      <a href="index.php?sec=nosotros">nosotros</a>
      <a href="index.php?sec=todos">productos</a>
      <a href="index.php?sec=consultas">consultas</a>
    </nav>

  </header>

  <main class="container">
    <?php
    require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
    ?>
  </main>

  <footer>
    <p> Todos los derechos resevados - 2024</p>
    <div class="redes-sociales">
      <a href="#">
        <i class="fa-brands fa-square-instagram"></i>
      </a>
      <a href="#">
        <i class="fa-brands fa-square-twitter"></i>
      </a>
      <a href="#">
        <i class="fa-brands fa-facebook"></i>
      </a>
    </div>
  </footer>
























</body>

</html>