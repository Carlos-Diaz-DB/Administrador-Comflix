<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon"  href="Favicon.ico">
	<link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap4/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<?php
	include "menu.php"; 
		require "recolectarDatos.php";
	 ?>
	<div class="container">
		<div class="row block">
			<div class="col-lg-4 col-md-6 col-sm-12 block">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					  <div class="card-header">Administradores</div>
					  <div class="card-body align-self-center">
					  	<a href="php/datosAdmin.php"><img src="imagenes/user.png" class="col-4"></a>
					    <p class="card-text">Administradores para esta pagina:&nbsp <?php echo $numeroAdmin; ?></p>
					  </div>
					</div>
		    </div>
		    <div class="col-lg-4 col-md-6 col-sm-12">
				<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
				  <div class="card-header">Usuarios</div>
				  <div class="card-body">
				  	<a href="php/datosUsuarios.php"><img src="imagenes/user.png" class="col-4"></a>
				    <p class="card-text">Total de usuarios registrados:&nbsp<?php echo $numeroUsuarios; ?></p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
				  <div class="card-header">Contenido web</div>
				  <div class="card-body">
				  	<a href="php/categorias.php"><img src="imagenes/movie.png" class="col-4"></a>
				    <p class="card-text">Total de Peliculas subidas: &nbsp <?php echo $numeroPelicula; ?></p>
				  </div>
				</div>
			</div>	
			<div class="col-lg-4  col-md-6 col-sm-12">
				<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
				  <div class="card-header">Reproducciones</div>
				  <div class="card-body">
				    <img src="imagenes/view.png" class="col-4">
				    <p class="card-text">Total de reproducciones:&nbsp <?php echo $numeroView; ?></p>
				  </div>
				</div>
			</div>
		</div>			
	<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>