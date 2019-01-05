<?php 


	class funciones
	{

		//funcion para mostrar todos los videos de la base de datos
		function recuperarDatos()
		{
			require "conexion.php";
			$query = "SELECT archivos.idArchivos,archivos.nombre,archivos.ruta,archivos.poster, archivos.clicks, categorias.nombreCategoria from archivos inner join categorias on archivos.idcategoria = categorias.idCategoria ORDER BY
			    archivos.idArchivos";//consulta a base de datos
			$resultado = mysqli_query($conexion,$query);//almacenar el resultado del query, parametro conexion y query

			while($dato = mysqli_fetch_array($resultado))//Guardar y desplegar los resultados en un arreglo
			{
				
				?>
				<div class="row align-items-center">
					<video class="col-lg-4 col-md-5 col-sm-12 col-xm-12 justify-content-center" src="<?php echo $dato['ruta']; ?>" controls preload poster="<?php echo $dato['poster']; ?>">
					</video>
					<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
						<h5 class="block">Nombre:&nbsp <?php echo $dato['nombre']; ?></h5>
						<p class="block"><?php echo $dato['clicks']; ?> &nbsp Visualizaciones</p>
						<p class="block">Categoria:&nbsp <?php echo $dato['nombreCategoria']; ?></p>
						<p class="block">Id de archivo:&nbsp<?php echo $dato['idArchivos']; ?></p>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12 block">
						<form>
								<button type="button" class="btn btn-warning" onclick="confirmaModificar(<?php echo $dato['idArchivos']; ?>)">Modificar</button>
								<button type="button" class="btn btn-danger" onclick="confirmaEliminar(<?php echo $dato['idArchivos']; ?>)">Eliminar</button>
					    </form>
					</div>
				</div>
				<hr>
				
			<?php

			}
		}

			//funcion para mostrar los datos al modificar
			function consulta($idArchivo)
			{
				require "conexion.php";
				$sql = "SELECT * FROM archivos WHERE idArchivos={$idArchivo}";
				$resultado=mysqli_query($conexion,$sql) or die(mysql_error());
				$filas = mysqli_fetch_assoc($resultado);
				$video = substr($filas['ruta'], 10);  // devuelve "cde"
				return [
					$filas['nombre'],
					$filas['descripcion'],
					$filas['idCategoria'],
					$video,
					$filas['poster'],
					$filas['idArchivos']
				];
				
			}
	}//clase funciones



 ?>
