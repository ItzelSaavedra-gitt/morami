<?php
include 'views/includes/menulateral.php';
include 'views/includes/parteinferior.php';
include 'views/includes/partesuperior.php';
?>
<?= partesuperior(); ?>

<div class="content-wrapper">

  <section class="content">

    <div class="container-fluid">
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
                      <th>Rol</th>
                      <th>Estatus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($tabla as $fila) {
                    ?>
                      <tr>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['apellidoPaterno']; ?></td>
                        <td><?php echo $fila['apellidoMaterno']; ?></td>
                        <td><?php echo $fila['usuario']; ?></td>
                        <td><?php echo $fila['contrasenia']; ?></td>
                        <td><?php echo $fila['id_rol']; ?></td>
                        <td>
                          <?php
                          if($fila['estatus'] == 'Activo'){
                              echo '<span class="badge badge-success">Activo</span>';
                          }else{
                              echo '<span class="badge badge-danger">Inactivo</span>';
                          }
                          ?>
                        </td>
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
    </div>
  </section>
</div>
<?= parteinferior(); ?>