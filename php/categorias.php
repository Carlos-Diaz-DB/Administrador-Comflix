<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="imagenes/ico.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<?php 
	include "menu.php";
		require "../recolectarDatos.php";
	 ?>
	 <br>
	<div class="container">
		<div class="row block">
			<div class="col-lg-4 col-md-6 col-sm-12 block">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					  <div class="card-header">Categoria accion</div>
					  <div class="card-body align-self-center">
					    <img src="../imagenes/accion.png" class="col-4">
					    <p class="card-text">Total de peliculas:&nbsp <?php echo $numeroAccion; ?></p>
					  </div>
					</div>
		    </div>
		    <div class="col-lg-4 col-md-6 col-sm-12">
				<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria terror</div>
				  <div class="card-body">
				  	<img src="../imagenes/terror.png" class="col-4">
				    <p class="card-text">Total de peliculas:&nbsp<?php echo $numeroTerror; ?></p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria Ciencia ficcion</div>
				  <div class="card-body">
				  	<img src="../imagenes/ficcion.png" class="col-4">
				    <p class="card-text">Total de peliculas: &nbsp <?php echo $numeroFiccion; ?></p>
				  </div>
				</div>
			</div>	
			<div class="col-lg-4  col-md-6 col-sm-12">
				<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria animacion</div>
				  <div class="card-body">
				    <img src="../imagenes/view.png" class="col-4">
				    <p class="card-text">Total de peliculas:&nbsp <?php echo $numeroAnimacion; ?></p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">	
				<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria comedia</div>
				  <div class="card-body">
				    <img src="../imagenes/comedia.png" class="col-4">
				    <p class="card-text">Total de peliculas:&nbsp <?php echo $numeroComedia; ?></p>
				  </div>
				</div>
			</div>	
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria drama</div>
				  <div class="card-body">
				    <img src="../imagenes/view.png" class="col-4">
				    <p class="card-text">Total de peliculas:&nbsp <?php echo $numeroDrama; ?></p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">		
				<div class="card bg-light mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria documentales</div>
				  <div class="card-body">
				    <img src="../imagenes/documental.png" class="col-4">
				    <p class="card-text">Total de peliculas:&nbsp <?php echo $numeroDocumentales; ?></p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria fantasia</div>
				  <div class="card-body">
				    <img src="../imagenes/view.png" class="col-4">
				    <p class="card-text">Total de peliculas:&nbsp <?php echo $numeroFantasia; ?></p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">		
				<div class="card bg-light mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria Suspenso</div>
				  <div class="card-body">
				    <img src="../imagenes/view.png" class="col-4">
				    <p class="card-text">Total de peliculas:&nbsp <?php echo $numeroSuspenso; ?></p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
				  <div class="card-header">Categoria Misterio</div>
				  <div class="card-body">
				    <img src="../imagenes/view.png" class="col-4">
				    <p class="card-text">Total de peliculas:&nbsp <?php echo $numeroMisterio; ?></p>
				  </div>
				</div>
			</div>
		</div>
		<button type="button" class="btn btn-primary" onclick="regresar()">Regresar</button>			
	</div>
	<br><br><br><br>
	<script type="text/javascript">
		function regresar()
		{
			window.location.href = "../index.php";
		}
	</script>
	<script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>