<?php
    $correo = $_POST['email'];
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];
    $mensaje = $_POST['mensaje']
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda :: Mensaje enviado</title>

    <style>
          body {
              font-family: Arial, Helvetica, sans-serif;
              background-color: #f0f0f0;
              text-align: center;  
          }  

          h1 {
            color: violet;
          }

          h2 {
            color: blue;
          }

          p{
            color: black;
          }
    </style>
</head>
<body>
     <h1>¡Tu Consulta fue enviada con éxito!</h1>
     <h2>Resumen de la consulta</h2>
     <p>Nombre: <?= $nombre ?></p>
     <p>Email: <?= $correo ?> </p>
     <p>Telefono: <?= $numero ?></p>
     <p>Mensaje: <?= $mensaje ?></p>
     

      <img width="400px" src="../img/sonic.jpg" alt="exito imagen">




</body>
</html>