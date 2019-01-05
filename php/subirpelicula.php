<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../imagenes/ico.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<title>Subir pelicula</title>
</head>
<body>
	<?php 
		include "menu.php";//incluir el menu de navegacion
	 ?>
	  <div  class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12 col-xm-12">
					<form method="POST" action="insertarDatos.php"><!-- Enviar a accion insertarDatos -->
					  <fieldset>
					    <h2 class="block titulo hidden-sm-down"><a class="brillo" href="#">Datos de la nueva pelicula</a></h2>
					    <h2 class="block titulo2 hidden-md-up"><a class="brillo" href="#">Datos de la nueva pelicula</a></h2>
					    <div class="form-group">
					      <label for="exampleInputEmail1">Nombre de la pelicula</label>
					      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la pelicula" name="nombre" autocomplete="off" required maxlength="120" pattern="[A-Za-z0-9 ,.]+" title="Letras y números. Tamaño máximo: 120">
					      <small id="emailHelp" class="form-text text-muted">Debe colocar el nombre de la pelicula por la que se llevara a cabo la busqueda.</small>
					    </div>
					    <div class="form-group">
					      <label for="exampleSelect1">Categoria</label>
					      <select class="form-control" id="exampleSelect1" name="Categoria" required>
					      	 <option selected disabled>Seleccione una categoria</option>
					        <option value="1">Accion</option>
					        <option value="2">Terror</option>
					        <option value="3">Ciencia ficcion</option>
					        <option value="4">Animacion</option>
					        <option value="5">Comedia</option>
					        <option value="6">Drama</option>
					        <option value="7">Documentales</option>
					        <option value="8">Fantasia</option>
					        <option value="9">Suspenso</option>
					        <option value="10">Misterio</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="exampleTextarea">Sipnosis</label>
					      <textarea pattern="[A-Za-z0-9]+" title="Letras y números. Tamaño máximo: 1000" class="form-control" id="exampleTextarea" rows="12" name="descripcion" maxlength="1000" required ></textarea>
					    </div>
					    <div class="form-group">
					      <label for="exampleInputFile">Selecciona la pelicula a subir</label>
					    	<img src="../imagenes/movie.png">
					      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="pelicula" required accept="video/*">
					      <small id="fileHelp" class="form-text text-muted">Selecciona la pelicula que se quiere subir.</small>
					    </div>
					    <div class="form-group">
					      <label for="exampleInputFile">Selecciona la miniatura del archivo</label>
					    	<img src="../imagenes/poster.png">
					      <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" name="poster" required accept="image/*">
					      <small id="fileHelp" class="form-text text-muted">Selecciona la imagen que tendra de miniatura la pelicula.</small>
					    </div>
					   <button type="submit" class="btn btn-primary">Subir Pelicula</button>
					   <button type="button" class="btn btn-danger" onclick="cancelar()">Cancelar</button>
					  </fieldset>
					</form>
				</div>
			</div>
	  </div>
	  <br><br><br><br>
	  <script type="text/javascript">
	  	function cancelar()
	  	{
	  		if(confirm("Se perderan los cambios, ¿Desea continuar?"))
	  		{
	  			window.location.href = "peliculasSubidas.php";
	  		}
	  	}
	  </script>
	<script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>