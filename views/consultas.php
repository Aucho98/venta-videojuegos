<h2 class="text-center text-warning">Formulario de Contacto</h2>


<form style="height: 70vh;" action="datos/procesar_datos.php" method="POST" class="col-6 mx-auto">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Email:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Nombre:</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Telefono:</label>
    <input type="number" name="numero" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label class="form-label text-white" for="mensaje">Mensaje:</label>
    <textarea class="form-control" name="mensaje" id="mensaje"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>