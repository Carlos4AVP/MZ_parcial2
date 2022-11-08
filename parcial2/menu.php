<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php"><img src="img/logo_navbar.png" alt="mz" width=60px height=60px></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarDatos.php">Registar</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Quiénes somos
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php">Sucursales</a>
                <a class="dropdown-item" href="historia-MZ.html">Nuestra historia</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="consultarDatos.php">Nuestros productos</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="GET" action="resultadoBusqueda.php">
            <input name="termino" class="form-control mr-sm-2" type="search" placeholder="Buscar" style="width: 500px; height:40px;" aria-label="Buscar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="img/lupita.png" alt="buscar" width=45px height=45px></button>
          </form>
        </div>
    </nav>