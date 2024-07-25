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
                                                    <th>Folio&nbsp;de&nbsp;Apertura</th>
                                                    <th>Folio&nbsp;de&nbsp;Cierre</th>
                                                    <th>F.Expedido</th>
                                                    <th>F.Brincado</th>
                                                    <th>Real</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Folio&nbsp;de&nbsp;Apertura</th>
                                                    <th>Folio&nbsp;de&nbsp;Cierre</th>
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

                    </div>
                    <!-- /.container-fluid -->

                    <span id="fecha" style="display:none;"><?= $fecha; ?></span>
                    <span id="estacionamiento_id" style="display:none;"><?= $estacionamiento; ?></span>
                    <?php $this->load->view('templates/footer'); ?>
                    <script>
                        $(document).ready(function() {

                            let fecha = $("#fecha").text();
                            let estacionamiento_id = parseInt($("#estacionamiento_id").text());

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
                                    }
                                ],
                                "ajax": {
                                    url: "../../detalleSemana/getBexpedidos",
                                    type: "POST",
                                    dataType: 'json',
                                    data: {
                                        fecha:fecha,estacionamiento:estacionamiento_id
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
                                        className: "dt-body-right", targets: [ 2,3,4,5,6 ]
                                    }
                                ],
                                initComplete: function (settings, json) {
                                    $("#estacionamiento").html(json.data[0].estacionamiento+" del "+json.data[0].finicio+" al "+json.data[0].ffin);
                                    fn_tbl_bFisicos(fecha,estacionamiento_id);
                                    fn_tbl_detalleCajeros(json.data[0]);
                                },
                                footerCallback: function (row, data, start, end, display) {
                                    var api = this.api();
                        
                                    // Remove the formatting to get integer data for summation
                                    var intVal = function (i) {
                                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                    };
                        
                                    // Total over all pages
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

                            fn_tbl_bFisicos = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        url: "../../detalleSemana/getBfisicos",
                                        type: "POST",
                                        dataType: 'json',
                                        data: {
                                            fecha:fecha,estacionamiento:estacionamiento_id
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
                                        fn_tbl_bCobrados(fecha,estacionamiento_id);
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

                            fn_tbl_bCobrados = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBcobrados",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bVales(fecha,estacionamiento_id);
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

                            fn_tbl_bVales = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getValesDescuento",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_tEspeciales(fecha,estacionamiento_id);
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

                            fn_tbl_tEspeciales = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getTarifasEspeciales",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bRecobros(fecha,estacionamiento_id);
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

                            fn_tbl_bRecobros = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBrecobros",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bValet(fecha,estacionamiento_id);
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

                            fn_tbl_bValet = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBvalet",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_valesRetornar(fecha,estacionamiento_id);
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

                            fn_tbl_valesRetornar = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getValesretornar",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bPensiones(fecha,estacionamiento_id);
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

                            fn_tbl_bPensiones = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBpensiones",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bSinCobro(fecha,estacionamiento_id);
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

                            fn_tbl_bSinCobro = function(fecha,estacionamiento_id){
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
                                        url: "../../detalleSemana/getBsinCobro",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
                                    },
                                    "columns": [
                                        {"data": "id_sincobro"},
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
                                            className: "dt-head-right", targets: [ 2,3 ]
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
                                        fn_tbl_bOperacion(fecha,estacionamiento_id);
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

                            fn_tbl_bOperacion = function(fecha,estacionamiento_id){
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
                                        url: "../../detalleSemana/getBoperacion",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
                                    },
                                    "columns": [
                                        {"data": "id_operacion"},
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
                                            className: "dt-head-right", targets: [ 2,3 ]
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
                                        fn_tbl_bVouchers(fecha,estacionamiento_id);
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

                            fn_tbl_bVouchers = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBvouchers",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bValidaciones(fecha,estacionamiento_id);
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

                            fn_tbl_bValidaciones = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBvalidaciones",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bpValet(fecha,estacionamiento_id);
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

                            fn_tbl_bpValet = function(fecha,estacionamiento_id){
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
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBperdidoValet",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bPerdidos(fecha,estacionamiento_id);
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

                            fn_tbl_bPerdidos = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBperdidos",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bPrepago(fecha,estacionamiento_id);
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

                            fn_tbl_bPrepago = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBprepago",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bInformativo(fecha,estacionamiento_id);
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

                            fn_tbl_bInformativo = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBinformativo",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
                                    },
                                    "columns": [
                                        {"data": "id_informativo"},
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
                                        fn_tbl_bOtros(fecha,estacionamiento_id);
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

                            fn_tbl_bOtros = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBotros",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bInfoPrepago(fecha,estacionamiento_id);
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
                                        url: "../../detalleSemana/getDetalleCajeros",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                                .appendTo($(tbl_detalleCajeros.column( 1 ).header()).empty())
                                                .on('change', function () {
                                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
                        
                                                    column.search(val ? '^' + val + '$' : '', true, false).draw();
                                                });
                        
                                                tbl_detalleCajeros.column( 1 )
                                                .data()
                                                .unique()
                                                .sort()
                                                .each(function (d, j) {
                                                    select.append('<option value="' + d + '">' + d + '</option>');
                                                });
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

                            fn_tbl_bInfoPrepago = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBinfoPrepago",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        fn_tbl_bInfoOtrosMedios(fecha,estacionamiento_id);
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

                            fn_tbl_bInfoOtrosMedios = function(fecha,estacionamiento_id){
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
                                        }
                                    ],
                                    "ajax": {
                                        type: "POST",
                                        url: "../../detalleSemana/getBinfoOtrosMedios",
                                        dataType: "json",
                                        data: {fecha:fecha,estacionamiento:estacionamiento_id}
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
                                        // Lllamar otra tabla
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