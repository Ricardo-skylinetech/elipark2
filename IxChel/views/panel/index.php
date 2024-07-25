<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detalle</h6>
        </div>
        <div class="card-body">
            <form id="frm-panel" method="POST" class="filtros">
                <?php if ($this->session->userdata('rol') <= 4) : ?>
                    <div class="form-group row">
                        <label for="estacionamiento" class="col-sm-4 col-md-2">Estacionamiento:</label>
                        <div class="col-sm-4 col-md-2">
                            <select id="estacionamiento" name="estacionamiento" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                <option value="" selected disabled>Elige una opción</option>
                                <?php foreach ($estacionamiento as $item) : ?>
                                    <option value="<?= $item['id_estacionamiento'] ?>"><?= $item['nombre'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <div class="row">
                        <!-- <legend class="col-form-label col-sm-2 pt-0">Dia</legend> -->
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="date" id="dia" value="dia" checked required>
                                <label class="form-check-label" for="dia">Dia</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <input type="date" class="form-control form-control-sm" id="fechaDia" name="fecha" value="<?= date('Y-m-d'); ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <legend class="col-form-label col-sm-2 pt-0">Semana</legend> -->
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="date" id="semana" value="semana" required>
                                <label class="form-check-label" for="semana">Semana</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <input type="week" class="form-control form-control-sm" id="fechaSemana" name="fecha" disabled required>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" id="limpiar" class="btn lh-1 btn-info">Limpiar</button>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <legend class="col-form-label col-sm-2 pt-0">Mes</legend> -->
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="date" id="mes" value="mes" required>
                                <label class="form-check-label" for="mes">Mes</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <input type="month" class="form-control form-control-sm" id="fechaMes" name="fecha" disabled required>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" id="buscar" class="btn lh-1 btn-primary">Buscar&nbsp;</button>
                        </div>
                    </div>
                </div>
                <hr>
            </form>
            <?php
            include 'calculos/template1.php'; // Samara
            include 'calculos/template2.php'; // Monterrey y Resto de estacionamientos
            include 'calculos/template3.php'; // Isla2
            include 'calculos/template4.php'; // Alaia Guanajuato
            include 'calculos/template5.php'; // Cuemanco
            include 'calculos/template6.php'; // Cumbres
            ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal subir Excel -->
<div class="modal fade bd-example-modal-lg" id="modalExcel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Subir documento</h5>
                <button type="button" class="close modalClose">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- LAYOUT -->
            <form id="frm-importLayout" method="POST">
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <span>LAYOUT</span>
                            <?php if ($this->session->userdata('rol') <= 4) : ?>
                                <span class="m-0 font-weight-bold text-primary"><a id="descargarLayout" href="#!">Descargar Layout <i class="fas fa-download"></i></a></span>
                            <?php else : ?>
                                <span class="m-0 font-weight-bold text-primary"><a id="descargarLayoutUsu" href="#!">Descargar Layout <i class="fas fa-download"></i></a></span>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <?php if ($this->session->userdata('rol') <= 4 || $this->session->userdata('rol') == 6) : ?>
                                    <div class="form-group row">
                                        <?php if ($this->session->userdata('rol') <= 4) : ?>
                                            <div class="col-md-6">
                                                <label for="estacionamiento2">Estacionamiento</label>
                                                <select id="estacionamiento2" name="estacionamiento2" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach ($estacionamiento as $item) : ?>
                                                        <option value="<?= $item['id_estacionamiento'] ?>"><?= $item['nombre'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-md-4">
                                            <label for="fechaIngreso" class="form-label">Fecha</label>
                                            <input type="date" class="form-control form-control-sm" id="fechaIngreso" name="fechaIngreso" value="<?= date('Y-m-d'); ?>" required>
                                        </div>
                                    </div>
                                    <br>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="file">&nbsp;</label>
                                    <div class="file-drop-area">
                                        <input type="file" id="file" name="file" class="file-input" onchange="handleFileSelect(event)" accept=".xls, .xlsx" required>
                                        <span class="file-drop-text" id="fileDropText">Arrastra y suelta aquí o haz clic para seleccionar</span>
                                        <i class="fas fa-cloud-upload-alt"></i>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group row">
                                    <label for="obs_operativo">Operativo</label>
                                    <textarea class="form-control" id="obs_operativo" name="obs_operativo" rows="3" placeholder="Ej. Sin comentarios..." required></textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="obs_admin">Administrativo</label>
                                    <textarea class="form-control" id="obs_admin" name="obs_admin" rows="3" placeholder="Ej. Sin comentarios..." required></textarea>
                                </div>
                                <div class="form-group row">
                                    <label for="obs_incidencias">Incidencias</label>
                                    <textarea class="form-control" id="obs_incidencias" name="obs_incidencias" rows="3" placeholder="Ej. Sin comentarios..." required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                    <button id="btn-importLayout" type="submit" class="btn btn-primary">Cargar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal descargar Layout -->
<div class="modal fade bd-example-modal-lg" id="modalLayout" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Descargar Layout</h5>
                <button type="button" class="close modalClose" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm-descargaLayout" method="POST">
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Elige un estacionamiento</h6>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <?php if ($this->session->userdata('rol') <= 4) : ?>
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-3 col-sm-12">
                                            <label for="estacionamiento3">Estacionamiento</label>
                                            <select id="estacionamiento3" name="estacionamiento3" class="js-example-basic-single form-control-sm" style="width: 100%" required>
                                                <option value="" selected disabled>Elige una opción</option>
                                                <?php foreach ($estacionamiento as $item) : ?>
                                                    <option value="<?= $item['id_estacionamiento'] ?>"><?= $item['nombre'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                    <button id="btn-descargaLayout" type="submit" class="btn btn-primary">Descargar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal subir Cedula -->
<div class="modal fade bd-example-modal-lg" id="modalCedula" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Subir documento</h5>
                <button type="button" class="close modalClose" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm-subirCedula" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Cédula Firmada</h6>
                                </div>
                                <div class="card-body">
                                    <div class="container-fluid">

                                        <input id="partida_id" type="number" class="form-control" name="partida_id" hidden>
                                        <input id="nEstacionamiento" type="text" class="form-control" name="nEstacionamiento" hidden>
                                        <div class="mb-4">
                                            <label for="file2">&nbsp;</label>
                                            <div class="file-drop-area">
                                                <input type="file" id="file2" name="file2" class="file-input" onchange="handleFileSelect2(event)" accept=".pdf" required>
                                                <span class="file-drop-text" id="fileDropText2">Arrastra y suelta aquí o haz clic para seleccionar</span>
                                                <i class="fas fa-cloud-upload-alt"></i>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label for="obsAuditor">Comentarios</label>
                                            <textarea class="form-control" id="obsAuditor" name="obsAuditor" rows="3" placeholder="Ej. Sin comentarios..." required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                    <button id="btn-subirCedula" type="submit" class="btn btn-primary">Cargar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal subir Comprobante Ingresos -->
<div class="modal fade bd-example-modal-lg" id="modalComprobanteIngresos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Subir documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm-subirComprobanteIngresos" method="POST">
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Comprobante Ingresos</h6>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <input id="partida_idC" type="number" class="form-control" name="partida_idC" hidden>
                                <input id="nEstacionamientoC" type="text" class="form-control" name="nEstacionamientoC" hidden>
                                <div class="mb-4">
                                    <label for="file3">&nbsp;</label>
                                    <div class="file-drop-area">
                                        <input type="file" id="file3" name="file3" class="file-input" onchange="handleFileSelect3(event)" accept=".pdf" required>
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

<!-- Modal subir Comprobante Pensiones -->
<div class="modal fade bd-example-modal-lg" id="modalComprobantePensiones" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Subir documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frm-subirComprobantePensiones" method="POST">
                <div class="modal-body">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Comprobante Pensiones</h6>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <input id="partida_idP" type="number" class="form-control" name="partida_idP" hidden>
                                <input id="nEstacionamientoP" type="text" class="form-control" name="nEstacionamientoP" hidden>
                                <div class="mb-4">
                                    <label for="file4">&nbsp;</label>
                                    <div class="file-drop-area">
                                        <input type="file" id="file4" name="file4" class="file-input" onchange="handleFileSelect4(event)" accept=".pdf" required>
                                        <span class="file-drop-text" id="fileDropText4">Arrastra y suelta aquí o haz clic para seleccionar</span>
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

<div class="modal fade" id="advertenciaModal" tabindex="-1" role="dialog" aria-labelledby="advertenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="advertenciaModalLabel">¡Atención!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>La diferencia esta por debajo del <b>0</b></h5>
                <p>El limite permitido es <span id="limBol"></span></p>
                <p>La diferencia reportada es de <span id="difBol"></span></p>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
<script>
    $('#estacionamiento').select2();
    $('#estacionamiento2').select2({
        dropdownParent: $('#modalExcel')
    });
    $('#estacionamiento3').select2({
        dropdownParent: $('#modalLayout')
    });
    $('#estacionamiento4').select2({
        dropdownParent: $('#modalExcel')
    });
    window.addEventListener('pageshow', function(event) {
        var form = document.getElementById('frm-panel');
        form.reset();
    });
    $(document).ready(function() {
        $('.loading').fadeOut('slow');
        $("#dia").trigger('click');
        var mosatrarAdvertencia = 0;
        var estacionamiento = <?php echo $this->session->userdata('id_estacionamiento'); ?>;
        var template;

        var d = new Date();
        var month = d.getMonth() + 1;
        var day = d.getDate();
        var strDate =
            d.getFullYear() +
            '-' +
            (month < 10 ? '0' + month : month) +
            '-' +
            (day < 10 ? '0' + day : day);
        $("#fecha").val(strDate);

        $("input[type='radio']").change(function() {
            if ($(this).val() === 'dia') {
                $("#fechaDia").attr('disabled', false);
                $("#fechaSemana").attr('disabled', true);
                $("#fechaMes").attr('disabled', true);
            } else if ($(this).val() === 'semana') {
                $("#fechaDia").attr('disabled', true);
                $("#fechaSemana").attr('disabled', false);
                $("#fechaMes").attr('disabled', true);
            } else {
                $("#fechaDia").attr('disabled', true);
                $("#fechaSemana").attr('disabled', true);
                $("#fechaMes").attr('disabled', false);
            }
        });
        var array = [{
            name: 'estacionamiento',
            value: '<?= $this->session->userdata('id_estacionamiento') ?>'
        }, {
            name: 'date',
            value: 'dia'
        }, {
            name: 'fecha',
            value: strDate
        }];

        table = $('#tblTemplate1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                <?php if ($this->session->userdata('rol') != 2) : ?> {
                        text: '<i class="fas fa-file-upload fa-lg"></i>',
                        titleAttr: 'Subir',
                        className: 'buttons-subir subirExcel',
                        attr: {
                            id: 'subirExcel'
                        }
                    }
                <?php endif; ?>
            ],
            "columnDefs": [{
                "targets": [0, 1],
                "visible": false,
                "searchable": true
            }],
            initComplete: function(settings, json) {
                $('.subirExcel').on('click', function() {
                    $("#modalExcel").modal('show');
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

        $("#estacionamiento").change(function() {
            table.clear().draw();
            if ($(this).val() == 20) { // Samara
                $(".table-responsive").css("display", "none");
                $("#template1").css("display", "block");
                template = 1;
            } else if ($(this).val() == 44) { // Alaia
                $(".table-responsive").css("display", "none");
                $("#template4").css("display", "block");
                template = 4;
            } else if ($(this).val() == 37) { // Cuemanco
                $(".table-responsive").css("display", "none");
                $("#template5").css("display", "block");
                template = 5;
            } else if ($(this).val() == 9) { // Isla2
                $(".table-responsive").css("display", "none");
                $("#template3").css("display", "block");
                template = 3;
            } else if ($(this).val() == 45) { //Cumbres
                $(".table-responsive").css("display", "none");
                $("#template6").css("display", "block");
                template = 6;
            } else { // Monterrey y Resto
                $(".table-responsive").css("display", "none");
                $("#template2").css("display", "block");
                template = 2;
            }
        });

        function fn_tblTemplate1(data) {
            table = $('#tblTemplate1').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    <?php if ($this->session->userdata('rol') != 2) : ?> {
                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                            titleAttr: 'Subir',
                            className: 'buttons-subir subirExcel',
                            attr: {
                                id: 'subirExcel'
                            }
                        },
                    <?php endif; ?> {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    },
                ],
                "ajax": {
                    type: "POST",
                    url: "extraerDetalle",
                    data: data
                },
                "columns": [{
                        "data": "partida_id"
                    },
                    {
                        "data": "estacionamiento"
                    },
                    {
                        "data": "num"
                    },
                    {
                        "data": "dia"
                    },
                    {
                        "data": "expedidos",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "saltosFolio",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "totalExpedidos",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosCobrados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "porcentajeCobrado",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+"&nbsp;";
                            }
                            return data;
                        }
                    },
                    {
                        "data": "boletosSinCobro",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosRegresados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "diferencia",
                        render: $.fn.dataTable.render.number(',', '.', ''),
                        "createdCell": function(cell, cellData, rowData, rowIndex, colIndex) {
                            if (cellData >= 0) {
                                $(cell).addClass('bg-green-pastel');
                            } else if (cellData > -10) {
                                $(cell).addClass('bg-yellow-pastel');
                            } else {
                                $(cell).addClass('bg-red-pastel');
                            }
                        },
                    },
                    {
                        "data": "boletoPromedio",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "bolPerdido",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ventaEfectivo",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "vantaTC",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoPensiones",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobantePensiones != null) {
                                acciones += `<button class='verComprobantePensiones' onclick="window.open('../detalle/viewFile/comprobante_pensiones/`+full.partida_id+`/`+full.comprobantePensiones+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Pensiones"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobantePensiones' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Pensiones"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "data": "ingresoOtros",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ventaTotal",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobanteIngresos != null) {
                                acciones += `<button class='verComprobanteIngresos' onclick="window.open('../detalle/viewFile/comprobante_ingresos/`+full.partida_id+`/`+full.comprobanteIngresos+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Ingresos"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobanteIngresos' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Ingresos"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>\n\
                            <button onclick="window.open('detalle/` + full.partida_id + `', '_blank')" class='detalle' data-toggle="tooltip" data-placement="top" title="Ver Detalle"><i class='fas fa-eye'></i></button>`;
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class='fas fa-print'></i></button>`;
                            } else {
                                acciones += `<button class='imprimir' data-toggle="tooltip" data-placement="top" title="Imprimir Cedula" onclick="window.open('imprimirCedula/` + full.fechaIngreso + `/`+full.estacionamiento_id+`','name','width=1000,height=600')" target='_blank'><i class='fas fa-print'></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class="far fa-file-pdf fa-lg"></i></button>`;
                            } else {
                                <?php if ($this->session->userdata('rol') <= 4) { ?>
                                    if (full.gerente === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } else { ?>
                                    if (full.auditor === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } ?>
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    }
                ],
                "columnDefs": [{
                        // "targets": [14],
                        "targets": [0, 1],
                        "visible": false,
                        "searchable": true
                    },
                    {
                        width: '5%',
                        targets: 0
                    },
                    {
                        className: "dt-body-center",
                        targets: ["_all"],
                        className: "dt-body-right"
                    },
                    // {
                    // targets: [10],
                    // render: function (data, type, row) {
                    // if (type === 'sort') {
                    //     return data.replace(/.*? /,'');
                    // }
                    // return data;
                    // }
                    // }
                ],
                fixedHeader: true,
                // order: [[13, 'ASC']],
                order: [
                    [0, 'ASC']
                ],
                rowGroup: {
                    dataSrc: 'estacionamiento'
                },
                initComplete: function(settings, json) {
                    $('.subirExcel').on('click', function() {
                        $("#modalExcel").modal('show');
                    });
                    $("#tblTemplate1 tbody").on("click", ".subirCedula", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_id").val(id);
                        $("#nEstacionamiento").val(nEstacionamiento);
                        $("#modalCedula").modal('show');
                    });
                    // Subir Comprobante ingresos
                    $("#tblTemplate1 tbody").on("click", ".subirComprobanteIngresos", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idC").val(id);
                        $("#nEstacionamientoC").val(nEstacionamiento);
                        $("#modalComprobanteIngresos").modal('show');
                    });
                    // Subir Comprobante pensiones
                    $("#tblTemplate1 tbody").on("click", ".subirComprobantePensiones", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idP").val(id);
                        $("#nEstacionamientoP").val(nEstacionamiento);
                        $("#modalComprobantePensiones").modal('show');
                    });
                    $('.loading').fadeOut('slow');

                    if (mosatrarAdvertencia > 0) {
                        if (json?.data[0]?.diferencia < 0) {
                            $("#limBol").html(json?.data[0]?.limiteBolDif);
                            $("#difBol").html(json?.data[0]?.diferencia);
                            $('#advertenciaModal').modal('show');
                            mosatrarAdvertencia = 0;
                        }
                    }
                },
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api();

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                    };

                    // Total over all pages
                    expedidos = api.column(4).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    saltosFolio = api.column(5).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    totalExpedidos = api.column(6).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosCobrados = api.column(7).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var porcentajeCobrado = table.column(8).data().toArray();
                    porcentajeCobrado = porcentajeCobrado.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var porcentajeCobrado = calcularPromedio(porcentajeCobrado);

                    boletosSinCobro = api.column(9).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosRegresados = api.column(10).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    diferencia = api.column(11).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var boletoPromedio = table.column(12).data().toArray();
                    boletoPromedio = boletoPromedio.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var promedioPorcentaje = calcularPromedio(boletoPromedio);


                    bolPerdido = api.column(13).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ventaEfectivo = api.column(14).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    vantaTC = api.column(15).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoPensiones = api.column(16).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoOtros = api.column(18).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ventaTotal = api.column(19).data().reduce(function(a, b) {
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
                    $(api.column(4).footer()).html("Total");
                    $(api.column(4).footer()).html(formatNumber(expedidos, 0));
                    $(api.column(5).footer()).html(formatNumber(saltosFolio, 0));
                    $(api.column(6).footer()).html(formatNumber(totalExpedidos, 0));
                    $(api.column(7).footer()).html(formatNumber(boletosCobrados, 0));
                    $(api.column(8).footer()).html(formatNumber(porcentajeCobrado, 2)+"&nbsp;");
                    $(api.column(9).footer()).html(formatNumber(boletosSinCobro, 0));
                    $(api.column(10).footer()).html(formatNumber(boletosRegresados, 0));
                    $(api.column(11).footer()).html(formatNumber(diferencia, 0));
                    $(api.column(12).footer()).html(formatNumber(promedioPorcentaje, 2)+"&nbsp;%");
                    $(api.column(13).footer()).html(formatNumber(bolPerdido, 2)+"&nbsp;%");
                    $(api.column(14).footer()).html("$&nbsp;" + formatNumber(ventaEfectivo, 0));
                    $(api.column(15).footer()).html("$&nbsp;" + formatNumber(vantaTC, 0));
                    $(api.column(16).footer()).html("$&nbsp;" + formatNumber(ingresoPensiones, 0));
                    $(api.column(18).footer()).html("$&nbsp;" + formatNumber(ingresoOtros, 0));
                    $(api.column(19).footer()).html("$&nbsp;" + formatNumber(ventaTotal, 0));

                    if($("input[name='date']:checked").val() == 'mes'){
                        var fecha = $("#fechaMes").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(21).footer()).html(`<div><button onclick="window.open('detalleMes/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Mes"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(22).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Mes" onclick="window.open('imprimirCedulaMes/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    } else if($("input[name='date']:checked").val() == 'semana'){
                        var fecha = $("#fechaSemana").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(21).footer()).html(`<div><button onclick="window.open('detalleSemana/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Semana"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(22).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Semana" onclick="window.open('imprimirCedulaSemana/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    }
                },
                // "rowCallback": function( row, data ) {
                //     if (data.limiteBolDif <= 10) {
                //         $(row).addClass('bg-yellow-pastel');
                //     } else {
                //         $(row).addClass('bg-red-pastel');
                //     }
                // },
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

        function fn_tblTemplate2(data) {
            table = $('#tblTemplate2').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    <?php if ($this->session->userdata('rol') != 2) : ?> {
                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                            titleAttr: 'Subir',
                            className: 'buttons-subir subirExcel',
                            attr: {
                                id: 'subirExcel'
                            }
                        },
                    <?php endif; ?> {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    },
                ],
                "ajax": {
                    type: "POST",
                    url: "extraerDetalle",
                    data: data
                },
                "columns": [{
                        "data": "partida_id"
                    },
                    {
                        "data": "estacionamiento"
                    },
                    {
                        "data": "num"
                    },
                    {
                        "data": "dia"
                    },
                    {
                        "data": "bGenerados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "voucherYprep",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "bExpFisYrot",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosCobrados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "porcentajeCobrado",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+"&nbsp;";
                            }
                            return data;
                        }
                    },
                    {
                        "data": "boletosSinCobro",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosRegresados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "diferencia",
                        render: $.fn.dataTable.render.number(',', '.', ''),
                        "createdCell": function(cell, cellData, rowData, rowIndex, colIndex) {
                            if (cellData >= 0) {
                                $(cell).addClass('bg-green-pastel');
                            } else if (cellData > -10) {
                                $(cell).addClass('bg-yellow-pastel');
                            } else {
                                $(cell).addClass('bg-red-pastel');
                            }
                        },
                    },
                    {
                        "data": "boletoPromedio",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "bolPerdido",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoBoletaje",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoPensiones",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobantePensiones != null) {
                                acciones += `<button class='verComprobantePensiones' onclick="window.open('../detalle/viewFile/comprobante_pensiones/`+full.partida_id+`/`+full.comprobantePensiones+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Pensiones"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobantePensiones' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Pensiones"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "data": "ingresoOtros",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoGeneral",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobanteIngresos != null) {
                                acciones += `<button class='verComprobanteIngresos' onclick="window.open('../detalle/viewFile/comprobante_ingresos/`+full.partida_id+`/`+full.comprobanteIngresos+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Ingresos"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobanteIngresos' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Ingresos"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>\n\
                            <button onclick="window.open('detalle/` + full.partida_id + `', '_blank')" class='detalle' data-toggle="tooltip" data-placement="top" title="Ver Detalle"><i class='fas fa-eye'></i></button>`;
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class='fas fa-print'></i></button>`;
                            } else {
                                acciones += `<button class='imprimir' data-toggle="tooltip" data-placement="top" title="Imprimir Cedula" onclick="window.open('imprimirCedula/` + full.fechaIngreso + `/`+full.estacionamiento_id+`','name','width=1000,height=600')"><i class='fas fa-print'></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class="far fa-file-pdf fa-lg"></i></button>`;
                            } else {
                                <?php if ($this->session->userdata('rol') <= 4) { ?>
                                    if (full.gerente === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } else { ?>
                                    if (full.auditor === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } ?>
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    }
                ],
                "columnDefs": [{
                        // "targets": [14],
                        "targets": [0, 1],
                        "visible": false,
                        "searchable": true
                    },
                    {
                        width: '5%',
                        targets: 0
                    },
                    {
                        className: "dt-body-center",
                        targets: ["_all"],
                        className: "dt-body-right"
                    },
                    // {
                    // targets: [10],
                    // render: function (data, type, row) {
                    // if (type === 'sort') {
                    //     return data.replace(/.*? /,'');
                    // }
                    // return data;
                    // }
                    // }
                ],
                fixedHeader: true,
                // order: [[13, 'ASC']],
                order: [
                    [0, 'ASC']
                ],
                rowGroup: {
                    dataSrc: 'estacionamiento'
                },
                initComplete: function(settings, json) {
                    $('.subirExcel').on('click', function() {
                        $("#modalExcel").modal('show');
                    });
                    $("#tblTemplate2 tbody").on("click", ".subirCedula", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_id").val(id);
                        $("#nEstacionamiento").val(nEstacionamiento);
                        $("#modalCedula").modal('show');
                    });

                    // Subir Comprobante ingresos
                    $("#tblTemplate2 tbody").on("click", ".subirComprobanteIngresos", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idC").val(id);
                        $("#nEstacionamientoC").val(nEstacionamiento);
                        $("#modalComprobanteIngresos").modal('show');
                    });
                    // Subir Comprobante pensiones
                    $("#tblTemplate2 tbody").on("click", ".subirComprobantePensiones", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idP").val(id);
                        $("#nEstacionamientoP").val(nEstacionamiento);
                        $("#modalComprobantePensiones").modal('show');
                    });
                    $('.loading').fadeOut('slow');

                    if (mosatrarAdvertencia > 0) {
                        if (json?.data[0]?.diferencia < 0) {
                            $("#limBol").html(json?.data[0]?.limiteBolDif);
                            $("#difBol").html(json?.data[0]?.diferencia);
                            $('#advertenciaModal').modal('show');
                            mosatrarAdvertencia = 0;
                        }
                    }
                },
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api();

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                    };

                    // Total over all pages
                    bGenerados = api.column(4).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    voucherYprep = api.column(5).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    bExpFisYrot = api.column(6).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosCobrados = api.column(7).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var porcentajeCobrado = table.column(8).data().toArray();
                    porcentajeCobrado = porcentajeCobrado.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var porcentajeCobrado = calcularPromedio(porcentajeCobrado);

                    boletosSinCobro = api.column(9).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosRegresados = api.column(10).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    diferencia = api.column(11).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var boletoPromedio = table.column(12).data().toArray();
                    boletoPromedio = boletoPromedio.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var promedioPorcentaje = calcularPromedio(boletoPromedio);


                    bolPerdido = api.column(13).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoBoletaje = api.column(14).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoPensiones = api.column(15).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoOtros = api.column(17).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoGeneral = api.column(18).data().reduce(function(a, b) {
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
                    $(api.column(4).footer()).html("Total");
                    $(api.column(4).footer()).html(formatNumber(bGenerados, 0));
                    $(api.column(5).footer()).html(formatNumber(voucherYprep, 0));
                    $(api.column(6).footer()).html(formatNumber(bExpFisYrot, 0));
                    $(api.column(7).footer()).html(formatNumber(boletosCobrados, 0));
                    $(api.column(8).footer()).html(formatNumber(porcentajeCobrado, 2)+"&nbsp;");
                    $(api.column(9).footer()).html(formatNumber(boletosSinCobro, 0));
                    $(api.column(10).footer()).html(formatNumber(boletosRegresados, 0));
                    $(api.column(11).footer()).html(formatNumber(diferencia, 0));
                    $(api.column(12).footer()).html(formatNumber(promedioPorcentaje, 2)+"&nbsp;%");
                    $(api.column(13).footer()).html(formatNumber(bolPerdido, 2)+"&nbsp;%");
                    $(api.column(14).footer()).html("$&nbsp;" + formatNumber(ingresoBoletaje, 0));
                    $(api.column(15).footer()).html("$&nbsp;" + formatNumber(ingresoPensiones, 0));
                    $(api.column(17).footer()).html("$&nbsp;" + formatNumber(ingresoOtros, 0));
                    $(api.column(18).footer()).html("$&nbsp;" + formatNumber(ingresoGeneral, 0));

                    if($("input[name='date']:checked").val() == 'mes'){
                        var fecha = $("#fechaMes").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(20).footer()).html(`<div><button onclick="window.open('detalleMes/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Mes"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(21).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Mes" onclick="window.open('imprimirCedulaMes/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    } else if($("input[name='date']:checked").val() == 'semana'){
                        var fecha = $("#fechaSemana").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(20).footer()).html(`<div><button onclick="window.open('detalleSemana/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Semana"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(21).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Semana" onclick="window.open('imprimirCedulaSemana/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    }
                },
                // "rowCallback": function( row, data ) {
                //     if (data.limiteBolDif <= 10) {
                //         $(row).addClass('bg-yellow-pastel');
                //     } else {
                //         $(row).addClass('bg-red-pastel');
                //     }
                // },
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

        function fn_tblTemplate3(data) {
            table = $('#tblTemplate3').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    <?php if ($this->session->userdata('rol') != 2) : ?> {
                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                            titleAttr: 'Subir',
                            className: 'buttons-subir subirExcel',
                            attr: {
                                id: 'subirExcel'
                            }
                        },
                    <?php endif; ?> {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    },
                ],
                "ajax": {
                    type: "POST",
                    url: "extraerDetalle",
                    data: data
                },
                "columns": [{
                        "data": "partida_id"
                    },
                    {
                        "data": "estacionamiento"
                    },
                    {
                        "data": "num"
                    },
                    {
                        "data": "dia"
                    },
                    {
                        "data": "bGenerados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "voucherYprep",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "bExpFisYrot",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosCobrados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "porcentajeCobrado",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+"&nbsp;";
                            }
                            return data;
                        }
                    },
                    {
                        "data": "boletosSinCobro",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosRegresados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "diferencia",
                        render: $.fn.dataTable.render.number(',', '.', ''),
                        "createdCell": function(cell, cellData, rowData, rowIndex, colIndex) {
                            if (cellData >= 0) {
                                $(cell).addClass('bg-green-pastel');
                            } else if (cellData > -10) {
                                $(cell).addClass('bg-yellow-pastel');
                            } else {
                                $(cell).addClass('bg-red-pastel');
                            }
                        },
                    },
                    {
                        "data": "boletoPromedio",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "bolPerdido",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoBoletaje",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoPensiones",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobantePensiones != null) {
                                acciones += `<button class='verComprobantePensiones' onclick="window.open('../detalle/viewFile/comprobante_pensiones/`+full.partida_id+`/`+full.comprobantePensiones+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Pensiones"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobantePensiones' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Pensiones"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "data": "ingresoOtros",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoGeneral",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobanteIngresos != null) {
                                acciones += `<button class='verComprobanteIngresos' onclick="window.open('../detalle/viewFile/comprobante_ingresos/`+full.partida_id+`/`+full.comprobanteIngresos+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Ingresos"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobanteIngresos' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Ingresos"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>\n\
                            <button onclick="window.open('detalle/` + full.partida_id + `', '_blank')" class='detalle' data-toggle="tooltip" data-placement="top" title="Ver Detalle"><i class='fas fa-eye'></i></button>`;
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class='fas fa-print'></i></button>`;
                            } else {
                                acciones += `<button class='imprimir' data-toggle="tooltip" data-placement="top" title="Imprimir Cedula" onclick="window.open('imprimirCedula/` + full.fechaIngreso + `/`+full.estacionamiento_id+`','name','width=1000,height=600')" target='_blank'><i class='fas fa-print'></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class="far fa-file-pdf fa-lg"></i></button>`;
                            } else {
                                <?php if ($this->session->userdata('rol') <= 4) { ?>
                                    if (full.gerente === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } else { ?>
                                    if (full.auditor === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } ?>
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    }
                ],
                "columnDefs": [{
                        // "targets": [14],
                        "targets": [0, 1],
                        "visible": false,
                        "searchable": true
                    },
                    {
                        width: '5%',
                        targets: 0
                    },
                    {
                        className: "dt-body-center",
                        targets: ["_all"],
                        className: "dt-body-right"
                    },
                    // {
                    // targets: [10],
                    // render: function (data, type, row) {
                    // if (type === 'sort') {
                    //     return data.replace(/.*? /,'');
                    // }
                    // return data;
                    // }
                    // }
                ],
                fixedHeader: true,
                // order: [[13, 'ASC']],
                order: [
                    [0, 'ASC']
                ],
                rowGroup: {
                    dataSrc: 'estacionamiento'
                },
                initComplete: function(settings, json) {
                    $('.subirExcel').on('click', function() {
                        $("#modalExcel").modal('show');
                    });
                    $("#tblTemplate3 tbody").on("click", ".subirCedula", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_id").val(id);
                        $("#nEstacionamiento").val(nEstacionamiento);
                        $("#modalCedula").modal('show');
                    });

                    // Subir Comprobante ingresos
                    $("#tblTemplate3 tbody").on("click", ".subirComprobanteIngresos", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idC").val(id);
                        $("#nEstacionamientoC").val(nEstacionamiento);
                        $("#modalComprobanteIngresos").modal('show');
                    });
                    // Subir Comprobante pensiones
                    $("#tblTemplate3 tbody").on("click", ".subirComprobantePensiones", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idP").val(id);
                        $("#nEstacionamientoP").val(nEstacionamiento);
                        $("#modalComprobantePensiones").modal('show');
                    });
                    $('.loading').fadeOut('slow');

                    if (mosatrarAdvertencia > 0) {
                        if (json?.data[0]?.diferencia < 0) {
                            $("#limBol").html(json?.data[0]?.limiteBolDif);
                            $("#difBol").html(json?.data[0]?.diferencia);
                            $('#advertenciaModal').modal('show');
                            mosatrarAdvertencia = 0;
                        }
                    }
                },
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api();

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                    };

                    // Total over all pages
                    bGenerados = api.column(4).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    voucherYprep = api.column(5).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    bExpFisYrot = api.column(6).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosCobrados = api.column(7).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var porcentajeCobrado = table.column(8).data().toArray();
                    porcentajeCobrado = porcentajeCobrado.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var porcentajeCobrado = calcularPromedio(porcentajeCobrado);

                    boletosSinCobro = api.column(9).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosRegresados = api.column(10).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    diferencia = api.column(11).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var boletoPromedio = table.column(12).data().toArray();
                    boletoPromedio = boletoPromedio.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var promedioPorcentaje = calcularPromedio(boletoPromedio);


                    bolPerdido = api.column(13).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoBoletaje = api.column(14).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoPensiones = api.column(15).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoOtros = api.column(17).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoGeneral = api.column(18).data().reduce(function(a, b) {
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
                    $(api.column(4).footer()).html("Total");
                    $(api.column(4).footer()).html(formatNumber(bGenerados, 0));
                    $(api.column(5).footer()).html(formatNumber(voucherYprep, 0));
                    $(api.column(6).footer()).html(formatNumber(bExpFisYrot, 0));
                    $(api.column(7).footer()).html(formatNumber(boletosCobrados, 0));
                    $(api.column(8).footer()).html(formatNumber(porcentajeCobrado, 2)+"&nbsp;");
                    $(api.column(9).footer()).html(formatNumber(boletosSinCobro, 0));
                    $(api.column(10).footer()).html(formatNumber(boletosRegresados, 0));
                    $(api.column(11).footer()).html(formatNumber(diferencia, 0));
                    $(api.column(12).footer()).html(formatNumber(promedioPorcentaje, 2)+"&nbsp;%");
                    $(api.column(13).footer()).html(formatNumber(bolPerdido, 2)+"&nbsp;%");
                    $(api.column(14).footer()).html("$&nbsp;" + formatNumber(ingresoBoletaje, 0));
                    $(api.column(15).footer()).html("$&nbsp;" + formatNumber(ingresoPensiones, 0));
                    $(api.column(17).footer()).html("$&nbsp;" + formatNumber(ingresoOtros, 0));
                    $(api.column(18).footer()).html("$&nbsp;" + formatNumber(ingresoGeneral, 0));

                    if($("input[name='date']:checked").val() == 'mes'){
                        var fecha = $("#fechaMes").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(20).footer()).html(`<div><button onclick="window.open('detalleMes/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Mes"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(21).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Mes" onclick="window.open('imprimirCedulaMes/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    } else if($("input[name='date']:checked").val() == 'semana'){
                        var fecha = $("#fechaSemana").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(20).footer()).html(`<div><button onclick="window.open('detalleSemana/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Semana"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(21).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Semana" onclick="window.open('imprimirCedulaSemana/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    }
                },
                // "rowCallback": function( row, data ) {
                //     if (data.limiteBolDif <= 10) {
                //         $(row).addClass('bg-yellow-pastel');
                //     } else {
                //         $(row).addClass('bg-red-pastel');
                //     }
                // },
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

        function fn_tblTemplate4(data) {
            table = $('#tblTemplate4').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    <?php if ($this->session->userdata('rol') != 2) : ?> {
                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                            titleAttr: 'Subir',
                            className: 'buttons-subir subirExcel',
                            attr: {
                                id: 'subirExcel'
                            }
                        },
                    <?php endif; ?> {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    },
                ],
                "ajax": {
                    type: "POST",
                    url: "extraerDetalle",
                    data: data
                },
                "columns": [{
                        "data": "partida_id"
                    },
                    {
                        "data": "estacionamiento"
                    },
                    {
                        "data": "num"
                    },
                    {
                        "data": "dia"
                    },
                    {
                        "data": "bGenerados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "voucherYprep",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "bExpFisYrot",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosCobrados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "porcentajeCobrado",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+"&nbsp;";
                            }
                            return data;
                        }
                    },
                    {
                        "data": "boletosSinCobro",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosRegresados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "diferencia",
                        render: $.fn.dataTable.render.number(',', '.', ''),
                        "createdCell": function(cell, cellData, rowData, rowIndex, colIndex) {
                            if (cellData >= 0) {
                                $(cell).addClass('bg-green-pastel');
                            } else if (cellData > -10) {
                                $(cell).addClass('bg-yellow-pastel');
                            } else {
                                $(cell).addClass('bg-red-pastel');
                            }
                        },
                    },
                    {
                        "data": "boletoPromedio",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "bolPerdido",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoBoletaje",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoPensiones",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobantePensiones != null) {
                                acciones += `<button class='verComprobantePensiones' onclick="window.open('../detalle/viewFile/comprobante_pensiones/`+full.partida_id+`/`+full.comprobantePensiones+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Pensiones"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobantePensiones' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Pensiones"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "data": "ingresoInformativo",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoOtros",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoGeneral",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobanteIngresos != null) {
                                acciones += `<button class='verComprobanteIngresos' onclick="window.open('../detalle/viewFile/comprobante_ingresos/`+full.partida_id+`/`+full.comprobanteIngresos+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Ingresos"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobanteIngresos' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Ingresos"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>\n\
                            <button onclick="window.open('detalle/` + full.partida_id + `', '_blank')" class='detalle' data-toggle="tooltip" data-placement="top" title="Ver Detalle"><i class='fas fa-eye'></i></button>`;
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class='fas fa-print'></i></button>`;
                            } else {
                                acciones += `<button class='imprimir' data-toggle="tooltip" data-placement="top" title="Imprimir Cedula" onclick="window.open('imprimirCedula/` + full.fechaIngreso + `/`+full.estacionamiento_id+`','name','width=1000,height=600')" target='_blank'><i class='fas fa-print'></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class="far fa-file-pdf fa-lg"></i></button>`;
                            } else {
                                <?php if ($this->session->userdata('rol') <= 4) { ?>
                                    if (full.gerente === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } else { ?>
                                    if (full.auditor === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } ?>
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    }
                ],
                "columnDefs": [{
                        // "targets": [14],
                        "targets": [0, 1],
                        "visible": false,
                        "searchable": true
                    },
                    {
                        width: '5%',
                        targets: 0
                    },
                    {
                        className: "dt-body-center",
                        targets: ["_all"],
                        className: "dt-body-right"
                    },
                    // {
                    // targets: [10],
                    // render: function (data, type, row) {
                    // if (type === 'sort') {
                    //     return data.replace(/.*? /,'');
                    // }
                    // return data;
                    // }
                    // }
                ],
                fixedHeader: true,
                // order: [[13, 'ASC']],
                order: [
                    [0, 'ASC']
                ],
                rowGroup: {
                    dataSrc: 'estacionamiento'
                },
                initComplete: function(settings, json) {
                    $('.subirExcel').on('click', function() {
                        $("#modalExcel").modal('show');
                    });
                    $("#tblTemplate4 tbody").on("click", ".subirCedula", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_id").val(id);
                        $("#nEstacionamiento").val(nEstacionamiento);
                        $("#modalCedula").modal('show');
                    });

                    // Subir Comprobante ingresos
                    $("#tblTemplate4 tbody").on("click", ".subirComprobanteIngresos", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idC").val(id);
                        $("#nEstacionamientoC").val(nEstacionamiento);
                        $("#modalComprobanteIngresos").modal('show');
                    });
                    // Subir Comprobante pensiones
                    $("#tblTemplate4 tbody").on("click", ".subirComprobantePensiones", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idP").val(id);
                        $("#nEstacionamientoP").val(nEstacionamiento);
                        $("#modalComprobantePensiones").modal('show');
                    });
                    $('.loading').fadeOut('slow');

                    if (mosatrarAdvertencia > 0) {
                        if (json?.data[0]?.diferencia < 0) {
                            $("#limBol").html(json?.data[0]?.limiteBolDif);
                            $("#difBol").html(json?.data[0]?.diferencia);
                            $('#advertenciaModal').modal('show');
                            mosatrarAdvertencia = 0;
                        }
                    }
                },
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api();

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                    };

                    // Total over all pages
                    bGenerados = api.column(4).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    voucherYprep = api.column(5).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    bExpFisYrot = api.column(6).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosCobrados = api.column(7).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var porcentajeCobrado = table.column(8).data().toArray();
                    porcentajeCobrado = porcentajeCobrado.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var porcentajeCobrado = calcularPromedio(porcentajeCobrado);

                    boletosSinCobro = api.column(9).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosRegresados = api.column(10).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    diferencia = api.column(11).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var boletoPromedio = table.column(12).data().toArray();
                    boletoPromedio = boletoPromedio.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var promedioPorcentaje = calcularPromedio(boletoPromedio);


                    bolPerdido = api.column(13).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoBoletaje = api.column(14).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoPensiones = api.column(15).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoInformativo = api.column(17).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoOtros = api.column(18).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoGeneral = api.column(19).data().reduce(function(a, b) {
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
                    $(api.column(4).footer()).html("Total");
                    $(api.column(4).footer()).html(formatNumber(bGenerados, 0));
                    $(api.column(5).footer()).html(formatNumber(voucherYprep, 0));
                    $(api.column(6).footer()).html(formatNumber(bExpFisYrot, 0));
                    $(api.column(7).footer()).html(formatNumber(boletosCobrados, 0));
                    $(api.column(8).footer()).html(formatNumber(porcentajeCobrado, 2)+"&nbsp;");
                    $(api.column(9).footer()).html(formatNumber(boletosSinCobro, 0));
                    $(api.column(10).footer()).html(formatNumber(boletosRegresados, 0));
                    $(api.column(11).footer()).html(formatNumber(diferencia, 0));
                    $(api.column(12).footer()).html(formatNumber(promedioPorcentaje, 2)+"&nbsp;%");
                    $(api.column(13).footer()).html(formatNumber(bolPerdido, 2)+"&nbsp;%");
                    $(api.column(14).footer()).html("$&nbsp;" + formatNumber(ingresoBoletaje, 0));
                    $(api.column(15).footer()).html("$&nbsp;" + formatNumber(ingresoPensiones, 0));
                    $(api.column(17).footer()).html("$&nbsp;" + formatNumber(ingresoInformativo, 0));
                    $(api.column(18).footer()).html("$&nbsp;" + formatNumber(ingresoOtros, 0));
                    $(api.column(19).footer()).html("$&nbsp;" + formatNumber(ingresoGeneral, 0));

                    if($("input[name='date']:checked").val() == 'mes'){
                        var fecha = $("#fechaMes").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(21).footer()).html(`<div><button onclick="window.open('detalleMes/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Mes"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(22).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Mes" onclick="window.open('imprimirCedulaMes/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    } else if($("input[name='date']:checked").val() == 'semana'){
                        var fecha = $("#fechaSemana").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(21).footer()).html(`<div><button onclick="window.open('detalleSemana/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Semana"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(22).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Semana" onclick="window.open('imprimirCedulaSemana/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    }
                },
                // "rowCallback": function( row, data ) {
                //     if (data.limiteBolDif <= 10) {
                //         $(row).addClass('bg-yellow-pastel');
                //     } else {
                //         $(row).addClass('bg-red-pastel');
                //     }
                // },
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

        function fn_tblTemplate5(data) {
            table = $('#tblTemplate5').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    <?php if ($this->session->userdata('rol') != 2) : ?> {
                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                            titleAttr: 'Subir',
                            className: 'buttons-subir subirExcel',
                            attr: {
                                id: 'subirExcel'
                            }
                        },
                    <?php endif; ?> {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    },
                ],
                "ajax": {
                    type: "POST",
                    url: "extraerDetalle",
                    data: data
                },
                "columns": [{
                        "data": "partida_id"
                    },
                    {
                        "data": "estacionamiento"
                    },
                    {
                        "data": "num"
                    },
                    {
                        "data": "dia"
                    },
                    {
                        "data": "expedidos",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "saltosFolio",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "totalExpedidos",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosCobrados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "porcentajeCobrado",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+"&nbsp;";
                            }
                            return data;
                        }
                    },
                    {
                        "data": "boletosSinCobro",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "boletosRegresados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "diferencia",
                        render: $.fn.dataTable.render.number(',', '.', ''),
                        "createdCell": function(cell, cellData, rowData, rowIndex, colIndex) {
                            if (cellData >= 0) {
                                $(cell).addClass('bg-green-pastel');
                            } else if (cellData > -10) {
                                $(cell).addClass('bg-yellow-pastel');
                            } else {
                                $(cell).addClass('bg-red-pastel');
                            }
                        },
                    },
                    {
                        "data": "boletoPromedio",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "bolPerdido",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ventaEfectivo",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "vantaPension",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobantePensiones != null) {
                                acciones += `<button class='verComprobantePensiones' onclick="window.open('../detalle/viewFile/comprobante_pensiones/`+full.partida_id+`/`+full.comprobantePensiones+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Pensiones"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobantePensiones' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Pensiones"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "data": "ingresoOtros",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "vantaTotal",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobanteIngresos != null) {
                                acciones += `<button class='verComprobanteIngresos' onclick="window.open('../detalle/viewFile/comprobante_ingresos/`+full.partida_id+`/`+full.comprobanteIngresos+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Ingresos"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobanteIngresos' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Ingresos"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>\n\
                            <button onclick="window.open('detalle/` + full.partida_id + `', '_blank')" class='detalle' data-toggle="tooltip" data-placement="top" title="Ver Detalle"><i class='fas fa-eye'></i></button>`;
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class='fas fa-print'></i></button>`;
                            } else {
                                acciones += `<button class='imprimir' data-toggle="tooltip" data-placement="top" title="Imprimir Cedula" onclick="window.open('imprimirCedula/` + full.fechaIngreso + `/`+full.estacionamiento_id+`','name','width=1000,height=600')" target='_blank'><i class='fas fa-print'></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class="far fa-file-pdf fa-lg"></i></button>`;
                            } else {
                                <?php if ($this->session->userdata('rol') <= 4) { ?>
                                    if (full.gerente === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } else { ?>
                                    if (full.auditor === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } ?>
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    }
                ],
                "columnDefs": [{
                        // "targets": [14],
                        "targets": [0, 1],
                        "visible": false,
                        "searchable": true
                    },
                    {
                        width: '5%',
                        targets: 0
                    },
                    {
                        className: "dt-body-center",
                        targets: ["_all"],
                        className: "dt-body-right"
                    },
                    // {
                    // targets: [10],
                    // render: function (data, type, row) {
                    // if (type === 'sort') {
                    //     return data.replace(/.*? /,'');
                    // }
                    // return data;
                    // }
                    // }
                ],
                fixedHeader: true,
                // order: [[13, 'ASC']],
                order: [
                    [0, 'ASC']
                ],
                rowGroup: {
                    dataSrc: 'estacionamiento'
                },
                initComplete: function(settings, json) {
                    $('.subirExcel').on('click', function() {
                        $("#modalExcel").modal('show');
                    });
                    $("#tblTemplate5 tbody").on("click", ".subirCedula", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_id").val(id);
                        $("#nEstacionamiento").val(nEstacionamiento);
                        $("#modalCedula").modal('show');
                    });

                    // Subir Comprobante ingresos
                    $("#tblTemplate5 tbody").on("click", ".subirComprobanteIngresos", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idC").val(id);
                        $("#nEstacionamientoC").val(nEstacionamiento);
                        $("#modalComprobanteIngresos").modal('show');
                    });
                    // Subir Comprobante pensiones
                    $("#tblTemplate5 tbody").on("click", ".subirComprobantePensiones", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idP").val(id);
                        $("#nEstacionamientoP").val(nEstacionamiento);
                        $("#modalComprobantePensiones").modal('show');
                    });
                    $('.loading').fadeOut('slow');

                    if (mosatrarAdvertencia > 0) {
                        if (json?.data[0]?.diferencia < 0) {
                            $("#limBol").html(json?.data[0]?.limiteBolDif);
                            $("#difBol").html(json?.data[0]?.diferencia);
                            $('#advertenciaModal').modal('show');
                            mosatrarAdvertencia = 0;
                        }
                    }
                },
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api();

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                    };

                    // Total over all pages
                    expedidos = api.column(4).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    saltosFolio = api.column(5).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    totalExpedidos = api.column(6).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosCobrados = api.column(7).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var porcentajeCobrado = table.column(8).data().toArray();
                    porcentajeCobrado = porcentajeCobrado.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var porcentajeCobrado = calcularPromedio(porcentajeCobrado);

                    boletosSinCobro = api.column(9).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    boletosRegresados = api.column(10).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    diferencia = api.column(11).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var boletoPromedio = table.column(12).data().toArray();
                    boletoPromedio = boletoPromedio.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var promedioPorcentaje = calcularPromedio(boletoPromedio);


                    bolPerdido = api.column(13).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ventaEfectivo = api.column(14).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    vantaPension = api.column(15).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoOtros = api.column(17).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    vantaTotal = api.column(18).data().reduce(function(a, b) {
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
                    $(api.column(4).footer()).html("Total");
                    $(api.column(4).footer()).html(formatNumber(expedidos, 0));
                    $(api.column(5).footer()).html(formatNumber(saltosFolio, 0));
                    $(api.column(6).footer()).html(formatNumber(totalExpedidos, 0));
                    $(api.column(7).footer()).html(formatNumber(boletosCobrados, 0));
                    $(api.column(8).footer()).html(formatNumber(porcentajeCobrado, 2)+"&nbsp;");
                    $(api.column(9).footer()).html(formatNumber(boletosSinCobro, 0));
                    $(api.column(10).footer()).html(formatNumber(boletosRegresados, 0));
                    $(api.column(11).footer()).html(formatNumber(diferencia, 0));
                    $(api.column(12).footer()).html(formatNumber(promedioPorcentaje, 2)+"&nbsp;%");
                    $(api.column(13).footer()).html(formatNumber(bolPerdido, 2)+"&nbsp;%");
                    $(api.column(14).footer()).html("$&nbsp;" + formatNumber(ventaEfectivo, 0));
                    $(api.column(15).footer()).html("$&nbsp;" + formatNumber(vantaPension, 0));
                    $(api.column(17).footer()).html("$&nbsp;" + formatNumber(ingresoOtros, 0));
                    $(api.column(18).footer()).html("$&nbsp;" + formatNumber(vantaTotal, 0));

                    if($("input[name='date']:checked").val() == 'mes'){
                        var fecha = $("#fechaMes").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(20).footer()).html(`<div><button onclick="window.open('detalleMes/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Mes"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(21).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Mes" onclick="window.open('imprimirCedulaMes/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    } else if($("input[name='date']:checked").val() == 'semana'){
                        var fecha = $("#fechaSemana").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(20).footer()).html(`<div><button onclick="window.open('detalleSemana/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Semana"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(21).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Semana" onclick="window.open('imprimirCedulaSemana/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    }
                },
                // "rowCallback": function( row, data ) {
                //     if (data.limiteBolDif <= 10) {
                //         $(row).addClass('bg-yellow-pastel');
                //     } else {
                //         $(row).addClass('bg-red-pastel');
                //     }
                // },
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

        function fn_tblTemplate6(data) {
            table = $('#tblTemplate6').DataTable({
                destroy: true,
                dom: 'Bfrtip',
                buttons: [
                    <?php if ($this->session->userdata('rol') != 2) : ?> {
                            text: '<i class="fas fa-file-upload fa-lg"></i>',
                            titleAttr: 'Subir',
                            className: 'buttons-subir subirExcel',
                            attr: {
                                id: 'subirExcel'
                            }
                        },
                    <?php endif; ?> {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel fa-lg"></i>',
                        titleAttr: 'Excel'
                    },
                ],
                "ajax": {
                    type: "POST",
                    url: "extraerDetalle",
                    data: data
                },
                "columns": [{
                        "data": "partida_id"
                    },
                    {
                        "data": "estacionamiento"
                    },
                    {
                        "data": "num"
                    },
                    {
                        "data": "dia"
                    },
                    {
                        "data": "bExpedidos",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "foliosBrincados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "bFisicos",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "bCobrados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "porcentajeCobrado",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+"&nbsp;";
                            }
                            return data;
                        }
                    },
                    {
                        "data": "bSinCobro",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "bRegresados",
                        render: $.fn.dataTable.render.number(',', '.', '')
                    },
                    {
                        "data": "diferencia",
                        render: $.fn.dataTable.render.number(',', '.', ''),
                        "createdCell": function(cell, cellData, rowData, rowIndex, colIndex) {
                            if (cellData >= 0) {
                                $(cell).addClass('bg-green-pastel');
                            } else if (cellData > -10) {
                                $(cell).addClass('bg-yellow-pastel');
                            } else {
                                $(cell).addClass('bg-red-pastel');
                            }
                        },
                    },
                    {
                        "data": "boletoPromedio",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "bolPerdido",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return formatNumber(number, 2)+ '&nbsp%';
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoBoletaje",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoPensiones",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobantePensiones != null) {
                                acciones += `<button class='verComprobantePensiones' onclick="window.open('../detalle/viewFile/comprobante_pensiones/`+full.partida_id+`/`+full.comprobantePensiones+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Pensiones"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobantePensiones' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Pensiones"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "data": "ingresoOtros",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "data": "ingresoGeneral",
                        "render": function(data, type, full, meta) {
                            var number = parseFloat(data);
                            if (!isNaN(number)) {
                                return '$' + formatNumber(number, 2);
                            }
                            return data;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.comprobanteIngresos != null) {
                                acciones += `<button class='verComprobanteIngresos' onclick="window.open('../detalle/viewFile/comprobante_ingresos/`+full.partida_id+`/`+full.comprobanteIngresos+`','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Comprobante Ingresos"><i class="fas fa-file-pdf fa-lg"></i></button>`;
                            } else {

                                acciones += `<button class='subirComprobanteIngresos' data-toggle="tooltip" data-placement="top" title="Subir Comprobante Ingresos"><i class="fas fa-paperclip"></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>\n\
                            <button onclick="window.open('detalle/` + full.partida_id + `', '_blank')" class='detalle' data-toggle="tooltip" data-placement="top" title="Ver Detalle"><i class='fas fa-eye'></i></button>`;
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class='fas fa-print'></i></button>`;
                            } else {
                                acciones += `<button class='imprimir' data-toggle="tooltip" data-placement="top" title="Imprimir Cedula" onclick="window.open('imprimirCedula/` + full.fechaIngreso + `/`+full.estacionamiento_id+`','name','width=1000,height=600')" target='_blank'><i class='fas fa-print'></i></button>`;
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    },
                    {
                        "defaultContent": "",
                        "render": function(data, type, full, meta) {
                            acciones = `<div>`;
                            if (full.gerente != null && full.auditor != null) {
                                acciones += `<button class='verCedula' onclick="window.open('../detalle/viewFile/cedula/` + full.partida_id + `/` + full.cedula + `','name','width=1000,height=600')" target='_blank' data-toggle="tooltip" data-placement="top" title="Ver Cedula"><i class="far fa-file-pdf fa-lg"></i></button>`;
                            } else {
                                <?php if ($this->session->userdata('rol') <= 4) { ?>
                                    if (full.gerente === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } else { ?>
                                    if (full.auditor === null) {
                                        acciones += `<button class='subirCedula' data-toggle="tooltip" data-placement="top" title="Subir Cedula"><i class="fas fa-upload"></i></button>`;
                                    } else {
                                        acciones += `<i class="fas fa-spinner fa-lg"data-toggle="tooltip" data-placement="top" title="Esperando carga"></i>`;
                                    }
                                <?php } ?>
                            }
                            acciones += `</div>`;
                            return acciones;
                        }
                    }
                ],
                "columnDefs": [{
                        // "targets": [14],
                        "targets": [0, 1],
                        "visible": false,
                        "searchable": true
                    },
                    {
                        width: '5%',
                        targets: 0
                    },
                    {
                        className: "dt-body-center",
                        targets: ["_all"],
                        className: "dt-body-right"
                    },
                    // {
                    // targets: [10],
                    // render: function (data, type, row) {
                    // if (type === 'sort') {
                    //     return data.replace(/.*? /,'');
                    // }
                    // return data;
                    // }
                    // }
                ],
                fixedHeader: true,
                // order: [[13, 'ASC']],
                order: [
                    [0, 'ASC']
                ],
                rowGroup: {
                    dataSrc: 'estacionamiento'
                },
                initComplete: function(settings, json) {
                    $('.subirExcel').on('click', function() {
                        $("#modalExcel").modal('show');
                    });
                    $("#tblTemplate6 tbody").on("click", ".subirCedula", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_id").val(id);
                        $("#nEstacionamiento").val(nEstacionamiento);
                        $("#modalCedula").modal('show');
                    });

                    // Subir Comprobante ingresos
                    $("#tblTemplate6 tbody").on("click", ".subirComprobanteIngresos", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idC").val(id);
                        $("#nEstacionamientoC").val(nEstacionamiento);
                        $("#modalComprobanteIngresos").modal('show');
                    });
                    // Subir Comprobante pensiones
                    $("#tblTemplate6 tbody").on("click", ".subirComprobantePensiones", function() {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.partida_id;
                        let nEstacionamiento = data.estacionamiento;
                        console.log(nEstacionamiento);
                        $("#partida_idP").val(id);
                        $("#nEstacionamientoP").val(nEstacionamiento);
                        $("#modalComprobantePensiones").modal('show');
                    });
                    $('.loading').fadeOut('slow');

                    if (mosatrarAdvertencia > 0) {
                        if (json?.data[0]?.diferencia < 0) {
                            $("#limBol").html(json?.data[0]?.limiteBolDif);
                            $("#difBol").html(json?.data[0]?.diferencia);
                            $('#advertenciaModal').modal('show');
                            mosatrarAdvertencia = 0;
                        }
                    }
                },
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api();

                    // Remove the formatting to get integer data for summation
                    var intVal = function(i) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                    };

                    // Total over all pages
                    bExpedidos = api.column(4).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    foliosBrincados = api.column(5).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    bFisicos = api.column(6).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    bCobrados = api.column(7).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var porcentajeCobrado = table.column(8).data().toArray();
                    porcentajeCobrado = porcentajeCobrado.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var porcentajeCobrado = calcularPromedio(porcentajeCobrado);

                    bSinCobro = api.column(9).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    bRegresados = api.column(10).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    diferencia = api.column(11).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    var boletoPromedio = table.column(12).data().toArray();
                    boletoPromedio = boletoPromedio.map(function(val) {
                        if (val !== null) {
                            val = val.replace('%', '');
                            return parseFloat(val);
                        }
                        return 0; // Otra opción es tratar los valores nulos como 0
                    });
                    var promedioPorcentaje = calcularPromedio(boletoPromedio);


                    bolPerdido = api.column(13).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoBoletaje = api.column(14).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoPensiones = api.column(15).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoOtros = api.column(17).data().reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);

                    ingresoGeneral = api.column(18).data().reduce(function(a, b) {
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
                    $(api.column(4).footer()).html("Total");
                    $(api.column(4).footer()).html(formatNumber(bExpedidos, 0));
                    $(api.column(5).footer()).html(formatNumber(foliosBrincados, 0));
                    $(api.column(6).footer()).html(formatNumber(bFisicos, 0));
                    $(api.column(7).footer()).html(formatNumber(bCobrados, 0));
                    $(api.column(8).footer()).html(formatNumber(porcentajeCobrado, 2)+"&nbsp;");
                    $(api.column(9).footer()).html(formatNumber(bSinCobro, 0));
                    $(api.column(10).footer()).html(formatNumber(bRegresados, 0));
                    $(api.column(11).footer()).html(formatNumber(diferencia, 0));
                    $(api.column(12).footer()).html(formatNumber(promedioPorcentaje, 2)+"&nbsp;%");
                    $(api.column(13).footer()).html(formatNumber(bolPerdido, 2)+"&nbsp;%");
                    $(api.column(14).footer()).html("$&nbsp;" + formatNumber(ingresoBoletaje, 0));
                    $(api.column(15).footer()).html("$&nbsp;" + formatNumber(ingresoPensiones, 0));
                    $(api.column(17).footer()).html("$&nbsp;" + formatNumber(ingresoOtros, 0));
                    $(api.column(18).footer()).html("$&nbsp;" + formatNumber(ingresoGeneral, 0));

                    if($("input[name='date']:checked").val() == 'mes'){
                        var fecha = $("#fechaMes").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(20).footer()).html(`<div><button onclick="window.open('detalleMes/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Mes"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(21).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Mes" onclick="window.open('imprimirCedulaMes/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    } else if($("input[name='date']:checked").val() == 'semana'){
                        var fecha = $("#fechaSemana").val();
                        var estacionamiento_id = $("#estacionamiento").val();
                        $(api.column(20).footer()).html(`<div><button onclick="window.open('detalleSemana/`+fecha+`_`+estacionamiento_id+`', '_blank')" class="detalle" data-toggle="tooltip" data-placement="top" title="Detalle Semana"><i class="fas fa-eye"></i></button></div>`);
                        $(api.column(21).footer()).html(`<div><button class="imprimir" data-toggle="tooltip" data-placement="top" title="Cedula Semana" onclick="window.open('imprimirCedulaSemana/`+fecha+`/`+estacionamiento_id+`','name','width=1000,height=600')" target="_blank"><i class="fas fa-print"></i></button></div>`);
                    }
                },
                // "rowCallback": function( row, data ) {
                //     if (data.limiteBolDif <= 10) {
                //         $(row).addClass('bg-yellow-pastel');
                //     } else {
                //         $(row).addClass('bg-red-pastel');
                //     }
                // },
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

        $("#frm-panel").submit(function(event) {
            event.preventDefault();
            var data = $(this).serializeArray();
            table.clear().draw();
            if ($("#estacionamiento").val() == 20 || estacionamiento == 20) { // Samara
                fn_tblTemplate1(data);
                $(".table-responsive").css("display", "none");
                $("#template1").css("display", "block");
                $('.loading').fadeIn('slow');
            } else if ($("#estacionamiento").val() == 44 || estacionamiento == 44) { // Alaia
                fn_tblTemplate4(data);
                $(".table-responsive").css("display", "none");
                $("#template4").css("display", "block");
                $('.loading').fadeIn('slow');
            } else if ($("#estacionamiento").val() == 37 || estacionamiento == 37) { // Cuemanco
                fn_tblTemplate5(data);
                $(".table-responsive").css("display", "none");
                $("#template5").css("display", "block");
                $('.loading').fadeIn('slow');
            } else if ($("#estacionamiento").val() == 9 || estacionamiento == 9) { // Isla2
                fn_tblTemplate3(data);
                $(".table-responsive").css("display", "none");
                $("#template3").css("display", "block");
                $('.loading').fadeIn('slow');
            } else if ($("#estacionamiento").val() == 45) { // Cumbres
                fn_tblTemplate6(data);
                $(".table-responsive").css("display", "none");
                $("#template6").css("display", "block");
                $('.loading').fadeIn('slow');
            } else { //Monterrey y Resto
                fn_tblTemplate2(data);
                $(".table-responsive").css("display", "none");
                $("#template2").css("display", "block");
                $('.loading').fadeIn('slow');
            }
        });

        $('.subirExcel').on('click', function() {
            $("#modalExcel").modal('show');
        });

        $("#descargarLayout").click(function() {
            $("#modalLayout").modal("show");
            $("#modalExcel").modal('hide');
        });

        $("#frm-descargaLayout").on("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            // console.log(formData);

            $.ajax({
                url: "descargarLayout",
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
                    if (response.success) {
                        window.location.href = response.path;
                        $.post('eliminarLay_tmp', {
                                path: response.filepath
                            },
                            function() {
                                $(".modal input").val("");
                                $(".modal textarea").val("");
                                $('.modal .file-drop-text').text("Arrastra y suelta aquí o haz clic para seleccionar");
                                $('.modal select').val('').trigger('change.select2');
                                $(".modal").modal('hide');
                            });
                    } else {
                        Swal.fire({
                            type: 'error',
                            text: response.msg,
                            title: 'Error'
                        });
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });

        $("#descargarLayoutUsu").click(function() {
            var formData = new FormData();
            formData.append('estacionamiento3', <?= $this->session->userdata('id_estacionamiento'); ?>);

            $.ajax({
                url: "descargarLayout",
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
                    if (response.success) {
                        window.location.href = response.path;
                        $.post('eliminarLay_tmp', {
                            path: response.filepath
                        });
                    } else {
                        Swal.fire({
                            type: 'error',
                            text: response.msg,
                            title: 'Error'
                        });
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });

        $("#estacionamiento2").on("change", function() {
            $('#estacionamiento').val($(this).val()).trigger('change');
        });

        $("#fechaIngreso").on("change", function() {
            // console.log($(this).val());
            $("#fechaDia").val($(this).val()).trigger('change');
        });

        $("#frm-importLayout").on("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            formData.append('nEstacionamiento', $("#estacionamiento2").find("option:selected").text());

            $.ajax({
                url: "importDetalleCajeros",
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
                            allowOutsideClick: false,
                            allowEscapeKey: false
                        });

                        $(".modal input,textarea").val("");
                        $('.modal select').val("").trigger('change.select2');
                        $('.modal #fileDropText').text("Arrastra y suelta aquí o haz clic para seleccionar");
                        $(".modal").modal("hide");
                        $("#dia").trigger("click");
                        $("#buscar").trigger("click");
                        mosatrarAdvertencia = 1;

                    } else {
                        Swal.fire({
                            title: 'Error',
                            html: "Verifica que los datos contenidos en el excel sean correctos <br><small style='color:red;'>" + data.mensaje + "</small>",
                            icon: data.icon,
                            allowOutsideClick: false
                        });
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });

        $("#frm-subirCedula").on("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            formData.append('partida_id', $("#partida_id").val());

            $.ajax({
                url: "subirCedula",
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
                        table.ajax.reload();
                        $(".modal input,textarea").val("");
                        $('.modal #fileDropText2').text("Arrastra y suelta aquí o haz clic para seleccionar");
                        $(".modal").modal("hide");
                    } else {
                        Swal.fire({
                            title: 'Error',
                            html: data.mensaje,
                            icon: data.icon,
                            allowOutsideClick: false
                        });
                        table.ajax.reload();
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });

        $("#frm-subirComprobanteIngresos").on("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            // formData.append('partida_id', $("#partida_id").val());

            $.ajax({
                url: "subirComprobanteIngresos",
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
                        table.ajax.reload();
                        $(".modal input,textarea").val("");
                        $('.modal #fileDropText3').text("Arrastra y suelta aquí o haz clic para seleccionar");
                        $(".modal").modal("hide");
                    } else {
                        Swal.fire({
                            title: 'Error',
                            html: data.mensaje,
                            icon: data.icon,
                            allowOutsideClick: false
                        });
                        table.ajax.reload();
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });

        $("#frm-subirComprobantePensiones").on("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            // formData.append('partida_id', $("#partida_id").val());

            $.ajax({
                url: "subirComprobantePensiones",
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
                        table.ajax.reload();
                        $(".modal input,textarea").val("");
                        $('.modal #fileDropText4').text("Arrastra y suelta aquí o haz clic para seleccionar");
                        $(".modal").modal("hide");
                    } else {
                        Swal.fire({
                            title: 'Error',
                            html: data.mensaje,
                            icon: data.icon,
                            allowOutsideClick: false
                        });
                        table.ajax.reload();
                    }
                    $('.loading').fadeOut('slow');
                }
            });
        });

        $("#limpiar").click(function() {
            $("input:not([type=radio])").val("");
            $("textarea").val("");
            $("input[type='radio']").removeAttr('checked');
            $("#dia").attr('checked', true).trigger('click');
            $("#fechaDia").val("<?= date('Y-m-d'); ?>");
            $('select').prop('selectedIndex', 0);
            $('select').val(null).trigger('change');
            $(".buttons-excel").remove();
            $('form p').text("Arrastra y suelta aquí o haz clic para seleccionar");
            table.clear().draw();
        });

        $(".modalClose").click(function() {
            $(".modal input").val("");
            $(".modal textarea").val("");
            $('.modal .file-drop-text').text("Arrastra y suelta aquí o haz clic para seleccionar");
            $('.modal select').val('').trigger('change.select2');
            $(".modal").modal('hide');
        });


        // Agrega las clases CSS personalizadas al modal cuando se muestra
        $('#advertenciaModal').on('shown.bs.modal', function() {
            $('#advertenciaModal .modal-dialog').addClass('shake');
            $('#advertenciaModal .modal-title').addClass('blink blink-color');
            $('#advertenciaModal .modal-body').addClass('blink');
        });

        // Quita las clases CSS personalizadas del modal cuando se oculta
        $('#advertenciaModal').on('hidden.bs.modal', function() {
            $('#advertenciaModal .modal-dialog').removeClass('shake');
            $('#advertenciaModal .modal-title').removeClass('blink blink-color');
            $('#advertenciaModal .modal-body').removeClass('blink');
        });

    });

    function handleFileSelect(event) {
        const file = event.target.files[0];
        const fileDropText = document.getElementById("fileDropText");

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

    function handleFileSelect4(event) {
        const file = event.target.files[0];
        const fileDropText = document.getElementById("fileDropText4");

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

    // Define una función para calcular el promedio de un arreglo de números
    function calcularPromedio(arr) {
        if (arr.length === 0) return 0;
        var suma = arr.reduce(function(a, b) {
            return a + b;
        }, 0);
        return suma / arr.length;
    }
</script>
</body>

</html>