<?php
include 'views/includes/menulateral.php';
include 'views/includes/parteinferior.php';
include 'views/includes/partesuperior.php';
?>
<?=partesuperior(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GrupoMorami | Usuarios registrados</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">

    
            <div class="card">
  <div class="card-header">
    <h3 class="card-title">Usuarios registrados</h3>

    <div class="card-tools">
      <div class="input-group input-group-sm" style="width: 160px;">
        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        <div class="input-group-append">
          <button type="submit" class="btn btn-default">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Usuario</th>
          <th>Contraseña</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($tabla as $fila ){
        ?>
        <tr>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['apellidoPaterno']; ?></td>
          <td>Hernandez</td>
          <td>fhernandez2026</td>
          <td></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
            <!-- /.card -->
          </div>
        </div>

        
<a href="?menu=usuarios&opc=registro"> 
<button style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
 Registrar Usuario
</button>
</a>

<button style="padding: 10px 20px; cursor: pointer;">
    <i class="fas fa-home" style="color: #FFD700; font-size: 20px;"></i>
    Inicio
</button>
<?= parteinferior(); ?>