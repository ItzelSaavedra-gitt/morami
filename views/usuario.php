<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GrupoMorami | Simple Tables</title>

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
          <th>User</th>
          <th>Rol</th>
          <th>Estatus</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan</td>
          <td>Fernandez</td>
          <td>Hernandez</td>
          <td>fhernandez2026</td>
          <td>Administrador Usuario</td>
          <td><span class="badge badge-success">Activo</span></td>
        </tr>
        <tr>
          <td>María</td>
          <td>López</td>
          <td>Sánchez</td>
          <td>Lopsanchez2026</td>
          <td>Administrador Usuario</td>
          <td><span class="badge badge-danger">Inactivo</span></td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
            <!-- /.card -->
          </div>
        </div>

        

<button style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
 Registrar Usuario
</button>

<button style="padding: 10px 20px; cursor: pointer;">
    <i class="fas fa-home" style="color: #FFD700; font-size: 20px;"></i>
    Inicio
</button>
