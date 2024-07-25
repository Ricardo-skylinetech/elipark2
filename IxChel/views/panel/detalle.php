                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Detalle de Estacionamiento: <b id="estacionamiento">--</b></h1>

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETOS EXPEDIDOS SISTEMA</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bExpedidos" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th class="text-center">Folio&nbsp;de&nbsp;Apertura</th>
                                                    <th class="text-center">Folio&nbsp;de&nbsp;Cierre</th>
                                                    <th>F.Expedido</th>
                                                    <th>F.Brincado</th>
                                                    <th>Real</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-center">Folio&nbsp;de&nbsp;Apertura</th>
                                                    <th class="text-center">Folio&nbsp;de&nbsp;Cierre</th>
                                                    <th>F.Expedido</th>
                                                    <th>F.Brincado</th>
                                                    <th>Real</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">VALES DE DESCUENTO</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_vDescuento" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Creación</th>
                                                    <th>Recuperación</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Creación</th>
                                                    <th>Recuperación</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETOS VALET</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bValet" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Zona</th>
                                                    <th>Cantidad</th>
                                                    <th>Inicio</th>
                                                    <th>Fin</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th>Inicio</th>
                                                    <th>Fin</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETO PERDIDO VALET</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bpValet" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">VALES A RETORNAR (OTROS COBROS)</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_vRetornar" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETOS SIN COBRO(Rotación)</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bSinCobro" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Total</th>
                                                    <th>Comprobante</th>
                                                    <th>Partida</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th>Total</th>
                                                    <th>Comprobante</th>
                                                    <th>Partida</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETOS DE OPERACIÓN</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bOperacion" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Total</th>
                                                    <th>Comprobante</th>
                                                    <th>Partida</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th>Total</th>
                                                    <th>Comprobante</th>
                                                    <th>Partida</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CREACION DE VOUCHERS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_vouchers" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Entregados</th>
                                                    <th>Recuperados</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Entregados</th>
                                                    <th>Recuperados</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETOS PERDIDOS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bPerdidos" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                    <th>Importe</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">INFORMATIVO PREPAGOS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bInfoPrepago" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Entregados</th>
                                                    <th>Recuperados</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Entregados</th>
                                                    <th>Recuperados</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">OTROS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bOtros" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Importe</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th>Importe</th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- AQUI TERMINA LA PRIMER COLUMNA DE TABLAS -->
                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETOS FISICOS SISTEMA</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bFisicos" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th class="text-center">Folio&nbsp;de&nbsp;Apertura</th>
                                                    <th class="text-center">Folio&nbsp;de&nbsp;Cierre</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-center">Folio&nbsp;de&nbsp;Apertura</th>
                                                    <th class="text-center">Folio&nbsp;de&nbsp;Cierre</th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETOS COBRADOS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bCobrados" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                    <th>Importe</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">TARIFAS ESPECIALES</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_tEspeciales" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                    <th>Importe</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">RECOBROS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_recobros" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                    <th>Importe</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">PENSIONES</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_pensiones" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                    <th>Importe</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">VALIDACIONES (INFORMATIVO)</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_validaciones" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">INFORMATIVOS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bInformativo" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">BOLETOS PREPAGO</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bPrepago" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                    <th>Importe</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">DETALLE DE CAJEROS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_detalleCajeros" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Importe</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                    <th>Importe</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">INFORMATIVO OTROS MEDIOS DE PAGO </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_bInfoOtrosMedios" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Cantidad</th>
                                                    <th>Tarifa</th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">OBSERVACIONES</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card shadow">
                                                <div class="card-header">
                                                    <h6 class="m-0 font-weight-bold text-primary">Operativo</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="historial_ope" class="scrollable-div">
                                                    
                                                    </div>
                                                    <form id="frm-operativo" method="POST" class="text-right">
                                                        <textarea class="form-control" id="obs_operativo" name="obs_operativo" rows="3" placeholder="Dejar un comentario" required></textarea>
                                                        <button type="submit" class="btn btn-primary mt-3 text-center">Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card shadow">
                                                <div class="card-header">
                                                    <h6 class="m-0 font-weight-bold text-primary">Administrador</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="historial_admin" class="scrollable-div">
                                                    
                                                    </div>
                                                    <form id="frm-admin" method="POST" class="text-right">
                                                        <textarea class="form-control" id="obs_admin" name="obs_admin" rows="3" placeholder="Dejar un comentario" required></textarea>
                                                        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card shadow">
                                                <div class="card-header">
                                                    <h6 class="m-0 font-weight-bold text-primary">Incidencias</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div id="historial_incidencias" class="scrollable-div">
                                                    
                                                    </div>
                                                    <form id="frm-incidencias" method="POST" class="text-right">
                                                        <textarea class="form-control" id="obs_incidencias" name="obs_incidencias" rows="3" placeholder="Dejar un comentario" required></textarea>
                                                        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                    <!-- Modal subir Comprobante sin cobro-->
                    <div class="modal fade bd-example-modal-lg" id="modalComprobanteSinCobro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Subir documento</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="frm-boletosincobroPDF" method="POST">
                                    <div class="modal-body">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Comprobante boleto sin cobro</h6>
                                            </div>
                                            <div class="card-body">                                
                                                <div class="container-fluid">
                                                    <input id="id_sincobro" type="number" class="form-control" name="id_sincobro" hidden>
                                                    <div class="mb-4">
                                                        <label for="file2">&nbsp;</label>
                                                        <div class="file-drop-area">
                                                            <input type="file" id="file" name="file" class="file-input" onchange="handleFileSelect1(event)" accept=".pdf" required>
                                                            <span class="file-drop-text" id="fileDropText1">Arrastra y suelta aquí o haz clic para seleccionar</span>
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Cargar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal subir Comprobante sin cobro-->
                    <div class="modal fade bd-example-modal-lg" id="modalComprobanteOperacion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Subir documento</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="frm-boletoOperacionPDF" method="POST">
                                    <div class="modal-body">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Comprobante boleto de operación</h6>
                                            </div>
                                            <div class="card-body">                                
                                                <div class="container-fluid">
                                                    <input id="id_operacion" type="number" class="form-control" name="id_operacion" hidden>
                                                    <div class="mb-4">
                                                        <label for="file2">&nbsp;</label>
                                                        <div class="file-drop-area">
                                                            <input type="file" id="file" name="file" class="file-input" onchange="handleFileSelect2(event)" accept=".pdf" required>
                                                            <span class="file-drop-text" id="fileDropText2">Arrastra y suelta aquí o haz clic para seleccionar</span>
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Cargar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal subir Comprobante Otros-->
                    <div class="modal fade bd-example-modal-lg" id="modalComprobantes" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Subir documento</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="frm-boletosPDF" method="POST">
                                    <div class="modal-body">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 id="comprobanteTipo" class="m-0 font-weight-bold text-primary"></h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="container-fluid">
                                                    <input id="tipoComprobante" type="text" class="form-control" name="tipoComprobante" hidden>
                                                    <div class="mb-4">
                                                        <label for="file2">&nbsp;</label>
                                                        <div class="file-drop-area">
                                                            <input type="file" id="file" name="file" class="file-input" onchange="handleFileSelect3(event)" accept=".pdf" required>
                                                            <span class="file-drop-text" id="fileDropText3">Arrastra y suelta aquí o haz clic para seleccionar</span>
                                                            <i class="fas fa-cloud-upload-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Cargar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <span id="partida_id" style="display:none;"><?= $partida_id; ?></span>
                    <?php $this->load->view('templates/footer'); ?>
                    <script>
                        $(document).ready(function() {

                            let partida_id = parseInt($("#partida_id").text());
                            let estacionamiento_id;

                            let tbl_bExpedidos = $('#tbl_bExpedidos').DataTable({
                                destroy: true,
                                dom: 'Bfrtip',
                                buttons: [
                                    {
                                        extend:    'excelHtml5',
                                        text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                        titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Boletos Expedidos');
                                        }
                                    },
                                    {
                                        text: '<i class="fas fa-file-upload fa-lg"></i>',
                                        titleAttr: 'Subir',
                                        attr:{
                                            id : 'comprobanteExpedidos'
                                        }
                                    }
                                ],
                                "ajax": {
                                    url: "../../detalle/getBexpedidos",
                                    type: "POST",
                                    dataType: 'json',
                                    data: {
                                        id:partida_id
                                    }
                                },
                                "columns": [
                                    {"data": "id_expedidos"},
                                    {"data": "concepto"},
                                    {"data": "apertura",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                    {"data": "cierre",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                    {"data": "expedido_sistema",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                    {"data": "folios_brincados",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                    {"data": "expedido_real",render: $.fn.dataTable.render.number(',', '.', 0, '')}
                                ],
                                "columnDefs": [
                                    {
                                        "targets": [0],
                                        "visible": false,
                                        "searchable": true
                                    },
                                    { width: '5%', targets: 0 },
                                    {
                                        // className: "dt-head-center", targets: [ 2,3 ],
                                        className: "dt-body-right", targets: [ 2,3,4,5,6 ]
                                    }
                                ],
                                initComplete: function (settings, json) {
                                    $("#estacionamiento").html(json.data[0].estacionamiento+" - "+json.data[0].fechaIngreso);
                                    estacionamiento_id = json.data[0]?.estacionamiento_id;
                                    if(json.comprobante != false){
                                        var ruta = json.comprobante[0].ruta;
                                        $("#comprobanteExpedidos").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_expedidos/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                    }
                                    fn_tbl_bFisicos(partida_id);
                                    // console.log(json.data[0]);
                                    fn_tbl_detalleCajeros(json.data[0]);
                                    $("#comprobanteExpedidos").on("click", function() {
                                            $("#tipoComprobante").val("boletos_expedidos");
                                            $("#comprobanteTipo").html("Comprobante Boletos Expedidos");
                                            $("#modalComprobantes").modal('show');
                                        });
                                },
                                footerCallback: function (row, data, start, end, display) {
                                    var api = this.api();
                        
                                    // Remove the formatting to get integer data for summation
                                    var intVal = function (i) {
                                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                    };
                        
                                    // Total over all pages
                                    totalApertura = api
                                        .column(2)
                                        .data()
                                        .reduce(function (a, b) {
                                            return intVal(a) + intVal(b);
                                        }, 0);

                                    totalCierre = api
                                        .column(3)
                                        .data()
                                        .reduce(function (a, b) {
                                            return intVal(a) + intVal(b);
                                        }, 0);

                                    totalCxpedido = api
                                        .column(4)
                                        .data()
                                        .reduce(function (a, b) {
                                            return intVal(a) + intVal(b);
                                        }, 0);

                                    totalBrincado = api
                                        .column(5)
                                        .data()
                                        .reduce(function (a, b) {
                                            return intVal(a) + intVal(b);
                                        }, 0);

                                    totalReal = api
                                        .column(6)
                                        .data()
                                        .reduce(function (a, b) {
                                            return intVal(a) + intVal(b);
                                        }, 0);
                        
                                    // Total over this page
                                    // pageTotal = api
                                    //     .column(4, { page: 'current' })
                                    //     .data()
                                    //     .reduce(function (a, b) {
                                    //         return intVal(a) + intVal(b);
                                    //     }, 0);
                        
                                    // Update footer
                                    $(api.column(1).footer()).html("Total");
                                    // $(api.column(4).footer()).html(formatNumber(totalCxpedido));
                                    $(api.column(5).footer()).html(formatNumber(totalBrincado));
                                    $(api.column(6).footer()).html(formatNumber(totalReal));
                                },
                                "language": {
                                    "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                },
                                "info": true,
                                "scrollY": '52vh',
                                "scrollX" : true,
                                "scrollCollapse": false,
                                "paging": true,
                                "pageLength": 25,
                                "searching": true,
                                "ordering": false,
                            });

                            fn_tbl_bFisicos = function(partida_id){
                                let tbl_bFisicos = $('#tbl_bFisicos').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                            exportOptions: {
                                                columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                            },
                                            customize: function(xlsx) {
                                                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                                
                                                // Modificar estilo de la primera fila (título)
                                                $('row:first c', sheet).attr('s', '42');
                                                $('row:first c', sheet).attr('s', '55');
                                                
                                                // Centrar el texto del título
                                                $('row:first c', sheet).each(function() {
                                                    $('c[r="A1"]', sheet).attr('s', '2');
                                                });
                                                
                                                // Cambiar el color de fondo del título
                                                $('row:first c', sheet).each(function() {
                                                    $(this).attr('s', '5');
                                                });
                                                
                                                // Añadir el texto del título
                                                $('row:first c t', sheet).text('Boletos Fisicos');
                                            }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteFisicos'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        url: "../../detalle/getBfisicos",
                                        type: "POST",
                                        dataType: 'json',
                                        data: {
                                            id:partida_id
                                        }
                                    },
                                    "columns": [
                                        {"data": "id_fisicos"},
                                        {"data": "concepto"},
                                        {"data": "apertura",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "cierre",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "total",render: $.fn.dataTable.render.number(',', '.', 0, '')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteFisicos").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_fisicos/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bCobrados(partida_id);
                                        // console.log(json.data[0]);
                                        $("#comprobanteFisicos").on("click", function() {
                                                $("#tipoComprobante").val("boletos_fisicos");
                                                $("#comprobanteTipo").html("Comprobante Boletos Fisicos");
                                                $("#modalComprobantes").modal('show');
                                            });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();

                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };

                                        // Total over all pages
                                        totalApertura = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalCierre = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalReal = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);

                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        // $(api.column(2).footer()).html(formatNumber(totalApertura));
                                        // $(api.column(3).footer()).html(formatNumber(totalCierre));
                                        $(api.column(4).footer()).html(formatNumber(totalReal));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bCobrados = function(partida_id){
                                let tbl_bCobrados = $('#tbl_bCobrados').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Boletos Cobrados');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteCobrados'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBcobrados",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_cobrados"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteCobrados").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_cobrados/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bVales(partida_id);
                                        $("#comprobanteCobrados").on("click", function() {
                                            $("#tipoComprobante").val("boletos_cobrados");
                                            $("#comprobanteTipo").html("Comprobante Boletos Cobrados");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bVales = function(partida_id){
                                let tbl_vDescuento = $('#tbl_vDescuento').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Vales de descuento');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteValesDescuento'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getValesDescuento",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_vales_descuento"},
                                        {"data": "concepto"},
                                        {"data": "creacion",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "recuperacion",render: $.fn.dataTable.render.number(',', '.', 0, '')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteValesDescuento").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_vales_descuento/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_tEspeciales(partida_id);
                                        $("#comprobanteValesDescuento").on("click", function() {
                                            $("#tipoComprobante").val("boletos_vales_descuento");
                                            $("#comprobanteTipo").html("Comprobante Boletos Vales Descuento");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCreacion = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalRecuperacion = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCreacion));
                                        $(api.column(3).footer()).html(formatNumber(totalRecuperacion));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_tEspeciales = function(partida_id){
                                let tbl_tEspeciales = $('#tbl_tEspeciales').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Tarifas Especiales');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteTarifasEspeciales'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getTarifasEspeciales",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_tarifas_especiales"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0)},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteTarifasEspeciales").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_tarifas_especiales/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bRecobros(partida_id);
                                        $("#comprobanteTarifasEspeciales").on("click", function() {
                                            $("#tipoComprobante").val("boletos_tarifas_especiales");
                                            $("#comprobanteTipo").html("Comprobante Boletos Tarifas Especiales");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bRecobros = function(partida_id){
                                let tbl_recobros = $('#tbl_recobros').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Recobros');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteRecobros'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBrecobros",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_recobros"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteRecobros").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_recobros/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bValet(partida_id);
                                        $("#comprobanteRecobros").on("click", function() {
                                            $("#tipoComprobante").val("boletos_recobros");
                                            $("#comprobanteTipo").html("Comprobante Boletos Recobros");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bValet = function(partida_id){
                                let tbl_bValet = $('#tbl_bValet').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Boletos Valet');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteValet'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBvalet",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_boletos_valet"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "inicio",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "fin",render: $.fn.dataTable.render.number(',', '.', 0, '')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteValet").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_valet/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_valesRetornar(partida_id);
                                        $("#comprobanteValet").on("click", function() {
                                            $("#tipoComprobante").val("boletos_valet");
                                            $("#comprobanteTipo").html("Comprobante Boletos Valet");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalInicio = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalFin = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(3).footer()).html(formatNumber(totalInicio));
                                        $(api.column(4).footer()).html(formatNumber(totalFin));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_valesRetornar = function(partida_id){
                                let tbl_vRetornar = $('#tbl_vRetornar').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Vales Retornar');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteValesRetornar'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getValesretornar",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_vales_retorno"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteValesRetornar").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_vales_retornar/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bPensiones(partida_id);
                                        $("#comprobanteValesRetornar").on("click", function() {
                                            $("#tipoComprobante").val("boletos_vales_retornar");
                                            $("#comprobanteTipo").html("Comprobante Boletos Vales Retornar");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(3).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bPensiones = function(partida_id){
                                let tbl_pensiones = $('#tbl_pensiones').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Pensiones');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobantePensiones'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBpensiones",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_pensiones"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobantePensiones").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_pensiones/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bSinCobro(partida_id);
                                        $("#comprobantePensiones").on("click", function() {
                                            $("#tipoComprobante").val("boletos_pensiones");
                                            $("#comprobanteTipo").html("Comprobante Boletos Pensiones");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bSinCobro = function(partida_id){
                                let tbl_bSinCobro = $('#tbl_bSinCobro').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Boletos sin cobro');
                                        }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBsinCobro",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_sincobro"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "total",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "partida_id",
                                            "render": function(data, type, full, meta) {
                                            acciones = ``;
                                            if(full.comprobante != null){
                                                acciones += `<button class='verComprobante' onclick="window.open('../../detalle/viewFile/boletos_sincobro/`+partida_id+`/`+full.comprobante+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver comprobante"><i class="fas fa-eye"></i></button>`;
                                            }else{
                                                acciones += `<button class='subirComprobante' data-toggle="tooltip" data-placement="top" title="Subir comprobante"><i class="fas fa-file-upload fa-lg"></i></button>`;
                                            }
                                            acciones += ``;
                                            return acciones;
                                        }},
                                        {"data":"partida_id","width":"1%"}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0,5],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-head-right", targets: [ 2,3,4 ],
                                            className: "dt-body-center", targets: [ 4 ]
                                        }
                                    ],
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                        }, 0);

                                        total = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                        }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(3).footer()).html(formatNumber(total));
                                    },
                                    initComplete: function (settings, json) {
                                        fn_tbl_bOperacion(partida_id);
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });

                                $("#tbl_bSinCobro tbody").on("click", ".subirComprobante", function () {
                                    let data = tbl_bSinCobro.row($(this).parents("tr")).data();
                                    let id = data.id_sincobro;
                                    $("#id_sincobro").val(id);
                                    $("#modalComprobanteSinCobro").modal('show');
                                });

                                $("#frm-boletosincobroPDF").on("submit", function(event){
                                    event.preventDefault();
                                    var formData = new FormData(this);
                                    formData.append('partida_id', partida_id);
                                    formData.append('estacionamiento_id', estacionamiento_id);
                                    formData.append('nEstacionamiento', $("#estacionamiento").text());

                                    $.ajax({
                                        url: "../../detalle/boletoSinCobroPDF",
                                        type: "POST",
                                        dataType: 'JSON',
                                        data: formData,
                                        contentType: false,
                                        cache: false,
                                        processData:false,
                                        beforeSend: function() {
                                            $('.loading').fadeIn('slow');
                                        },
                                        success: function(data) {
                                            if(data.validacion){
                                                Swal.fire({
                                                    title:'Correcto',
                                                    html:data.mensaje,
                                                    icon:data.icon,
                                                    allowOutsideClick:false
                                                });
                                                tbl_bSinCobro.ajax.reload();
                                                $("input").val("");
                                                $('.modal .file-drop-text').text("Arrastra y suelta aquí o haz clic para seleccionar");
                                                $(".modal").modal("hide");
                                            }else{
                                                Swal.fire({
                                                    title:'Error',
                                                    html: data.mensaje,
                                                    icon:data.icon,
                                                    allowOutsideClick:false
                                                });
                                                tbl_bSinCobro.ajax.reload();
                                            }
                                            $('.loading').fadeOut('slow');
                                        }
                                    });
                                });
                            }

                            fn_tbl_bOperacion = function(partida_id){
                                let tbl_bOperacion = $('#tbl_bOperacion').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                            exportOptions: {
                                                columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                            },
                                            customize: function(xlsx) {
                                                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                                
                                                // Modificar estilo de la primera fila (título)
                                                $('row:first c', sheet).attr('s', '42');
                                                $('row:first c', sheet).attr('s', '55');
                                                
                                                // Centrar el texto del título
                                                $('row:first c', sheet).each(function() {
                                                    $('c[r="A1"]', sheet).attr('s', '2');
                                                });
                                                
                                                // Cambiar el color de fondo del título
                                                $('row:first c', sheet).each(function() {
                                                    $(this).attr('s', '5');
                                                });
                                                
                                                // Añadir el texto del título
                                                $('row:first c t', sheet).text('Boletos de Operación');
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBoperacion",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_operacion"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "total",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "partida_id",
                                            "render": function(data, type, full, meta) {
                                            acciones = ``;
                                            if(full.comprobante != null){
                                                acciones += `<button class='verComprobante' onclick="window.open('../../detalle/viewFile/boletos_operacion/`+partida_id+`/`+full.comprobante+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver comprobante"><i class="fas fa-eye"></i></button>`;
                                            }else{
                                                acciones += `<button class='subirComprobante' data-toggle="tooltip" data-placement="top" title="Subir comprobante"><i class="fas fa-file-upload fa-lg"></i></button>`;
                                            }
                                            acciones += ``;
                                            return acciones;
                                        }},
                                        {"data":"partida_id","width":"1%"}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0,5],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-head-right", targets: [ 2,3,4 ],
                                            className: "dt-body-center", targets: [ 4 ]
                                        }
                                    ],
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                        }, 0);

                                        total = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                        }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(3).footer()).html(formatNumber(total));
                                    },
                                    initComplete: function (settings, json) {
                                        fn_tbl_bVouchers(partida_id);
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });

                                $("#tbl_bOperacion tbody").on("click", ".subirComprobante", function () {
                                    let data = tbl_bOperacion.row($(this).parents("tr")).data();
                                    let id = data.id_operacion;
                                    $("#id_operacion").val(id);
                                    $("#modalComprobanteOperacion").modal('show');
                                });

                                $("#frm-boletoOperacionPDF").on("submit", function(event){
                                    event.preventDefault();
                                    var formData = new FormData(this);
                                    formData.append('partida_id', partida_id);
                                    formData.append('estacionamiento_id', estacionamiento_id);
                                    formData.append('nEstacionamiento', $("#estacionamiento").text());

                                    $.ajax({
                                        url: "../../detalle/boletoOperacionPDF",
                                        type: "POST",
                                        dataType: 'JSON',
                                        data: formData,
                                        contentType: false,
                                        cache: false,
                                        processData:false,
                                        beforeSend: function() {
                                            $('.loading').fadeIn('slow');
                                        },
                                        success: function(data) {
                                            if(data.validacion){
                                                Swal.fire({
                                                    title:'Correcto',
                                                    html:data.mensaje,
                                                    icon:data.icon,
                                                    allowOutsideClick:false
                                                });
                                                tbl_bOperacion.ajax.reload();
                                                $("input").val("");
                                                $('.modal .file-drop-text').text("Arrastra y suelta aquí o haz clic para seleccionar");
                                                $(".modal").modal("hide");
                                            }else{
                                                Swal.fire({
                                                    title:'Error',
                                                    html: data.mensaje,
                                                    icon:data.icon,
                                                    allowOutsideClick:false
                                                });
                                                tbl_bOperacion.ajax.reload();
                                            }
                                            $('.loading').fadeOut('slow');
                                        }
                                    });
                                });
                            }

                            fn_tbl_bVouchers = function(partida_id){
                                let tbl_vouchers = $('#tbl_vouchers').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Creación de Vouchers');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteVouchers'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBvouchers",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_voucher"},
                                        {"data": "concepto"},
                                        {"data": "entregados",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "recuperados",render: $.fn.dataTable.render.number(',', '.', 0, '')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteVouchers").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_vouchers/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bValidaciones(partida_id);
                                        $("#comprobanteVouchers").on("click", function() {
                                            $("#tipoComprobante").val("boletos_vouchers");
                                            $("#comprobanteTipo").html("Comprobante Boletos Vouchers");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalEntregados = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                            totalRecuperados = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalEntregados));
                                        $(api.column(3).footer()).html(formatNumber(totalRecuperados));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bValidaciones = function(partida_id){
                                let tbl_validaciones = $('#tbl_validaciones').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Validaciones(Informativo)');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteValidaciones'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBvalidaciones",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_validaciones"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "total",render: $.fn.dataTable.render.number(',', '.', 0, '')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteValidaciones").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_validaciones/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bpValet(partida_id);
                                        $("#comprobanteValidaciones").on("click", function() {
                                            $("#tipoComprobante").val("boletos_validaciones");
                                            $("#comprobanteTipo").html("Comprobante Boletos Validaciones");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                            total = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(3).footer()).html(formatNumber(total));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bpValet = function(partida_id){
                                let tbl_bpValet = $('#tbl_bpValet').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Boleto perdido valet');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobantePerdidoValet'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBperdidoValet",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_perdido"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "costo",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "total",render: $.fn.dataTable.render.number(',', '.', 0, '')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 1,2,3 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobantePerdidoValet").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boleto_perdido_valet/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bPerdidos(partida_id);
                                        $("#comprobantePerdidoValet").on("click", function() {
                                            $("#tipoComprobante").val("boleto_perdido_valet");
                                            $("#comprobanteTipo").html("Comprobante Boletos Perdido Valet");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalCosto = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        total = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(2).footer()).html(formatNumber(totalCosto));
                                        $(api.column(3).footer()).html(total);
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bPerdidos = function(partida_id){
                                let tbl_bPerdidos = $('#tbl_bPerdidos').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Boletos Perdidos');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobantePerdidos'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBperdidos",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_perdido"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobantePerdidos").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_perdidos/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bPrepago(partida_id);
                                        $("#comprobantePerdidos").on("click", function() {
                                            $("#tipoComprobante").val("boletos_perdidos");
                                            $("#comprobanteTipo").html("Comprobante Boletos Perdidos");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bPrepago = function(partida_id){
                                let tbl_bPrepago = $('#tbl_bPrepago').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Boletos Prepago');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobantePrepago'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBprepago",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_prepago"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobantePrepago").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_prepago/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bInformativo(partida_id);
                                        $("#comprobantePrepago").on("click", function() {
                                            $("#tipoComprobante").val("boletos_prepago");
                                            $("#comprobanteTipo").html("Comprobante Boletos Prepago");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bInformativo = function(partida_id){
                                let tbl_bInformativo = $('#tbl_bInformativo').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Informativo');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteInformativo'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBinformativo",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_informativo"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "total",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteInformativo").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_informativo/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bOtros(partida_id);
                                        $("#comprobanteInformativo").on("click", function() {
                                            $("#tipoComprobante").val("boletos_informativo");
                                            $("#comprobanteTipo").html("Comprobante Boletos Informativo");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        total = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        // $(api.column(3).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(total,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bOtros = function(partida_id){
                                let tbl_bOtros = $('#tbl_bOtros').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Otros');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteOtros'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBotros",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_otros"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "total",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteOtros").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_otros/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bInfoPrepago(partida_id);
                                        $("#comprobanteOtros").on("click", function() {
                                            $("#tipoComprobante").val("boletos_otros");
                                            $("#comprobanteTipo").html("Comprobante Otros");
                                            $("#modalComprobantes").modal('show');
                                        });
                                        $('.loading').fadeOut('slow');
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_detalleCajeros = function(datos){
                                // console.log(datos.fechaIngreso+" - "+datos.estacionamiento_id);
                                let tbl_detalleCajeros = $('#tbl_detalleCajeros').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                            exportOptions: {
                                                columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                            },
                                            customize: function(xlsx) {
                                                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                                
                                                // Modificar estilo de la primera fila (título)
                                                $('row:first c', sheet).attr('s', '42');
                                                $('row:first c', sheet).attr('s', '55');
                                                
                                                // Centrar el texto del título
                                                $('row:first c', sheet).each(function() {
                                                    $('c[r="A1"]', sheet).attr('s', '2');
                                                });
                                                
                                                // Cambiar el color de fondo del título
                                                $('row:first c', sheet).each(function() {
                                                    $(this).attr('s', '5');
                                                });
                                                
                                                // Añadir el texto del título
                                                $('row:first c t', sheet).text('Detalle de Cajeros');
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getDetalleCajeros",
                                        dataType: "json",
                                        data: {fechaIngreso:datos.fechaIngreso,estacionamiento:datos.estacionamiento_id}
                                    },
                                    "columns": [
                                        {"data": "id_cajeros"},
                                        {"data": "nombre_cajero"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "importe",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    fixedHeader: true,
                                    initComplete: function (settings, json) {
                                        var api = this.api();
                                        api
                                        .columns(1)
                                        .every(function () {
                                            var column = this;
                                            // console.log(column);
                                            var select = $('<select class="browser-default"><option value="" selected disabled>Cajero</option><option value="">TODO</option></select>')
                                            .appendTo($(tbl_detalleCajeros.column(1).header()).empty())
                                            .on('change', function () {
                                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                                // Filtrar los datos en función de la selección
                                                tbl_detalleCajeros.column(1).search(val ? '^' + val + '$' : '', true, false).draw();

                                                // Remove the formatting to get integer data for summation
                                                var intVal = function (i) {
                                                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                                };

                                                // Calcular los nuevos totales basados en la selección
                                                var filteredData = api.rows({ search: 'applied' }).data();
                                                totalCantidad = filteredData
                                                    .pluck('cantidad')
                                                    .reduce(function (a, b) {
                                                        return intVal(a) + intVal(b);
                                                    }, 0);
                                                totalImporte = filteredData
                                                    .pluck('importe')
                                                    .reduce(function (a, b) {
                                                        return intVal(a) + intVal(b);
                                                    }, 0);

                                                // Actualizar el footer con los nuevos totales
                                                $(api.column(1).footer()).html("Total");
                                                $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                                $(api.column(4).footer()).html('$&nbsp;' + formatNumber(totalImporte, 2));

                                                // También puedes agregar aquí cualquier otro código que desees ejecutar cuando cambie la selección
                                            });

                                            tbl_detalleCajeros.column(1)
                                            .data()
                                            .unique()
                                            .sort()
                                            .each(function (d, j) {
                                                select.append('<option value="' + d + '">' + d + '</option>');
                                            });
                                        });
                                        var ruta = json.data[0].ruta;
                                        if(ruta != null) {
                                            var customButton = $(
                                                '<a href="../../detalle/viewFile/layout/'+partida_id+'/'+ruta+'" id="layoutOriginal" class="dt-button buttons-download buttons-html5" type="button">' +
                                                '<i class="fas fa-file-download fa-lg"></i> Descargar' +
                                                '</a>'
                                            );
                                            customButton.insertAfter('#tbl_detalleCajeros_wrapper .dt-buttons .dt-button');
                                        }

                                        $('.loading').fadeOut('slow');
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bInfoPrepago = function(partida_id){
                                let tbl_bInfoPrepago = $('#tbl_bInfoPrepago').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Informativo Prepagos');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteInfoPrepago'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBinfoPrepago",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_info_prepago"},
                                        {"data": "concepto"},
                                        {"data": "entregados",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "recuperados",render: $.fn.dataTable.render.number(',', '.', 0, '')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteInfoPrepago").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_info_prepago/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_tbl_bInfoOtrosMedios(partida_id);
                                        $("#comprobanteInfoPrepago").on("click", function() {
                                            $("#tipoComprobante").val("boletos_info_prepago");
                                            $("#comprobanteTipo").html("Comprobante Boletos Informativo Prepagos");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();

                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };

                                        // Total over all pages
                                        totalEntregados = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                            totalRecuperados = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);

                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalEntregados));
                                        $(api.column(3).footer()).html(formatNumber(totalRecuperados));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_tbl_bInfoOtrosMedios = function(partida_id){
                                let tbl_bInfoOtrosMedios = $('#tbl_bInfoOtrosMedios').DataTable({
                                    destroy: true,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        {
                                            extend:    'excelHtml5',
                                            text:      '<i class="fas fa-file-excel fa-lg"></i>',
                                            titleAttr: 'Excel',
                                        exportOptions: {
                                            columns: ':gt(0)' // Selecciona todas las columnas excepto la primera
                                        },
                                        customize: function(xlsx) {
                                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                            
                                            // Modificar estilo de la primera fila (título)
                                            $('row:first c', sheet).attr('s', '42');
                                            $('row:first c', sheet).attr('s', '55');
                                            
                                            // Centrar el texto del título
                                            $('row:first c', sheet).each(function() {
                                                $('c[r="A1"]', sheet).attr('s', '2');
                                            });
                                            
                                            // Cambiar el color de fondo del título
                                            $('row:first c', sheet).each(function() {
                                                $(this).attr('s', '5');
                                            });
                                            
                                            // Añadir el texto del título
                                            $('row:first c t', sheet).text('Otros Medios');
                                        }
                                        },
                                        {
                                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                                            titleAttr: 'Subir',
                                            attr:{
                                                id : 'comprobanteInfoOtrosMedios'
                                            }
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalle/getBinfoOtrosMedios",
                                        dataType: "json",
                                        data: {id:partida_id}
                                    },
                                    "columns": [
                                        {"data": "id_info_otros_medios"},
                                        {"data": "concepto"},
                                        {"data": "cantidad",render: $.fn.dataTable.render.number(',', '.', 0, '')},
                                        {"data": "tarifa",render: $.fn.dataTable.render.number(',', '.', 2, '$')},
                                        {"data": "total",render: $.fn.dataTable.render.number(',', '.', 2, '$')}
                                    ],
                                    "columnDefs": [
                                        {
                                            "targets": [0],
                                            "visible": false,
                                            "searchable": true
                                        },
                                        { width: '5%', targets: 0 },
                                        {
                                            className: "dt-body-right", targets: [ 2,3,4 ]
                                        }
                                    ],
                                    initComplete: function (settings, json) {
                                        if(json.comprobante != false){
                                            var ruta = json.comprobante[0].ruta;
                                            $("#comprobanteInfoOtrosMedios").replaceWith(`<button class="dt-button verComprobante" onclick="window.open('../../detalle/viewFile/boletos_otros_medios/`+partida_id+`/`+ruta+`','name','width=1000,height=600')" target="_blank" data-toggle="tooltip" data-placement="top" title="Ver Comprobante"><span><i class="fas fa-eye fa-lg"></i></span></button>`);
                                        }
                                        fn_observaciones(partida_id);
                                        $("#comprobanteInfoOtrosMedios").on("click", function() {
                                            $("#tipoComprobante").val("boletos_otros_medios");
                                            $("#comprobanteTipo").html("Comprobante Boletos Otros Medios");
                                            $("#modalComprobantes").modal('show');
                                        });
                                    },
                                    footerCallback: function (row, data, start, end, display) {
                                        var api = this.api();
                            
                                        // Remove the formatting to get integer data for summation
                                        var intVal = function (i) {
                                            return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                        };
                            
                                        // Total over all pages
                                        totalCantidad = api
                                            .column(2)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        totalImporte = api
                                            .column(3)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);

                                        total = api
                                            .column(4)
                                            .data()
                                            .reduce(function (a, b) {
                                                return intVal(a) + intVal(b);
                                            }, 0);
                            
                                        // Total over this page
                                        // pageTotal = api
                                        //     .column(4, { page: 'current' })
                                        //     .data()
                                        //     .reduce(function (a, b) {
                                        //         return intVal(a) + intVal(b);
                                        //     }, 0);
                            
                                        // Update footer
                                        $(api.column(1).footer()).html("Total");
                                        $(api.column(2).footer()).html(formatNumber(totalCantidad));
                                        $(api.column(3).footer()).html('$&nbsp;'+formatNumber(totalImporte,2));
                                        $(api.column(4).footer()).html('$&nbsp;'+formatNumber(total,2));
                                    },
                                    "language": {
                                        "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                                    },
                                    "info": true,
                                    "scrollY": '52vh',
                                    "scrollX" : true,
                                    "scrollCollapse": false,
                                    "paging": true,
                                    "pageLength": 25,
                                    "searching": true,
                                    "ordering": false,
                                });
                            }

                            fn_observaciones = function(partida_id){
                                // console.log(partida_id);

                                $.ajax({
                                    url: "../../detalle/getObservaciones",
                                    type: "POST",
                                    dataType: 'JSON',
                                    data: {partida_id:partida_id},
                                    beforeSend: function() {
                                        $('.loading').fadeIn('slow');
                                    },
                                    success: function(data) {
                                        // console.log(data.result[0]);
                                        if(data.validacion){
                                            $("#historial_ope").append(data.result[0].historial_ope);
                                            $("#historial_admin").append(data.result[0].historial_admin);
                                            $("#historial_incidencias").append(data.result[0].historial_inci);
                                        }
                                        $('.loading').fadeOut('slow');
                                    }
                                });
                            }

                            $("#frm-boletosPDF").on("submit", function(event){
                                event.preventDefault();
                                var formData = new FormData(this);
                                formData.append('partida_id', partida_id);
                                formData.append('estacionamiento_id', estacionamiento_id);
                                formData.append('nEstacionamiento', $("#estacionamiento").text());

                                $.ajax({
                                    url: "../../detalle/cargarComprobantePDF",
                                    type: "POST",
                                    dataType: 'JSON',
                                    data: formData,
                                    contentType: false,
                                    cache: false,
                                    processData:false,
                                    beforeSend: function() {
                                        $('.loading').fadeIn('slow');
                                    },
                                    success: function(data) {
                                        if(data.validacion){
                                            Swal.fire({
                                                title:'Correcto',
                                                html:data.mensaje,
                                                icon:data.icon,
                                                allowOutsideClick:false
                                            });
                                            location.reload();
                                            $("input").val("");
                                            $('.modal .file-drop-text').text("Arrastra y suelta aquí o haz clic para seleccionar");
                                            $(".modal").modal("hide");
                                        }else{
                                            Swal.fire({
                                                title:'Error',
                                                html: data.mensaje,
                                                icon:data.icon,
                                                allowOutsideClick:false
                                            });
                                            location.reload();
                                        }
                                        $('.loading').fadeOut('slow');
                                    }
                                });
                            });

                            $('form input').change(function () {
                                $('form p').text(this.files.length + " archivo(s) seleccionado");
                            });
                            
                            $("#frm-operativo").on("submit", function(event){
                                event.preventDefault();
                                var formData = new FormData(this);
                                formData.append('partida_id', partida_id);
                                formData.append('tipo', 'obs_operativo');
                                
                                $.ajax({
                                    url: "../../detalle/guardarComentario",
                                    type: "POST",
                                    dataType: 'JSON',
                                    data: formData,
                                    contentType: false,
                                    cache: false,
                                    processData: false,
                                    beforeSend: function() {
                                        $('.loading').fadeIn('slow');
                                    },
                                    success:function(data) {
                                        if(data.validacion) {
                                            Swal.fire(
                                                'Correto',
                                                'Se ha agregado un comentario',
                                                'success'
                                            );
                                            $("#historial_ope").html(data.result[0].historial_ope);
                                            $("textarea").val("");
                                        } else {
                                            Swal.fire(
                                                'Error',
                                                'Ocurrio un error al cargar el comentario',
                                                'error'
                                            );
                                        }
                                        $('.loading').fadeOut('slow');
                                    }
                                });
                            });

                            $("#frm-admin").on("submit", function(event){
                                event.preventDefault();
                                var formData = new FormData(this);
                                formData.append('partida_id', partida_id);
                                formData.append('tipo', 'obs_admin');
                                
                                $.ajax({
                                    url: "../../detalle/guardarComentario",
                                    type: "POST",
                                    dataType: 'JSON',
                                    data: formData,
                                    contentType: false,
                                    cache: false,
                                    processData: false,
                                    beforeSend: function() {
                                        $('.loading').fadeIn('slow');
                                    },
                                    success:function(data) {
                                        if(data.validacion) {
                                            Swal.fire(
                                                'Correto',
                                                'Se ha agregado un comentario',
                                                'success'
                                            );
                                            $("#historial_admin").html(data.result[0].historial_admin);
                                            $("textarea").val("");
                                        } else {
                                            Swal.fire(
                                                'Error',
                                                'Ocurrio un error al cargar el comentario',
                                                'error'
                                            );
                                        }
                                        $('.loading').fadeOut('slow');
                                    }
                                });
                            });

                            $("#frm-incidencias").on("submit", function(event){
                                event.preventDefault();
                                var formData = new FormData(this);
                                formData.append('partida_id', partida_id);
                                formData.append('tipo', 'obs_incidencias');
                                
                                $.ajax({
                                    url: "../../detalle/guardarComentario",
                                    type: "POST",
                                    dataType: 'JSON',
                                    data: formData,
                                    contentType: false,
                                    cache: false,
                                    processData: false,
                                    beforeSend: function() {
                                        $('.loading').fadeIn('slow');
                                    },
                                    success:function(data) {
                                        if(data.validacion) {
                                            Swal.fire(
                                                'Correto',
                                                'Se ha agregado un comentario',
                                                'success'
                                            );
                                            $("#historial_incidencias").html(data.result[0].historial_inci);
                                            $("textarea").val("");
                                        } else {
                                            Swal.fire(
                                                'Error',
                                                'Ocurrio un error al cargar el comentario',
                                                'error'
                                            );
                                        }
                                        $('.loading').fadeOut('slow');
                                    }
                                });
                            });

                            $(".modalClose").click(function(){
                                $("input").val("");
                                $('.modal .file-drop-text').text("Arrastra y suelta aquí o haz clic para seleccionar");
                                $(".modal").modal('hide');
                            });

                        });

                        function handleFileSelect1(event) {
                            const file = event.target.files[0];
                            const fileDropText = document.getElementById("fileDropText1");

                            if (file) {
                                fileDropText.innerText = "Archivo seleccionado: " + file.name;
                            } else {
                                fileDropText.innerText = "Arrastra y suelta aquí o haz clic para seleccionar";
                            }
                        }

                        function handleFileSelect2(event) {
                            const file = event.target.files[0];
                            const fileDropText = document.getElementById("fileDropText2");

                            if (file) {
                                fileDropText.innerText = "Archivo seleccionado: " + file.name;
                            } else {
                                fileDropText.innerText = "Arrastra y suelta aquí o haz clic para seleccionar";
                            }
                        }

                        function handleFileSelect3(event) {
                            const file = event.target.files[0];
                            const fileDropText = document.getElementById("fileDropText3");

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
