<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> Administrador</a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link text-center">
      <span class="brand-text font-weight-light">Sistema web Grupo Morami</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">

          <li class="nav-item">
            <a href="usuarios.html" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Usuarios</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="dashboard.html" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Productos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="inventario.html" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>Inventario</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="cotizaciones.html" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>Cotizaciones</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pedidos.html" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>Pedidos</p>
            </a>
          </li>

         <li class="nav-item">
         <a href="pedidos.html" class="nav-link">
          <i class="nav-icon fas fa-cog"></i>
           <p>Configuraciones generales</p>
          </a>
        </li>

        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Dashboard</h1>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>5</h3>
                <p>Usuarios Registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="usuarios.html" class="small-box-footer">Ver más</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>5</h3>
                <p>Cotizaciones Realizadas</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-invoice"></i>
              </div>
              <a href="cotizaciones.html" class="small-box-footer">Ver más</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>3</h3>
                <p>Pedidos Pendientes</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="pedidos.html" class="small-box-footer">Ver más</a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>300</h3>
                <p>Productos Registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-boxes"></i>
              </div>
              <a href="inventario.html" class="small-box-footer">Ver más</a>
            </div>
          </div>

        </div>

      </div>
    </section>

  </div>

  <!-- FOOTER -->
  <footer class="main-footer text-center">
    <strong>Grupo Morami &copy; 2026</strong>
  </footer>

</div>

<!-- SCRIPTS -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="public/dist/js/adminlte.js"></script>

</body>
</html>