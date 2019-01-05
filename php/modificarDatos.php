<?php 
	
  			require "conexion.php";

			/*header('Location: peliculasSubidas.php');
			$idArchivo = isset($_GET['idArchivos']) ? $_GET['idArchivos'] : 0;
			modificaPelicula($idArchivo);
			die();*/


  			function modificaPelicula($idArchivo,$nombre,$descripcion,$ruta,$poster,$idCategoria)
		{
			global $conexion;
			$sql = "UPDATE archivos SET nombre='".$nombre."',descripcion='".$descripcion."',ruta='".$ruta."',poster='".$poster."',idCategoria='".$idCategoria."' WHERE idArchivos=".$idArchivo;
			mysqli_query($conexion,$sql) or die(mysqli_error($conexion));

		}
		$pelicula="../videos/".$_POST['pelicula'];
		$poster="../poster/".$_POST['poster'];


				modificaPelicula($_POST['idArchivo'],$_POST['nombre'],$_POST['descripcion'],$pelicula,$poster,$_POST['Categoria']);
				echo "<script>
							alert('Datos actualizados correctamente');
							 window.location.href = 'peliculasSubidas.php';
				     </script>";
			

		//modificaPelicula($_POST['idArchivo1'],$_POST['nombre'],$_POST['descripcion'],$pelicula,$poster,$_POST['Categoria']);
		//echo "<script>alert('Datos actualizados correctamente');</script>";

 ?>