<?php
include 'views/includes/menulateral.php';
include 'views/includes/parteinferior.php';
include 'views/includes/partesuperior.php';
?>
<?=partesuperior(); ?>

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

    <?= parteinferior(); ?>