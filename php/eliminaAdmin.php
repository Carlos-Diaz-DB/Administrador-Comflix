<?php 
	
	require "conexion.php";


			//header('Location: peliculasSubidas.php');
			$idAdmin = isset($_GET['idAdministrador']) ? $_GET['idAdministrador'] : 0;
			borrar($idAdmin);
			die();
			
  			function borrar($idAdmin)
		{
			global $conexion;
			$sql = "DELETE FROM administrador WHERE idAdministrador={$idAdmin}";
			$conexion->query($sql);
			echo "<script type=\"text/javascript\">
						alert('Cuenta de administrador baneada correctamente');
						 window.location.href = '../dashboard.php';
				      </script>";
		}

 ?>