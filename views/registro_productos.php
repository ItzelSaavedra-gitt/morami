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
                                    <h1>Registro de nuevos productos</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Registro de nuevos productos</li>
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

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Nombre del producto</label>
                                            <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre de algún producto">
                                        </div>

                                        <div class="form-group">
                                            <label>Tipo de producto</label>
                                            <select class="form-control" name="material">
                                                <option value="">Seleccione un tipo</option>
                                                <option value="loseta">Loseta</option>
                                                <option value="pegamento">Pega azulejo</option>
                                                <option value="decorado">Decorado</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Unidad de medida</label>
                                            <select class="form-control" name="medida" id="unidadMedida">
                                                <option value="">Seleccione una opción</option>
                                                <option value="cajas">Cajas</option>
                                                <option value="bulto">Bultos</option>
                                                <option value="pz">Piezas</option>
                                            </select>
                                        </div>

                                        <td>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">Registrar</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-cancel">Cancelar</button>
                                            <button type="button" class="bg-gradient-warning btn-sm">Inicio</button>
                                        </td>

                                        <div class="modal fade" id="modal-success">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-success">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Registro exitoso</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span>&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <p>El producto se registró correctamente</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">
                                                            Cerrar
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="modal-cancel">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-danger">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Registro cancelado</h4>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span>&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <p>El registro del producto fue cancelado</p>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">
                                                            Cerrar
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Color del material</label>
                                            <select class="form-control" name="colores">
                                                <option value="">Seleccione una opción</option>
                                                <option value="color1">Negro</option>
                                                <option value="color2">Blanco</option>
                                                <option value="color3">Beige</option>
                                                <option value="color4">Cafe</option>
                                                <option value="color5">Gris</option>
                                                <option value="color6">Azul</option>
                                                <option value="color7">Verde</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Cantidad</label>
                                            <input type="number" class="form-control" name="cantidad" min="1" max="1000" step="1" value="1">
                                        </div>


                                        <div class="form-group" id="formatoMedida" style="display: none;">
                                            <label>Formato de medida</label>
                                            <select class="form-control" name="formato">
                                                <option value="">Seleccione un formato</option>
                                                <option value="30x60">30 x 60</option>
                                                <option value="60x60">60 x 60</option>
                                                <option value="60x120">60 x 1.20</option>
                                            </select>
                                        </div>

                                        <div class="form-group" id="fechaCaducidad" style="display: none;">
                                            <label>Fecha de caducidad</label>
                                            <div class="input-group date" id="fechaCaducidadPicker" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#fechaCaducidadPicker" name="caducidad" />
                                                <div class="input-group-append" data-target="#fechaCaducidadPicker" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Precio unitario</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" name="precio" id="precio" placeholder="ingrese el precio en este formato 0.00">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?= parteinferior(); ?>