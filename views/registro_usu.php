<?php
include 'views/includes/menulateral.php';
include 'views/includes/parteinferior.php';
include 'views/includes/partesuperior.php';
?>
<?= partesuperior(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Usuarios registrados</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Usuarios registrados</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- CARD BODY -->
      <div class="card-body">
        <div class="row">

          <!-- Columna izquierda -->
          <div class="col-md-6">

            <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre">
            </div>

            <div class="form-group">
              <label>Apellido Paterno</label>
              <input type="text" class="form-control" name="apellido_paterno" placeholder="Ingresa el apellido paterno">
            </div>

            <div class="form-group">
              <label>Apellido Materno</label>
              <input type="text" class="form-control" name="apellido_materno" placeholder="Ingresa el apellido materno">
            </div>

          </div>

          <!-- Columna derecha -->
          <div class="col-md-6">

            <div class="form-group">
              <label>Nombre de Usuario</label>
              <input type="text" class="form-control" name="usuario" placeholder="Ingresa el usuario">
            </div>

            <div class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control" name="password" placeholder="Ingresa la contraseña">
            </div>

            <div class="form-group">
              <label>Rol</label>
              <select class="form-control" name="rol">
                <option value="">Seleccione un rol</option>
                <option value="administrador">Administrador</option>
                <option value="asesor">Asesor de ventas</option>
              </select>
            </div>

          </div>

        </div>
      </div>
      <?= parteinferior(); ?>