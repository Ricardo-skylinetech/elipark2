<script>
window.addEventListener('DOMContentLoaded', function() {
    var camposTexto = document.querySelectorAll('input[type="text"], textarea');
    camposTexto.forEach(function(input) {
        input.addEventListener('input', function() {
            if (this.tagName === 'textarea') {
                this.value = this.value.toUpperCase();
            } else {
                this.value = this.value.toUpperCase();
            }
        });
    });
});


</script>
<!-- Begin Page Content -->
<div class="container-fluid">

<?php
    
    date_default_timezone_set('America/Chihuahua');
    setlocale (LC_TIME, "es_ES", "es_ES.iso88591", "spanish");
    $date_now = date('Y-m-d');
    $month_available = strftime('%B', strtotime($date_now));
  

?>

    <h1 class="h3 mb-4 text-gray-800">Pensiones de: <b id='textMes'><?= $month_available; ?></b></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- <h6 cla type="button"ss="m-0 font-weight-bold text-primary"><button class='btn btn-warning btn-sm' role="button">Demo Pensiones</button></h6> -->
            <h6 class="m-0 font-weight-bold text-primary">Detalle de pensiones del mes de: <b id='textMes2'><?= $month_available; ?></b></h6>
        </div>
        <div class="card-body">
            <form id="frm-pensiones" method="POST" class="filtros">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="row">
                            <?php if ($this->session->userdata('rol') <= 4) : ?>
                                <label for="estacionamiento" class="col-md-6">Estacionamiento:</label>
                                <div class="col-md-6">
                                    <select id="estacionamiento" name="estacionamiento" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                        <option value="" selected disabled>Elige un estacionamiento</option>
                                        <?php foreach ($estacionamiento as $item) : ?>
                                            <option value="<?= $item['id_estacionamiento'] ?>"><?= $item['nombre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio" id="rContrato" value="contrato" checked required>
                                    <label class="form-check-label" for="rContrato">Contrato</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select id="fContrato" name="select" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                    <option value="" selected disabled>Elige un contrato</option>
                                    <?php foreach ($contratos as $item) : ?>
                                        <option value="<?= $item['id_cat_pensiones'] ?>"><?= $item['contrato'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio" id="rRazonSocial" value="razonSocial">
                                    <label class="form-check-label" for="rRazonSocial">Razón social:</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select id="fRazonSocial" name="select" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                    <option value="" selected disabled>Elige una razón social</option>
                                    <?php foreach ($razonSocial as $item) : ?>
                                        <option value="<?= $item['id_cat_pensiones'] ?>"><?= $item['razonSocial'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio" id="rTarjetaSistema" value="tarjetaSistema">
                                    <label class="form-check-label" for="rTarjetaSistema">Tarjeta Sistema:</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select id="fTarjetaSistema" name="select" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                    <option value="" selected disabled>Elige una tarjeta de sistema</option>
                                    <?php foreach ($tarjetaSistema as $item) : ?>
                                        <option value="<?= $item['id_cat_pensiones'] ?>"><?= $item['tarjetaSistema'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio" id="rTarjetaFisica" value="tarjetaFisica">
                                    <label class="form-check-label" for="rTarjetaFisica">Tarjeta Física:</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select id="fTarjetaFisica" name="select" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                    <option value="" selected disabled>Elige una tarjeta física</option>
                                    <?php foreach ($tarjetaFisica as $item) : ?>
                                        <option value="<?= $item['id_cat_pensiones'] ?>"><?= $item['tarjetaFisica'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <div class="row">
                            <div class="col-sm-6 col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="todo" name="todo" value="1">
                                    <label class="form-check-label" for="todo">Todo <span class="badge badge-info" id="todas"></span></label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="activas" name="activas" value="1">
                                    <label class="form-check-label" for="activas">Activas  <span class="badge badge-success" id="contadoractivas"></span></h3></label>
                                </div>
                                <div class="form-check mb-1">
                                    <input type="checkbox" class="form-check-input" id="inactivas" name="inactivas" value="1">
                                    <label class="form-check-label" for="inactivas">Inactivas <span class="badge badge-danger" id="contadordesactivas"></span></h3></label>
                                </div>

                            </div>
                            <div class="col-sm-3 col-md-12 mt-2">
                                <button type="submit" id="buscar" class="btn lh-1 btn-primary">Buscar&nbsp;</button>
                            </div>
                            <div class="col-sm-3 col-md-12 mt-1">
                                <button type="button" id="limpiar" class="btn lh-1 btn-info">Limpiar</button>
                            </div>
                        </div>
                    </div>
     
                    <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-group">
                         <div class="row">
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="parames" id="parames" value="1">
                                    <label class="form-check-label" for="mes">Mes</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <input type="month" class="form-control form-control-sm" id="fechaMes" name="fechaMes">
                            </div>
                           
                        </div>
                             <div class="row">
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="filtroFoto" value="1" name="filtroFoto">
                                    <label class="form-check-label" for="mes">Filtro Foto</label>
                                </div>
                            </div>
                     
                           
                        </div>


                      </div>
                  </div>
              </form>


                </div>
           
            <hr>
            <div class="table-responsive"> <!-- SAMARA -->
                <table class="table table-bordered table-sm" id="tblPensiones" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>No.Contrato</th>
                            <th>F.Alta</th>
                            <th>F.Baja</th>
                            <th>No.Tarjeta Sistema</th>
                            <th>No.Tarjeta Físico</th>
                            <th>Razón Social</th>
                            <th>asignado</th>
                            <th>marca</th>
                            <th>modelo</th>
                            <th>color</th>
                            <th>placas</th>
                            <th>tipoPension</th>
                            <th>Estatus</th>
                            <th>Costo&nbsp;Pensión</th>
                            <th>factura</th>
                            <th>Pago</th>
                            <th>venta</th>
                            <th>reposicion</th>
                            <th>Recargos</th>
                            <th>fechaDeposito</th>
                            <th>movimiento</th>
                            <th>observaciones</th>
                            <th>costo2</th>
                            <th>pago2</th>
                            <th>otros2</th>
                            <th>Total&nbsp;Otros</th>
                            <th>Total Gral.</th>
                            <th>Ficha</th>
                            <th>Detalle</th>
                            <th>Historico</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal Nueva Pensión -->
<div class="modal fade bd-example-modal-lg" id="modalNueva" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Nueva de Pensión</h5>
                <button type="button" class="close modalClose">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm-nueva" method="POST">
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="form-group row">
                                    <?php if ($this->session->userdata('rol') <= 4) : ?>
                                        <label for="n-estacionamiento_id" class="col-sm-3 col-form-label font-weight-bold">Estacionamiento:</label>
                                        <div class="col-sm-4">
                                            <select id="n-estacionamiento_id" name="n-estacionamiento_id" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                                <option value="" selected disabled>Elige un estacionamiento</option>
                                                <?php foreach ($estacionamiento as $item) : ?>
                                                    <option value="<?= $item['id_estacionamiento'] ?>"><?= $item['nombre'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    <?php endif; ?>
                                    <label for="n-fechaAlta" class="col-sm-2 col-form-label font-weight-bold">Fecha Alta:</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="n-fechaAlta" name="n-fechaAlta" required >
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="n-contrato" class="col-sm-2 col-form-label font-weight-bold">Contrato:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="n-contrato" name="n-contrato" required>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="file" id="archivo" name="archivo" class="form-control-file" accept=".pdf" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="n-tarjetaSistema" class="col-sm-3 col-form-label font-weight-bold">No.Tarjeta Sistema:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="n-tarjetaSistema" name="n-tarjetaSistema">
                                    </div>
                                    <label for="n-tarjetaFisica" class="col-sm-3 col-form-label font-weight-bold">NoTarjeta Fisica:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="n-tarjetaFisica" name="n-tarjetaFisica">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="n-razonSocial" class="col-sm-3 col-form-label font-weight-bold">Razón Social:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="n-razonSocial" name="n-razonSocial" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="n-asignado" class="col-sm-2 col-form-label font-weight-bold">Asignado:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="n-asignado" name="n-asignado">
                                    </div>
                                    <label for="marca" class="col-sm-2 col-form-label font-weight-bold">Marca:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="marca" name="marca" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="n-modelo" class="col-sm-2 col-form-label font-weight-bold">Modelo:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="n-modelo" name="n-modelo" required>
                                    </div>
                                    <label for="color" class="col-sm-2 col-form-label font-weight-bold">Color:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="color" name="color">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="n-placas" class="col-sm-2 col-form-label font-weight-bold">Placas:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="n-placas" name="n-placas" required>
                                    </div>
                                    <label for="n-tipoPension" class="col-sm-2 col-form-label font-weight-bold">Pension:</label>
                                    <div class="col-sm-2">
                                         <select id="n-tipoPension" name="n-tipoPension" class="form-control-sm" style="width: 100%" required>
                                            <option value="" selected disabled>Elige una opción</option>
                                            <option value="CORTESIA">CORTESIA</option>
                                            <option value="LOCATARIOS">LOCATARIOS</option>
                                            <option value="EXTERNA">EXTERNA</option>
                                            <option value="OTRAS">OTRAS</option>
                                        </select>


                                        <!--input type="text" class="form-control" id="n-tipoPension" name="n-tipoPension"-->


                                    </div>
                                    <label for="n-estatus" class="col-sm-2 col-form-label font-weight-bold">Estatus:</label>
                                    <div class="col-sm-2">
                                        <select id="n-estatus" name="n-estatus" class="form-control-sm" style="width: 100%">
                                            <option value="" selected disabled>Elige una opción</option>
                                            <option value="1">ACTIVA</option>
                                            <option value="0">INACTIVA</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <!-- <label for="n-costo" class="col-sm-2 col-form-label font-weight-bold">Costo:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="n-costo" name="n-costo">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="n-costo">Costo:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="n-costo" name="n-costo" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                    <!-- <label for="n-factura" class="col-sm-2 col-form-label font-weight-bold">Factura:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="n-factura" name="n-factura">
                                    </div> -->
                                    <div class="col-md-4 font-weight-bold">
                                        <label for="n-factura">Factura:</label>
                                        <input type="text" class="form-control" id="n-factura" name="n-factura">
                                    </div>
                                    <!-- <label for="n-pago" class="col-sm-2 col-form-label font-weight-bold">Pago:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="n-pago" name="n-pago">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="n-pago">Pago:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="n-pago" name="n-pago" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <!-- <label for="n-venta" class="col-sm-2 col-form-label font-weight-bold">Venta Tarjeta:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="n-venta" name="n-venta">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="n-venta">Venta Tarjeta:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="n-venta" name="n-venta" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                    <!-- <label for="n-reposicion" class="col-sm-2 col-form-label font-weight-bold">Reposición Tarjeta:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="n-reposicion" name="n-reposicion">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="n-reposicion">Reposición Tarjeta:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="n-reposicion" name="n-reposicion" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                    <!-- <label for="n-recargos" class="col-sm-2 col-form-label font-weight-bold">Recargos Pago:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="n-recargos" name="n-recargos">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="n-recargos">Recargos Pago:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="n-recargos" name="n-recargos" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="n-fechaDeposito" class="col-sm-3 col-form-label font-weight-bold">Fecha Deposito:</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="n-fechaDeposito" name="n-fechaDeposito">
                                    </div>
                                    <label for="n-movimiento" class="col-sm-3 col-form-label font-weight-bold">No.Movimiento:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="n-movimiento" name="n-movimiento">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="n-observaciones">Observaciones</label>
                                    <textarea class="form-control" id="n-observaciones" name="n-observaciones" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                    <button id="btn-importLayout" type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detalle Pensión -->
<div class="modal fade bd-example-modal-lg" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Detalle de Pensión</h5>
                <button type="button" class="close closeEditar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="banderaEdit" id="banderaEdit">
            <form id="frm-editar" method="POST">
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <span>&nbsp;</span>
                            <!-- <span class="m-0 font-weight-bold text-dark">No. Contrato: <span id="contrato" class="text-primary"></span></span> -->
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <input type="text" class="form-control" id="e-id_cat_pensiones" name="e-id_cat_pensiones" hidden>
                                <div class="form-group row">
                                    <?php if ($this->session->userdata('rol') <= 4) : ?>
                                        <label for="e-estacionamiento_id" class="col-sm-3 col-form-label font-weight-bold">Estacionamiento:</label>
                                        <div class="col-sm-4">
                                            <select id="e-estacionamiento_id" name="e-estacionamiento_id" class="js-example-basic-single form-control-sm" style="width: 100%" disabled>
                                                <option value="" selected disabled>Elige un estacionamiento</option>
                                                <?php foreach ($estacionamiento as $item) : ?>
                                                    <option value="<?= $item['id_estacionamiento'] ?>"><?= $item['nombre'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    <?php endif; ?>
                                    <label for="e-fechaAlta" class="col-sm-2 col-form-label font-weight-bold">Fecha Alta:</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="e-fechaAlta" name="e-fechaAlta" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="e-contrato" class="col-sm-2 col-form-label font-weight-bold">Contrato:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="e-contrato" disabled>
                                    </div>
                                    <div class="col-sm-8 d-flex align-items-center contrato">
                                        <input type="file" id="eArchivo" name="eArchivo" class="form-control-file" accept=".pdf">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="e-fechaBaja" class="col-sm-2 col-form-label font-weight-bold">Fecha Baja:</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="e-fechaBaja" name="e-fechaBaja" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="e-tarjetaSistema" class="col-sm-3 col-form-label font-weight-bold">No.Tarjeta Sistema:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="e-tarjetaSistema" disabled>
                                    </div>
                                    <label for="e-tarjetaFisica" class="col-sm-3 col-form-label font-weight-bold">NoTarjeta Fisica:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="e-tarjetaFisica" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="e-razonSocial" class="col-sm-3 col-form-label font-weight-bold">Razón Social:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="e-razonSocial" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="e-asignado" class="col-sm-2 col-form-label font-weight-bold">Asignado:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="e-asignado" disabled>
                                    </div>
                                    <label for="e-marca" class="col-sm-2 col-form-label font-weight-bold">Marca:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="e-marca" name="e-marca" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="e-modelo" class="col-sm-2 col-form-label font-weight-bold">Modelo:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="e-modelo" name="e-modelo" readonly>
                                    </div>
                                    <label for="e-color" class="col-sm-2 col-form-label font-weight-bold">Color:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="e-color" name="e-color" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="e-placas" class="col-sm-2 col-form-label font-weight-bold">Placas:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="e-placas" name="e-placas" readonly>
                                    </div>
                                    <label for="e-tipoPension" class="col-sm-2 col-form-label font-weight-bold">Pension:</label>
                                    <div class="col-sm-2">


                                         <select id="e-tipoPension" name="e-tipoPension" class="form-control-sm" style="width: 100%" readonly required>
                                            <option value="" selected disabled>Elige una opción</option>
                                            <option value="CORTESIA">CORTESIA</option>
                                            <option value="LOCATARIOS">LOCATARIOS</option>
                                            <option value="EXTERNA">EXTERNA</option>
                                            <option value="OTRAS">OTRAS</option>
                                        </select>

                                        <!-- input type="text" class="form-control" id="e-tipoPension" name="e-tipoPension" readonly-->


                                    </div>
                                    <label for="e-estatus" class="col-sm-2 col-form-label font-weight-bold">Estatus:</label>
                                    <div class="col-sm-2">
                                        <select id="e-estatus" name="e-estatus" class="form-control-sm" style="width: 100%" disabled>
                                            <option value="" selected disabled>Elige una opción</option>
                                            <option value="1">ACTIVA</option>
                                            <option value="0">INACTIVA</option>
                                        </select>
                                    </div>
                                    </div>
                                <br>
                                <div class="form-group row">
                                    <!-- <label for="e-costo" class="col-sm-2 col-form-label font-weight-bold">Costo:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="e-costo" name="e-costo">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="e-costo">Costo:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="e-costo" name="e-costo" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                    <!-- <label for="e-factura" class="col-sm-2 col-form-label font-weight-bold">Factura:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="e-factura" name="e-factura">
                                    </div> -->
                                    <div class="col-md-4 font-weight-bold">
                                        <label for="e-factura">Factura:</label>
                                        <input type="text" class="form-control" id="e-factura" name="e-factura">
                                    </div>
                                    <!-- <label for="e-pago" class="col-sm-2 col-form-label font-weight-bold">Pago:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="e-pago" name="e-pago">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="e-pago">Pago:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="e-pago" name="e-pago" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <!-- <label for="e-venta" class="col-sm-2 col-form-label font-weight-bold">Venta Tarjeta:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="e-venta" name="e-venta">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="e-venta">Venta Tarjeta:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="e-venta" name="e-venta" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                    <!-- <label for="e-reposicion" class="col-sm-2 col-form-label font-weight-bold">Reposición Tarjeta:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="e-reposicion" name="e-reposicion">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="e-reposicion">Reposición Tarjeta:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="e-reposicion" name="e-reposicion" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                    <!-- <label for="e-recargos" class="col-sm-2 col-form-label font-weight-bold">Recargos Pago:</label>
                                    <div class="col-sm-2">
                                        <input type="number" step="any" class="form-control" id="e-recargos" name="e-recargos">
                                    </div> -->
                                    <div class="col-sm-4 font-weight-bold">
                                        <label for="e-recargos">Recargos Pago:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">$</span>
                                            </div>
                                            <input type="number" step="any" class="form-control" id="e-recargos" name="e-recargos" aria-describedby="inputGroupPrepend2">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="e-fechaDeposito" class="col-sm-3 col-form-label font-weight-bold">Fecha Deposito:</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control" id="e-fechaDeposito" name="e-fechaDeposito" readonly>
                                    </div>
                                    <label for="e-movimiento" class="col-sm-3 col-form-label font-weight-bold">No.Movimiento:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="e-movimiento" name="e-movimiento" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="e-observaciones">Observaciones</label>
                                    <textarea class="form-control" id="e-observaciones" name="e-observaciones" rows="3" readonly></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeEditar" data-dismiss="modal">Cerrar</button>
                    <button id="btn-editar" type="button" class="btn btn-primary">Editar</button>
                    <button id="btn-guardar" type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Historico Pensión -->
<div class="modal fade" id="modalHistorico" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Historico de Pensión</h5>
                <button type="button" class="close closeEditar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" id="tblHistorico" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>No.Contrato</th>
                                            <th>F.Alta</th>
                                            <th>F.Baja</th>
                                            <th>No.Tarjeta Sistema</th>
                                            <th>No.Tarjeta Físico</th>
                                            <th>Razón Social</th>
                                            <th>asignado</th>
                                            <th>marca</th>
                                            <th>modelo</th>
                                            <th>color</th>
                                            <th>placas</th>
                                            <th>Tipo</th>
                                            <th>Estatus</th>
                                            <th>Costo</th>
                                            <th>Factura</th>
                                            <th>Pago</th>
                                            <th>venta</th>
                                            <th>reposicion</th>
                                            <th>Recargos</th>
                                            <th>fechaDeposito</th>
                                            <th>movimiento</th>
                                            <th>observaciones</th>
                                            <th>Total&nbsp;Otros</th>
                                            <th>Ficha</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeEditar" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal subir ficha de pago -->
<div class="modal fade bd-example-modal-lg" id="modalFicha" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Subir documento</h5>
                <button type="button" class="close modalClose" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm-subirFicha" method="POST" enctype="multipart/form-data" name="frm-subirFicha">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ficha de Pago</h6>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">
                                        <input id="id_cat_pensiones" type="text" class="form-control" name="id_cat_pensiones" hidden>
                                        <input id="contrato" type="text" class="form-control" name="contrato" hidden>
                                        <div class="mb-4">
                                             <label for="n-fechaAlta" class="col-sm-2 col-form-label font-weight-bold">Fecha Alta:</label>
                                                <div class="col-sm-3">
                                                    <input type="date" class="form-control" id="fechaAltaDoc" name="fechaAltaDoc" required >
                                                </div>

                                            <label for="file2">&nbsp;</label>
                                            <div class="file-drop-area">
                                                <input type="file" id="file2" name="file2" class="file-input" /*onchange="handleFileSelect2(event)"*/ accept=".pdf" required>
                                                <span class="file-drop-text" id="fileDropText">Arrastra y suelta aquí o haz clic para seleccionar</span>
                                                <i class="fas fa-cloud-upload-alt"></i>

                                                <span id='archivoCargado'></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                    <button id="btn-subirFicha" type="submit" class="btn btn-primary">Cargar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
<script>
    $(document).ready(function(){

        $('select[name="estacionamiento"]').select2();
         //$('select[name="estacionamiento_f2"]').select2();
        $('select[name="select"]').select2();
        $('#n-estacionamiento_id').select2({
            dropdownParent: $('#modalNueva')
        });
       /* $('#n-estatus').select2({
            dropdownParent: $('#modalNueva')
        });*/
        /*$('#e-estatus').select2({
            dropdownParent: $('#modalEditar')
        });*/

        $('.loading').fadeOut('slow');

        let rol = parseInt(<?= (int)$this->session->userdata('rol');?>);
        if (rol <= 4) {
            $("#estacionamiento").on("change", function () {
                console.log("entro");
                estacionamiento = $(this).val();
                getContratos(estacionamiento);
                getRazonSocial(estacionamiento);
                getTarjetaSistema(estacionamiento);
                getTarjetaFisica(estacionamiento);
            });
        } else {
            getContratos(estacionamiento = '');
            getRazonSocial(estacionamiento = '');
            getTarjetaSistema(estacionamiento = '');
            getTarjetaFisica(estacionamiento = '');
        }

        

        $('select[name="select"]:not(#fContrato)').prop('disabled',true);

        $("input[name='radio']").click(function() {
            $('select:not([name="estacionamiento"])').prop('selectedIndex', null);
            $('select:not([name="estacionamiento"])').val(null).trigger('change');
            if ($(this).val() === 'contrato') {
                $("#fContrato").prop('disabled', false);
                $("#fRazonSocial, #fTarjetaSistema, #fTarjetaFisica").prop('disabled', true);
            } else if ($(this).val() === 'razonSocial') {
                $("#fRazonSocial").prop('disabled', false);
                $("#fContrato, #fTarjetaSistema, #fTarjetaFisica").prop('disabled', true);
            } else if ($(this).val() === 'tarjetaSistema') {
                $("#fTarjetaSistema").prop('disabled', false);
                $("#fContrato, #fRazonSocial, #fTarjetaFisica").prop('disabled', true);
            } else {
                $("#fTarjetaFisica").prop('disabled', false);
                $("#fContrato, #fRazonSocial, #fTarjetaSistema").prop('disabled', true);
            }
        });

        $("input#todo").click(function() {
            if ($(this).is(":checked")) {
                $('#frm-pensiones select:not(#estacionamiento)').prop('selectedIndex', null);
                $('#frm-pensiones select:not(#estacionamiento)').val(null).trigger('change');
                $('#frm-pensiones select:not(#estacionamiento)').prop('disabled',true);
                $("input[type='radio']").prop("disabled",true);
                $("input#rContrato").prop("checked",true);
            } else {

                $('#frm-pensiones select:not(#estacionamiento)').prop('disabled',false);
                $('select[name="select"]:not(#fContrato)').prop('disabled',true);
                $("input[type='radio']").prop("disabled",false);
                $("input#rContrato").prop("checked",true);
            }

        });

         

        var table = $('#tblPensiones').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    {
                        text: '<i class="fas fa-plus"></i>',
                        titleAttr: 'Nueva',
                        className: 'buttons-nueva',
                        attr: {
                            id: 'nuevaPension'
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    }
                ],
                "columnDefs": [
                    {
                        "targets": [0,7,8,9,10,11,12,15,17,18,19,20,21,22],
                        "visible": false,
                        "searchable": true
                    }
                ],
                initComplete: function(settings, json) {
                    $("#nuevaPension").on("click",function(){
                        $("#modalNueva").modal('show');
                    });
                },
            "language": {
                "url": "<?= base_url(); ?>public/vendor/datatables/language/spanish.json"
            },
            "info": true,
            "scrollY": '53vh',
            "scrollX": true,
            "scrollCollapse": true,
            "paging": false,
            "pageLength": 25,
            "searching": true,
            "ordering": false,
        });

        var tblHistorico = $('#tblHistorico').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    }
                ],
                "columnDefs": [
                    {
                        "targets": [0],
                        "visible": false,
                        "searchable": true
                    }
                ],
                initComplete: function(settings, json) {
                    $("#nuevaPension").on("click",function(){
                        $("#modalNueva").modal('show');
                    });
                },
            "language": {
                "url": "<?= base_url(); ?>public/vendor/datatables/language/spanish.json"
            },
            "info": true,
            "scrollY": '53vh',
            "scrollX": true,
            "scrollCollapse": true,
            "paging": false,
            "pageLength": 25,
            "searching": true,
            "ordering": false,
        });

        function fn_tblPensiones(data) {

            var contadortrue=0;
            var contadorfalse=0;

           // console.log("entra");
  


            table = $('#tblPensiones').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    {
                        text: '<i class="fas fa-plus"></i>',
                        titleAttr: 'Nueva',
                        className: 'buttons-nueva',
                        attr: {
                            id: 'nuevaPension'
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    }
                ],
                "ajax": {
                    type: "POST",
                    url: "getPensiones",
                    data: data
                },
                "drawCallback": function(response) {

                    //console.log(response.json);
                  var api = this.api();
                  var visibleRows=api.rows().data();

                   if(visibleRows.length==0){

                        $("#todas").html("");
                        $("#contadoractivas").html("");
                        $("#contadordesactivas").html("");
                   }

                   //do whatever  
                },
                "columns": [
                    {"data":"id_cat_pensiones","width":"1%"},
                    {"data":"contrato","width":"10%"},
                    {"data":"fechaAlta","width":"10%"},
                    {"data":"fechaBaja","width":"10%"},
                    {"data":"tarjetaSistema","width":"15%"},
                    {"data":"tarjetaFisica","width":"15%"},
                    {"data":"razonSocial","width":"30%"},
                    {"data":"asignado"},
                    {"data":"marca"},
                    {"data":"modelo"},
                    {"data":"color"},
                    {"data":"placas"},
                    {"data":"tipoPension"},
                    {"data":"estatus","width":"5%",
                        "render": function(data, type, full, meta) { 

                            $("#todas").html(full.todas);
                            $("#contadoractivas").html(full.totalOk);
                            $("#contadordesactivas").html(full.totaldesactivas);

                            estatus = '<div class="text-center">'
                            switch (data) {
                                case "1":
                                    estatus+=`<button type='button' class='btn btn-success btn-sm'>ACTIVA</button>`;
                                break;
                                case "0":
                                    estatus+=`<button type='button' class='btn btn-danger btn-sm'>INACTIVA</button>`;
                                
                                break;
                                default:
                                    estatus+=`<button type='button' class='btn btn-danger btn-sm'>INACTIVA</button>`;
                                  
                                break;
                            }
                            estatus+= '</div>';

                            return estatus;
                        }
                    },
                    {
                        "data":"costo",
                        "render": function(data, type, full, meta) {
                            return "$&nbsp;"+data;
                        }
                    },
                    {"data":"factura"},
                    {
                        "data":"pago",
                        "render": function(data, type, full, meta) {
                            return "$&nbsp;"+data;
                        }
                    },
                    {"data":"venta"},
                    {"data":"reposicion"},
                    {"data":"recargos"},
                    {"data":"fechaDeposito"},
                    {"data":"movimiento"},
                    {"data":"observaciones"},
                    {"data": "costoSuma"},
                    {"data":"costoPago"},
                    {"data":"totalOtros"},
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {

                            totalOtros = parseFloat(full.venta) + parseFloat(full.reposicion) + parseFloat(full.recargos);
                            return "$&nbsp;"+formatNumber(totalOtros, 2);
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            totalOtros = parseFloat(full.venta) + parseFloat(full.reposicion) + parseFloat(full.recargos);
                            var sumaGeneral=parseFloat(full.pago)+totalOtros;
                            return "$&nbsp;"+formatNumber(sumaGeneral, 2);
                        }
                    },
                    {
                        "defaultContent": "","width":"2%",
                        "render": function(data, type, full, meta) {

                            if(full.fichaPago == 0){
                                return `<div><button class='subirFichab' data-toggle="tooltip" data-placement="top" title="Subir ficha de pago"><i class="fa fa-lock"></i></button></div>`;
                            }


                            else if(full.fichaPago == null){
                                return `<div><button class='subirFicha' data-toggle="tooltip" data-placement="top" title="Subir ficha de pago"><i class="fas fa-upload"></i></button></div>`;
                            } else {
                                return `<button class='verFicha' onclick="window.open('../detalle/viewFile/pensiones/` + full.contrato + `/` + full.fichaPago + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ficha"><i class="far fa-file-pdf fa-lg"></i></button>`;
                            }
                        }
                    },
                    {
                        "defaultContent": "","width":"2%",
                        "render": function(data, type, full, meta) {



                             return `<div><button class='verDetalle' data-toggle="tooltip" data-placement="top" title="Detalle"><i class="fas fa-eye"></i></button></div>`;
                                


                           


                        }
                    },
                    {
                        "defaultContent": "","width":"2%",
                        "render": function(data, type, full, meta) {
                            return `<div><button class='verHistorico' data-toggle="tooltip" data-placement="top" title="Historico"><i class="fas fa-list"></i></i></button></div>`;
                        }
                    }                  
                ],
                "columnDefs": [
                    {
                        "targets": [0,7,8,9,10,11,12,15,17,18,19,20,21,22,23,24,25],
                        "visible": false,
                        "searchable": true
                    },
                    {
                        className: "dt-body-right",
                        targets: [13,14,16,23,24],
                        className: "dt-body-right"
                    },
                    {
                        className: "dt-body-center",
                        targets: [2,3,4,5],
                        className: "dt-body-center"
                    }
                ],
                fixedHeader: true,
                order: [
                    [0, 'ASC']
                ],
                initComplete: function(settings, json) {
                    $("#nuevaPension").on("click",function(){
                        $("#modalNueva").modal('show');
                    });

                    $("#tblPensiones tbody").on("click", ".verDetalle", function () {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.id_cat_pensiones;
                      // alert(data.fichaPago);
                       $("#banderaEdit").val(0);

                        if(data.fichaPago==0){

                          $("#banderaEdit").val(1);
                        }


                        $.post("extraerDetalle", {id:id},
                        function(result){

                            $.each(result.data[0], function(clave, valor){
                                $("#e-"+clave).val(valor);
                            });

                            setTimeout(function() {
                                $('#e-estacionamiento_id').prop('selectedIndex', result.data[0].estacionamiento_id);
                                $('#e-estacionamiento_id').val(result.data[0].estacionamiento_id).trigger('change');

                                $('#e-estatus').prop('selectedIndex', result.data[0].estatus);
                                $('#e-estatus').val(result.data[0].estatus).trigger('change'); 
                            }, 500);

                            if(result.data[0].archivo != null) {
                                $(".contrato").html(`<button type="button" class='verContrato' onclick="window.open('../detalle/viewFile/pensiones/` + result.data[0].contrato + `/` + result.data[0].archivo + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Contrato"><i class="far fa-file-pdf fa-lg"></i></button>`);
                            }

                        },'json');
                        $("#btn-guardar").hide();
                        $("#modalEditar").modal('show');
                    });
                    // Subir ficha de pago
                    $("#tblPensiones tbody").on("click", ".subirFicha", function() {
                        let data = table.row($(this).parents("tr")).data();
            
                        let id = data.id_cat_pensiones;
                        let fechaAlta=data.fechaAlta;

                        var obtieneFecha=fechaAlta.split('-');

                        var anio=obtieneFecha[0];
                        var mes=obtieneFecha[1];
                        var dia=obtieneFecha[2];

                        var fechaArmada=dia+"-"+mes+"-"+anio;

                      
                        $("#fechaAltaDoc").val(fechaArmada);

                       //alert(fechaAlta);
                        let contrato = data.contrato;
                        $("#contrato").val(contrato);
                        $("#id_cat_pensiones").val(id);
                        $("#archivoCargado").html("");
                        $("#modalFicha").modal('show');
                    });

                    $("#tblPensiones tbody").on("click", ".verHistorico", function () {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.id_cat_pensiones;
                      //  alert(data.contrato);
                        var estacionamiento=$("#estacionamiento").val();

                      

                        fn_tblHistorico(id,data.contrato,estacionamiento);
                        $("#modalHistorico").modal('show');
                    });
                },
                footerCallback: function(row, data, start, end, display) {
                    var api = this.api();
                   // var  precioCosto=0;

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                    };

                    // Total oall pages
               
                  
                    costo = api.column(23).data().reduce(function(a,b,validaStatus) { //antes columna 14
                           return parseFloat(intVal(a)) + parseFloat(intVal(b));
                
                    }, 0);


                    pago = api.column(24).data().reduce(function(a,b) { //antes 16
                        return parseFloat(intVal(a)) + parseFloat(intVal(b));
                    }, 0);


                    totalOtros = api.column(25).data().reduce(function(a,b) { //antes 16
                        return parseFloat(intVal(a)) + parseFloat(intVal(b));
                    }, 0);


                    /*totalOtros = api.rows().data().toArray().reduce(function(acc, curr) {
                        return acc + (parseFloat(curr.venta) + parseFloat(curr.reposicion) + parseFloat(curr.recargos));
                    }, 0);*/

                    totalGral=pago+totalOtros;

                    $(api.column(13).footer()).html("Total");
                    $(api.column(14).footer()).html("$"+formatNumber(costo, 2));
                    $(api.column(16).footer()).html("$"+formatNumber(pago, 2));
                    $(api.column(26).footer()).html("$"+formatNumber(totalOtros, 2));
                    $(api.column(27).footer()).html("$"+formatNumber(totalGral, 2));
                },
                "language": {
                    "url": "<?= base_url(); ?>public/vendor/datatables/language/spanish.json"
                },
                "info": true,
                "scrollY": '53vh',
                "scrollX": true,
                "scrollCollapse": true,
                "paging": false,
                "pageLength": 25,
                "searching": true,
                "ordering": false,
            });


        }

        function fn_tblHistorico(id,contrato,estacionamiento) {
            tblHistorico = $('#tblHistorico').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    }
                ],
                "ajax": {
                    type: "POST",
                    url: "extraerHistorico",
                    data: {id:id,contrato:contrato,estacionamiento:estacionamiento}
                },
                "columns": [
                    {"data":"id_cat_pensiones"},
                    {"data":"contrato"},
                    {"data":"fechaAlta"},
                    {"data":"fechaBaja"},
                    {"data":"tarjetaSistema"},
                    {"data":"tarjetaFisica"},
                    {"data":"razonSocial"},
                    {"data":"asignado"},
                    {"data":"marca"},
                    {"data":"modelo"},
                    {"data":"color"},
                    {"data":"placas"},
                    {"data":"tipoPension"},
                    {"data":"estatus",
                        "render": function(data, type, full, meta) { 
                            estatus = '<div class="text-center">'
                            switch (data) {
                                case "1":
                                    estatus+=`ACTIVA`;
                                break;
                                case "0":
                                    estatus+=`INACTIVA`;
                                break;
                                default:
                                    estatus+=`INACTIVA`;
                                break;
                            }
                            estatus+= '</div>';
                            return estatus;
                        }
                    },
                    {
                        "data":"costo",
                        "render": function(data, type, full, meta) {
                            return "$&nbsp;"+data;
                        }
                    },
                    {"data":"factura"},
                    {
                        "data":"pago",
                        "render": function(data, type, full, meta) {
                            return "$&nbsp;"+data;
                        }
                    },
                    {"data":"venta"},
                    {"data":"reposicion"},
                    {"data":"recargos"},
                    {"data":"fechaDeposito"},
                    {"data":"movimiento"},
                    {"data":"observaciones"},
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            totalOtros = parseFloat(full.venta) + parseFloat(full.reposicion) + parseFloat(full.recargos);
                            return "$&nbsp;"+formatNumber(totalOtros, 2);
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {

                           // console.log(full.fichaPago);

                            if(full.fichaPago=='' || full.fichaPago==null){

                                return `Sin ficha`;
                            }else{

                                 return `<button class='verFicha' onclick="window.open('../detalle/viewFile/pensiones/` + full.contrato + `/` + full.fichaPago + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ficha"><i class="far fa-file-pdf fa-lg"></i></button>`;
                            }
                           
                        }
                    }                
                ],
                "columnDefs": [
                    {
                        "targets": [0],
                        "visible": false,
                        "searchable": true
                    },
                    {
                        className: "dt-body-right",
                        targets: [13,14,16,23],
                        className: "dt-body-right"
                    },
                    {
                        className: "dt-body-center",
                        targets: [2,3,4,5],
                        className: "dt-body-center"
                    }
                ],
                fixedHeader: true,
                order: [
                    [0, 'ASC']
                ],
                "language": {
                    "url": "<?= base_url(); ?>public/vendor/datatables/language/spanish.json"
                },
                "info": true,
                "scrollY": '53vh',
                "scrollX": true,
                "scrollCollapse": true,
                "paging": false,
                "pageLength": 25,
                "searching": true,
                "ordering": false,
            });
        }

         $("#file2").change(function(){
           var archivo= document.getElementById("file2").files[0].name;
           console.log(archivo);
           $("#archivoCargado").html(archivo);


        });


        $("#frm-subirFicha").submit(function(){

            var formData = new FormData($(this)[0]);

            $.ajax({
                url: "subirFicha",
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                //cache: false,
                processData: false,
                beforeSend: function() {
                    $('.loading').fadeIn('slow');
                },
                success: function(data) {
                    if (data.validacion) {
                        Swal.fire({
                            title: 'Correcto',
                            html: data.mensaje,
                            icon: data.icon,
                            allowOutsideClick: false
                        });
                        $(".modal input,textarea").val("");
                        $('.modal #fileDropText').text("Arrastra y suelta aquí o haz clic para seleccionar");
                        $(".modal").modal("hide");
                        table.ajax.reload();
                    } else {
                        Swal.fire({
                            title: 'Error',
                            html: data.mensaje,
                            icon: data.icon,
                            allowOutsideClick: false
                        });
                    }
                    $('.loading').fadeOut('slow');
                }
            });


             return false;


        });







       /*$("#frm-subirFicha").on("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            console.log(formData);

            return false;

            $.ajax({
                url: "subirFicha",
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('.loading').fadeIn('slow');
                },
                success: function(data) {
                    if (data.validacion) {
                        Swal.fire({
                            title: 'Correcto',
                            html: data.mensaje,
                            icon: data.icon,
                            allowOutsideClick: false
                        });
                        $(".modal input,textarea").val("");
                        $('.modal #fileDropText').text("Arrastra y suelta aquí o haz clic para seleccionar");
                        $(".modal").modal("hide");
                        table.ajax.reload();
                    } else {
                        Swal.fire({
                            title: 'Error',
                            html: data.mensaje,
                            icon: data.icon,
                            allowOutsideClick: false
                        });
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });*/

        $("#parames").click(function(){

            if($("input[name='parames']:checked").val()== 1){

                $("#fechaMes").prop('required', true);
            }else{

                $("#fechaMes").prop('required',false);
            } 

        });

        $("#fechaMes").change(function(){

            var textoMes = $(this).val().split('-');
            var MesFiltro="";

            switch(textoMes[1]) {
                case '01':
                    MesFiltro="Enero";
                // code block
                break;
                case '02':
                    MesFiltro="Febrero";
                // code block
                break;
                case '03':
                    MesFiltro="Marzo";
                // code block
                break;
                case '04':
                    MesFiltro="Abril";
                // code block
                break;
                case '05':
                    MesFiltro="Mayo";
                // code block
                break;
                case '06':
                    MesFiltro="Junio";
                // code block
                break;
                 case '07':
                    MesFiltro="Julio";
                // code block
                break;
                case '08':
                    MesFiltro="Agosto";
                // code block
                break;
                 case '09':
                    MesFiltro="Septiembre";
                // code block
                break;
                 case '10':
                    MesFiltro="Octubre";
                // code block
                break;
                case '11':
                    MesFiltro="Noviembre";
                // code block
                break;
                case '12':
                    MesFiltro="Diciembre";
                // code block
                break;
               default:
                // code block
            }

            $("#textMes").html(MesFiltro);
            $("#textMes2").html(MesFiltro);

              // console.log(textoMes[1]);

        });


        $("#frm-pensiones").submit(function(event) {
            event.preventDefault();
              if($("input[name='parames']:checked").val() != 1){ 
                $("#fechaMes").val("");
            }
         

            var data = $(this).serializeArray();
            fn_tblPensiones(data);



        });

        $("#frm-nueva").submit(function(event) {
            event.preventDefault();
            $("#n-estatus").prop('disabled', false);
            var formData = new FormData(this);


            $.ajax({
                url: "nuevaPension",
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('.loading').fadeIn('slow');
                },
                success: function(response) {
                    if(response.validacion){
                        getContratos(response.data['estacionamiento_id']);
                        getRazonSocial(response.data['estacionamiento_id']);
                        getTarjetaSistema(response.data['estacionamiento_id']);
                        getTarjetaFisica(response.data['estacionamiento_id']);

                        Swal.fire({
                            title:'Correcto',
                            text: response.mensaje,
                            icon: response.icon,
                            allowOutsideClick:false
                        }).then((result) =>{
                            setTimeout(function() {

                                $("#n-estatus").prop('disabled',true);
                                limpiar(response.data['estacionamiento_id'], response.data['contrato']);
                            }, 500);
                        });
                    } else if(!response.validacion && response.icon == "warning"){
                        Swal.fire({
                            title:'Advertencia',
                            html: response.mensaje,
                            icon: response.icon,
                            allowOutsideClick:false
                        }).then((result) =>{
                            // limpiar(null,null);
                        });
                    } else {
                        Swal.fire({
                            title:'Error',
                            text: response.mensaje,
                            icon: response.icon,
                            allowOutsideClick:false
                        }).then((result) =>{
                            limpiar(null,null);
                        });
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });

        $("#frm-editar").submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);


            $.ajax({
                url: "editarPension",
                type: "POST",
                dataType: 'JSON',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('.loading').fadeIn('slow');
                },
                success: function(response) {
                    if(response.validacion){
                        Swal.fire({
                            title:'Correcto',
                            text: response.mensaje,
                            icon: response.icon,
                            allowOutsideClick:false
                        }).then((result) =>{
                            setTimeout(function() {
                                limpiar(response.data['estacionamiento_id'], response.data['contrato']);
                            }, 500);
                        });
                    }else{
                        Swal.fire({
                            title:'Error',
                            text: response.mensaje,
                            icon: response.icon,
                            allowOutsideClick:false
                        }).then((result) =>{
                            limpiar(null,null);
                        });
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });

        $("#btn-editar").click(function(){

            var band=$("#banderaEdit").val();

            if(band==1){
                $("#e-estatus").prop('disabled', false);
                $("#e-tipoPension").prop("disabled",true);
                $("#e-costo").prop("disabled",true);
                $("#e-factura").prop("disabled",true);
                $("#e-pago").prop("disabled",true);
                $("#e-venta").prop("disabled",true);
                $("#e-reposicion").prop("disabled",true);


            }else{
            $("#frm-editar input").removeAttr("readonly");
            $("#frm-editar textarea").removeAttr("readonly");
            $("#e-estatus").prop('disabled', false);
             }

            $("#btn-editar").hide();


            $("#btn-guardar").show();
        });

        $("#limpiar").click(function() {
            limpiar(null, null);
        });

        $("#filtrosdia").submit(function(){

                var datosFiltro=$(this).serialize();

                alert(datosFiltro);

                return false;

        });

         $("#n-estatus").prop('disabled', true);



        $("#n-tipoPension").change(function(){

               

                if($(this).val()=='CORTESIA'){
                    $('select#n-estatus').prop('selectedIndex',1);
                    $('select#n-estatus').val(1).trigger('change');
                    $("#n-pago").val(0);
                    $("#n-pago").prop('readonly', true);


                }else{
                    $('select#n-estatus').prop('selectedIndex',0);
                    $('select#n-estatus').val(0).trigger('change');
                    $("#n-pago").val("");
                    $("#n-pago").prop('readonly', false);

                }

        });


          /*$("#estacionamiento_f2").on("change", function() {
            
            if($(this).val()!=null){

                alert($(this).val());
            }
            




        });*/


        $(".modalClose").click(function() {
            // limpiar(null, null);
            $('#frm-nueva select').prop('selectedIndex', null);
            $('#frm-nueva select').val(null).trigger('change');
            $("#frm-nueva input").attr("readonly",false);
            $("#frm-nueva textarea").attr("readonly",false);
            $(".modal").modal('hide');
        });

        $(".closeEditar").click(function(){
            // $(".modal").modal('hide');
            $('#frm-editar select').prop('selectedIndex', null);
            $('#frm-editar select').val(null).trigger('change');
            $("#frm-editar input").attr("readonly",true);
            $("#frm-editar textarea").attr("readonly",true);
            $("#e-estatus").prop('disabled', true);
            $("#btn-editar").show();
            $("#btn-guardar").hide();
            $(".modal").modal('hide');
        });

        function limpiar(estacionamiento, contrato){
            console.log(estacionamiento);
            console.log(contrato);

            // general
            $('select#estacionamiento').prop('selectedIndex', estacionamiento);
            $('select#estacionamiento').val(estacionamiento).trigger('change');
            
            $('select#fContrato').prop('selectedIndex', contrato);
            $('select#fContrato').val(contrato).trigger('change');
            $("#buscar").submit();

            // modal nueva
            $('#frm-nueva select').prop('selectedIndex', null);
            $('#frm-nueva select').val(null).trigger('change');
            $("#frm-nueva input").val("").attr("readonly",false);
            $("#frm-nueva textarea").val("").attr("readonly",false);

            //modal editar
            $('#frm-editar select').prop('selectedIndex', null);
            $('#frm-editar select').val(null).trigger('change');
            $("#frm-editar input").attr("readonly",true);
            $("#frm-editar textarea").attr("readonly",true);
            $("#e-estatus").prop('disabled', true);
            $("#btn-editar").show();
            $("#btn-guardar").hide();

            $(".modal").modal('hide');
        }
    });

    function getContratos(estacionamiento){
        $.post('getContratos',{estacionamiento:estacionamiento},
        function(result){
            $("#fContrato").html('<option value="" selected disabled>Elige un contrato</option>');
            $("#fContrato").append(result.data);
        },'json');
    }

    function getRazonSocial(estacionamiento){
        $.post('getRazonSocial',{estacionamiento:estacionamiento},
        function(result){
            $("#fRazonSocial").html('<option value="" selected disabled>Elige una razón social</option>');
            $("#fRazonSocial").append(result.data);
        },'json');
    }

    function getTarjetaSistema(estacionamiento){
        $.post('getTarjetaSistema',{estacionamiento:estacionamiento},
        function(result){
            $("#fTarjetaSistema").html('<option value="" selected disabled>Elige una tarjeta de sistema</option>');
            $("#fTarjetaSistema").append(result.data);
        },'json');
    }

    function getTarjetaFisica(estacionamiento){
        $.post('getTarjetaFisica',{estacionamiento:estacionamiento},
        function(result){
            $("#fTarjetaFisica").html('<option value="" selected disabled>Elige una tarjeta física</option>');
            $("#fTarjetaFisica").append(result.data);
        },'json');
    }

    function handleFileSelect(event) {
        const file = event.target.files[0];
        const fileDropText = document.getElementById("fileDropText");

        if (file) {
            fileDropText.innerText = "Archivo seleccionado: " + file.name;
        } else {
            fileDropText.innerText = "Arrastra y suelta aquí o haz clic para seleccionar";
        }
    }

    function formatNumber(number, decimals) {
        // Función para formatear números
        var n = number.toFixed(decimals),
            parts = n.toString().split('.'),
            thousands = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        return thousands + (parts[1] ? '.' + parts[1] : '');
    }
</script>