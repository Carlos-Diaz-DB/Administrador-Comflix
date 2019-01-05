<?php 
  			
  			require "conexion.php";


			//header('Location: peliculasSubidas.php');
			$idArchivo = isset($_GET['idArchivos']) ? $_GET['idArchivos'] : 0;
			borrar($idArchivo);
			die();
			
  			function borrar($idArchivo)
		{
			global $conexion;
			$sql = "DELETE FROM archivos WHERE idArchivos={$idArchivo}";
			$conexion->query($sql);
			echo "<script type=\"text/javascript\">
						alert('Datos eliminados correctamente');
						 window.location.href = 'peliculasSubidas.php';
				      </script>";
		}


		

 ?>