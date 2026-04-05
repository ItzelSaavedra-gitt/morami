<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GrupoMorami | GrupoMorami</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
     
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cotizaciones</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>    
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cotizaciones</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                   <thead>
                     
    <form action="/buscar" method="get">
    <input type="search" name="q" placeholder="Buscar...">
    <button type="submit">Buscar</button>
</form>

        <tr>
          <th>Fecha</th>
          <th>Nombre del cliente</th>
          <th>Nombre del producto</th>
          <th>Tipo</th>
          <th>Unidad de medida</th>
          <th>Cantidad</th>
          <th>Precio Unitario</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
     
       <tr>
          <td>2026-04-02</td>
          <td>Armando Hernandez</td>
          <td>Porcelanato Rectificado Gris</td>
          <td>Loseta</td>
          <td>Caja</td>
          <td>40</td>
          <td>350.00</td>
          <td>14000.00</td>
        </tr>
        <tr>
          <td>2026-04-02</td>
          <td>Carlos Sánchez</td>
          <td>Piso Cerámico Madera Oak</td>
          <td>Loseta</td>
          <td>Caja</td>
          <td>25</td>
          <td>210.00</td>
          <td>5250.00</td>
        </tr>
        <tr>
          <td>2026-04-03</td>
          <td>Alejandra Ramirez</td>
          <td>Mármol Carrara Premium</td>
          <td>Decorado</td>
          <td>Pieza</td>
          <td>100</td>
          <td>1250.00</td>
          <td>125000.00</td>
        </tr>
        <tr>
          <td>2026-04-03</td>
          <td>Lucía Méndez</td>
          <td>Rústico/Cálido</td>
          <td>Decorado</td>
          <td>Pieza</td>
          <td>12</td>
          <td>285.00</td>
          <td>3420.00</td>
        </tr>
        <tr>
          <td>2026-04-04</td>
          <td>Selena Gomez</td>
          <td>Azulejo Estilo Hidráulico</td>
          <td>Pega azulejo</td>
          <td>Bulto</td>
          <td>8</td>
          <td>420.00</td>
          <td>3360.00</td>
        </tr>
      </tbody>
    </table>

    <button onclick="history.back()" style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    Regresar
    </button>

    <button style="background-color: #FFD700; color: black; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; font-size: 16px;">
    + Nueva Cotización
</button>

        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2025-2026 <a href="https://adminlte.io">GrupoMorami</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="public/plugins/jszip/jszip.min.js"></script>
<script src="public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
