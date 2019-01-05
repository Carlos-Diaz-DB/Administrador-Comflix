<?php 
	
			$host = "localhost";
			$user = "root";
			$password = "";
			$database = "db_Comflix";

			$conexion = mysqli_connect($host,$user,$password,$database) or die("Error al conectar con la base de datos");
			mysqli_set_charset($conexion,'utf8');
			mysqli_select_db($conexion,$database) or die("No se encontro la base de datos");
 ?>
