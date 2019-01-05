<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../imagenes/lupa.png">
  <link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.css.map">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <title>Busqueda</title>
</head>
<body>
  <?php 
    include "menu.php";
   ?>
   
 <div class="container">
   
     <?php
        require "conexion.php";
        $query="SELECT archivos.idArchivos,archivos.nombre,archivos.descripcion,archivos.ruta,archivos.poster, archivos.clicks, categorias.nombreCategoria from archivos inner join categorias on archivos.idcategoria = categorias.idCategoria
            WHERE nombre LIKE '".$_POST['txtBuscar']."%' OR nombre LIKE '%".$_POST['txtBuscar']."%' OR nombre LIKE '%".$_POST['txtBuscar']."'";
        $resultado = mysqli_query($conexion,$query);//Se ejecuta el query y se almacena en una variable
        $total = mysqli_num_rows($resultado);
            while($dato = mysqli_fetch_array($resultado))//se hace un ciclo mientras haya resultados del query
            {

      ?>

                <h3 class="block"><strong><?php echo $dato['nombre']; ?></strong></h3>
                <div class="row align-items-center">
                  <video class="col-lg-8 col-sm-12 col-xm-12 justify-content-center" src=" <?php echo $dato['ruta']; ?>" controls preload poster=" <?php echo $dato['poster']; ?>"></video>
                  <div class="col-lg-4 col-sm-12 alert alert-dismissible alert-secondary">
                      <h4 class="block">Sipnosis</h4>
                      <p class="block"> <?php echo $dato['descripcion']; ?></p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-sm-12 col-xm-12 justify-content-center"></div>
                    <div class="col-lg-4 col-sm-12">
                      <p class="block">Categoria:&nbsp <?php echo $dato['nombreCategoria']; ?></p>
                      <p class="block">Numero de visualizaciones:&nbsp <?php echo $dato['clicks']; ?></p>
                      <form class="block">
                            <button type="button" class="btn btn-warning" onclick="confirmaModificar(<?php echo $dato['idArchivos']; ?>)">Modificar</button>
                            <button type="button" class="btn btn-danger" onclick="confirmaEliminar(<?php echo $dato['idArchivos']; ?>)">Eliminar</button>
                      </form>
                   </div>
                </div>
                <hr><br>
              
        <?php  


            }
            if($total==0)
            {
        ?>    
              <br><br><br>
              <div class="row justify-content-center">
                <div class="col-2 hidden-sm-down">
                  <img src="../imagenes/failsearch.png" class="col-8">
                </div>
                <div class="col-auto">
                  <h5>No se han encontrado resultados</h5>
                </div>
              </div>
        <?php
            }
        ?>
 </div>
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