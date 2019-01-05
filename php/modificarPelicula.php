<?php 
  	
  	require "funciones.php";
  	$con = new funciones();
  	$consulta = $con->consulta($_GET['idArchivos']);

?>
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
		include "menu.php";
	 ?>
	  <div  class="container">
			<div class="row align-items-center">
				<div class="col-4 col-md-12 col-xm-12 justify-content-center">
					<form method="POST" action="modificarDatos.php">
					  <fieldset>
					    <h2 class="block titulo hidden-sm-down"><a class="brillo" href="#">Actualizar datos</a></h2>
					    <h2 class="block titulo2 hidden-md-up"><a class="brillo" href="#">Actualizar datos</a></h2>
					    <!--<div class="form-group row">
					        <label for="staticEmail" class="col-sm-2 col-form-label">Pelicula</label>
					      <div class="col-sm-10">
					        <input type="text" readonly="" class="form-control-plaintext">
					      </div>
					    </div>-->
					    <div class="form-group">
					      <label for="exampleInputEmail1">Nombre de la pelicula</label>
					      <input type="text" class="form-control oculta" aria-describedby="emailHelp" name="idArchivo" autocomplete="off" required maxlength="120"  value="<?php echo $consulta[5] ?>">
					      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la pelicula" name="nombre" autocomplete="off" required maxlength="120"  value="<?php echo $consulta[0] ?>">
					      <small id="emailHelp" class="form-text text-muted">Puedes cambiar el nombre de la pelicula por la que se llevara a cabo la busqueda.</small>
					    </div>
					    <div class="form-group">
					      <label for="exampleSelect1">Categoria</label>
					      <select class="form-control" id="exampleSelect1" name="Categoria"selected=" <?php echo $consulta[2] ?> ">
					        <option value="1" <?php if($consulta[2] == 1){echo("selected");}?>>Accion</option>
					        <option value="2" <?php if($consulta[2] == 2){echo("selected");}?>>Terror</option>
					        <option value="3" <?php if($consulta[2] == 3){echo("selected");}?>>Ciencia ficcion</option>
					        <option value="4" <?php if($consulta[2] == 4){echo("selected");}?>>Animacion</option>
					        <option value="5" <?php if($consulta[2] == 5){echo("selected");}?>>Comedia</option>
					        <option value="6" <?php if($consulta[2] == 6){echo("selected");}?>>Drama</option>
					        <option value="7" <?php if($consulta[2] == 7){echo("selected");}?>>Documentales</option>
					        <option value="8" <?php if($consulta[2] == 8){echo("selected");}?>>Fantasia</option>
					        <option value="9" <?php if($consulta[2] == 9){echo("selected");}?>>Suspenso</option>
					        <option value="10" <?php if($consulta[2] == 10){echo("selected");}?>>Misterio</option>
					      </select>
					    </div>
					    <div class="form-group">
					      <label for="exampleTextarea" required>Sipnosis</label>
					      <textarea class="form-control" id="exampleTextarea" rows="12" name="descripcion" maxlength="1000" required><?php echo $consulta[1] ?></textarea>
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
					   <button type="submit" class="btn btn-primary">Guardar cambios</button>
					    <button type="button" class="btn btn-danger" onclick="cancelar()">Cancelar</button>
					  </fieldset>
					</form>
				</div>
			</div>
	  </div>
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