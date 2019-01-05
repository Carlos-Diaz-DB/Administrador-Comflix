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
	<div class="container">
		<h2 class="block titulo hidden-sm-down"><a class="brillo" href="#">Peliculas subidas</a></h2>
		<h2 class="block titulo2 hidden-md-up"><a class="brillo" href="#">Peliculas subidas</a></h2>
		<?php 
			require "funciones.php";//requerir el archivo con la clase y la funcion que desplega todas las peliculas
			$con = new funciones();//crea un objeto de la clase funciones en el archivo requerido
			$con ->recuperarDatos();//ejecutar la funcion recuperar datos con el objeto de la clase conexion*/
		 ?>
	 	
	 </div>
	 <!------script para confirmar si la pelicula se elimina o se modifica------>
	 <script type="text/javascript">
	 	function confirmaEliminar(idArchivos)
	 	{
	 		if(confirm('¿Esta seguro que desea eliminar la pelicula con el id '+idArchivos+' ?'))
	 		{
	 			window.location.href = "borrarPelicula.php?idArchivos=" + idArchivos;
	 		}
	 		
	 	}
	 	function confirmaModificar(idArchivos)
	 	{
	 		
	 			window.location.href = "modificarPelicula.php?idArchivos=" + idArchivos;
	 		
	 	}
	 </script>
	 <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>