<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="imagenes/ico.png">
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<title></title>
</head>
<body>
	<?php 
		include "menu.php"
	 ?>
	<div class="container justify-content-center">
		<h2 class="block titulo hidden-sm-down"><a class="brillo" href="#">Datos de usuarios</a></h2>
		<h2 class="block titulo2 hidden-md-up"><a class="brillo" href="#">Datos de usuarios</a></h2>
		<div class="col-lg-8">
			<table border="1">
				<caption>Datos de usuarios</caption>
				<tr>
					<th scope="row">Id</th>
					<th scope="row">&nbsp&nbsp Nombre</th>
					<th scope="row">&nbsp&nbsp Apellido Paterno</th>
					<th scope="row">&nbsp&nbsp Apellido Materno</th>
					<th scope="row">&nbsp&nbsp Correo electronico</th>
					<th scope="row">&nbsp&nbsp Contraseña</th>
				</tr>
					<?php 
			
							class conexion//clase conexion
							{
								
								function tablaDeDatosDeUsuario()
								{
									require "conexion.php";//conexion a la base de datos
									$query = "SELECT * from usuarios";//consulta a base de datos
									$resultado = mysqli_query($conexion,$query);//almacenar el resultado del query, parametro conexion y query


									while($dato = mysqli_fetch_array($resultado))//Guardar y desplegar los resultados en un arreglo
									{
										
										?>
										<tr class="table-secondary">
											<td><?php echo $dato['idUsuario']; ?></td>
											<td>&nbsp&nbsp <?php echo $dato['nombreUsuario']; ?></td>
											<td>&nbsp&nbsp <?php echo $dato['apellidoPaterno']; ?></td>
											<td>&nbsp&nbsp <?php echo $dato['apellidoMaterno']; ?></td>
											<td>&nbsp&nbsp <?php echo $dato['correo']; ?></td>
											<td>&nbsp&nbsp <?php echo $dato['contraseña']; ?></td>
										</tr>

									<?php

									}
								}
							}
							$con = new conexion();
							$con->tablaDeDatosDeUsuario();
					?>
			

			</table>
		</div>
		<br>
		<button type="button" class="btn btn-primary" onclick="regresar()">Regresar</button>
	</div>
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