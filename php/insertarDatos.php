<?php 
	
	class conexion
	{
		
		function insertarDatos()
		{
			require "conexion.php";

			$nombre=$_POST['nombre'];
			$idCategoria = $_POST['Categoria'];
			$descripcion=$_POST['descripcion'];
			$pelicula = "../videos/".$_POST['pelicula'];
			$poster = "../poster/".$_POST['poster'];
			if(!empty($_POST['pelicula']) && !empty($_POST['poster']))
			{
				$query="insert into archivos(nombre,descripcion,ruta,poster,idCategoria) values('$nombre','$descripcion','$pelicula','$poster',$idCategoria)";
				
				$resultado=$conexion->query($query);
			}
			elseif(empty($_POST['pelicula']) || empty($_POST['poster']))
			{
				$query="";
				echo "<script type=\"text/javascript\">alert('No se ha seleccionado un video o un poster');</script>";
			}
			

			if(!empty($resultado))
			{
				    echo "<script>
				            alert('Se guardaron los datos correctamente');
                            window.location.href = 'peliculasSubidas.php';
						  </script>";
						  sleep(2);
			}
				else
				{
					echo "<script>
							alert('Error al insertar archivos');
							window.location.href = 'subirpelicula.php';
						 </script>";
					
				}
				
			
		}
	}

	$con = new conexion();//objeto de la clase conexion
	$con ->insertarDatos();//Ejecutar funcion insertarDatos
	
 ?>
