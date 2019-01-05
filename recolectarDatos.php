<?php 
	
		
			require "php/conexion.php";

			//Total de usuarios
			$queryuser = "SELECT COUNT(nombreUsuario) AS total from usuarios";
			$resultado = mysqli_query($conexion,$queryuser);
			$values = mysqli_fetch_assoc($resultado);
			$numeroUsuarios = $values['total'];
			
			//Total de peliculas
			$queryPelicula = "SELECT COUNT(nombre) AS totalPelicula from archivos";
			$resultadoPelicula = mysqli_query($conexion,$queryPelicula);
			$valuesPelicula = mysqli_fetch_assoc($resultadoPelicula);
			$numeroPelicula = $valuesPelicula['totalPelicula'];

			//Total de administradores
			$queryAdmin = "SELECT COUNT(nombreAdministrador) AS totalAdmin from administrador";
			$resultadoAdmin = mysqli_query($conexion,$queryAdmin);
			$valuesAdmin = mysqli_fetch_assoc($resultadoAdmin);
			$numeroAdmin = $valuesAdmin['totalAdmin'];

			//Total de reproducciones por todos los videos
			$queryView = "SELECT SUM(clicks) AS totalView from archivos";
			$resultadoView = mysqli_query($conexion,$queryView);
			$valuesView = mysqli_fetch_assoc($resultadoView);
			$numeroView = $valuesView['totalView'];

			$queryAccion = "SELECT COUNT(nombre) AS totalAccion from archivos WHERE idCategoria = 1";
			$resultadoAccion = mysqli_query($conexion,$queryAccion);
			$valuesAccion = mysqli_fetch_assoc($resultadoAccion);
			$numeroAccion = $valuesAccion['totalAccion'];

			$queryTerror = "SELECT COUNT(nombre) AS totalTerror from archivos WHERE idCategoria = 2";
			$resultadoTerror = mysqli_query($conexion,$queryTerror);
			$valuesTerror = mysqli_fetch_assoc($resultadoTerror);
			$numeroTerror = $valuesTerror['totalTerror'];

			$queryFiccion = "SELECT COUNT(nombre) AS totalFiccion from archivos WHERE idCategoria = 3";
			$resultadoFiccion = mysqli_query($conexion,$queryFiccion);
			$valuesFiccion = mysqli_fetch_assoc($resultadoFiccion);
			$numeroFiccion = $valuesFiccion['totalFiccion'];

			$queryAnimacion = "SELECT COUNT(nombre) AS totalAnimacion from archivos WHERE idCategoria = 4";
			$resultadoAnimacion = mysqli_query($conexion,$queryAnimacion);
			$valuesAnimacion = mysqli_fetch_assoc($resultadoAnimacion);
			$numeroAnimacion = $valuesAnimacion['totalAnimacion'];

			$queryComedia = "SELECT COUNT(nombre) AS totalComedia from archivos WHERE idCategoria = 5";
			$resultadoComedia = mysqli_query($conexion,$queryComedia);
			$valuesComedia = mysqli_fetch_assoc($resultadoComedia);
			$numeroComedia = $valuesComedia['totalComedia'];

			$queryDrama = "SELECT COUNT(nombre) AS totalDrama from archivos WHERE idCategoria = 6";
			$resultadoDrama = mysqli_query($conexion,$queryDrama);
			$valuesDrama = mysqli_fetch_assoc($resultadoDrama);
			$numeroDrama = $valuesDrama['totalDrama'];

			$queryDocumentales = "SELECT COUNT(nombre) AS totalDocumentales from archivos WHERE idCategoria = 7";
			$resultadoDocumentales = mysqli_query($conexion,$queryDocumentales);
			$valuesDocumentales = mysqli_fetch_assoc($resultadoDocumentales);
			$numeroDocumentales = $valuesDocumentales['totalDocumentales'];

			$queryFantasia = "SELECT COUNT(nombre) AS totalFantasia from archivos WHERE idCategoria = 8";
			$resultadoFantasia = mysqli_query($conexion,$queryFantasia);
			$valuesFantasia = mysqli_fetch_assoc($resultadoFantasia);
			$numeroFantasia = $valuesFantasia['totalFantasia'];

			$querySuspenso = "SELECT COUNT(nombre) AS totalSuspenso from archivos WHERE idCategoria = 9";
			$resultadoSuspenso = mysqli_query($conexion,$querySuspenso);
			$valuesSuspenso = mysqli_fetch_assoc($resultadoSuspenso);
			$numeroSuspenso = $valuesSuspenso['totalSuspenso'];

			$queryMisterio = "SELECT COUNT(nombre) AS totalMisterio from archivos WHERE idCategoria = 10";
			$resultadoMisterio = mysqli_query($conexion,$queryMisterio);
			$valuesMisterio = mysqli_fetch_assoc($resultadoMisterio);
			$numeroMisterio = $valuesMisterio['totalMisterio'];
?>
	
