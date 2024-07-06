<!-- inicio barra de navegacion -->
<div class="container-fluid bg-dark">
  <!-- Usar navbar-expand-xl debido al padding que agregue a los <li> usando css-->
<nav class="navbar navbar-expand-xl navbar-dark bg-dark py-2 py-lg-0">  
    <a class="navbar-brand" href="<?php echo base_url('principal');?>">
      <img src="assets/img/Logotipo/logo1.png" alt="" width="77" height="77" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item separacion">
          <!-- llamo a supertitulo para la fuente-->
          <a class="nav-link supertitulo" aria-current="page" href="<?php echo base_url('principal');?>">Inicio</a>
        </li>
        <li class="nav-item separacion">
          <a class="nav-link supertitulo" href="<?php echo base_url('quienes_somos');?>">Quienes Somos</a>
        </li>
        <li class="nav-item separacion">
          <a class="nav-link supertitulo" href="<?php echo base_url('acerca_de');?>">Acerca de</a>
        </li>
        <li class="nav-item separacion">
          <a class="nav-link supertitulo" href="<?php echo base_url('catalogo');?>">Catálogo</a>
        </li>
        <li class="nav-item dropdown supertitulo separacion">
          <a class="nav-link dropdown-toggle supertitulo" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu fondo_gris" aria-labelledby="navbarDropdown">
            <!-- Uso nav-link en vez de dropdown-item para manejar los semi clicks del usuario que corrompen el :hoover de mi css-->
            <li><a class="nav-link supertitulo" href="<?php echo base_url('catalogo');?>">Plantas</a></li>
            <li><a class="nav-link supertitulo" href="<?php echo base_url('catalogo');?>">Masetas</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="nav-link disable" href="#">Cerrar Sesión</a></li>
          </ul>
        </li>
        <li class="nav-item separacion">
          <a class="nav-link supertitulo" href="<?php echo base_url('registro');?>">Registrarse</a>
        </li>
        <li class="nav-item separacion">
          <a class="nav-link supertitulo" href="<?php echo base_url('login');?>">Iniciar Sesión</a>
        </li>        
      </ul>
      <form class="d-flex separacion" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
</nav>

</div>
<!-- fin barra de navegacion -->
</header>
<!-- fin encabezado -->

<body>
  <!-- inicio de cuerpo-->