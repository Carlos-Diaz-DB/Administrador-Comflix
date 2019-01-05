<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand hidden-md-down" href="#"><img src="imagenes/logo2.svg" style="width: 150px; height: 40px;"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor03">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="peliculasSubidas.php">Peliculas subidas</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="subirPelicula.php">Subir pelicula</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Salir</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="busquedaPelicula.php" method="POST">
	      <input class="form-control mr-sm-2" type="text" name="txtBuscar" placeholder="Search" autocomplete="off" >
	      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>