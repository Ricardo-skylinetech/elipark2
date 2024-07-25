                <style>
                    #estacionamientoReport,
                    #fechaReport, #logo {
                        display: none;
                    }

                    @media print {
                        /* @page {
                            width: A4;
                            height: A4;
                            margin: 2cm;
                            padding: 2cm;
                        } */

                        header, footer, ul.navbar-nav, #frm-graficos,#btnPrint{
                            display: none !important;
                        }

                        .myChart {
                            width: 100% !important;
                            /* height: 100% !important; */
                        }

                        #estacionamientoReport,
                        #fechaReport, #logo {
                            display: block;
                        }

                        .table-responsive {
                            overflow-x: unset;
                            width: 100%;
                        }

                        .dataTables_scrollHeadInner, .dataTables_scrollFootInner,
                        .dataTables_scrollHeadInner .table, .dataTables_scrollFootInner .table {
                            min-width: 100%;
                        }

                        .dataTables_scrollBody {
                            display: unset;
                            width: 100%;
                        }

                        #wrapper #content-wrapper {
                            background-color: #fff;
                        }

                        .col-lg-5, .col-lg-7 {
                            flex: 0 0 100%;
                            max-width: 100%;
                        }

                        .card {
                            border: none;
                        }

                        .shadow {
                            box-shadow: none !important;
                        }

                        /* .title {
                            margin-bottom: 0 !important;
                        } */

                        /* .card-header {
                            display: 0.75rem 1.25rem 0;
                        } */

                        /* .card-body {
                            padding: 0 1.25rem 1rem;
                        } */

                        /* .table-sm th {
                            padding: 0 0.3rem;
                        } */

                        .dataTables_info, .dataTables_info div {
                            display: none;
                        }

                        .page-break-before {
                            page-break-before: always;
                        }

                        .page-break-after {
                            page-break-after: always;
                        }

                    }
                </style>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="title d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-4 text-gray-800">Detalle de Estacionamiento <b id="estacionamientoReport"></b><b id="fechaReport">__/__/__</b></h1>
                        <a href="#" id="btnPrint" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fa fa-print"></i>
                            </span>
                            <span class="text">Imprimir</span>
                        </a>
                        <img id="logo" src="<?=base_url();?>public/img/logo_elipark_transparent.png" width="15%" alt="">
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-5">
                            <!-- DataTales Example -->
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Datos</h6>
                                </div>
                                <div class="card-body">
                                    <form id="frm-graficos" method="POST" class="filtros">
                                        <?php //if ($this->session->userdata('rol') == 1) : ?>
                                            <div class="form-group row">
                                                <label for="estacionamiento" class="col-sm-4">Estacionamiento:</label>
                                                <div class="col-sm-4">
                                                    <select id="estacionamiento" name="estacionamiento" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                        <option value="" selected disabled>Elige una opción</option>
                                                        <?php foreach ($estacionamiento as $item) : ?>
                                                            <option value="<?= $item['id_estacionamiento'] ?>"><?= $item['nombre'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php //endif; ?>
                                        <div class="form-group">
                                            <div class="row">
                                                <!-- <legend class="col-form-label col-sm-2 pt-0">Dia</legend> -->
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="date" id="dia" value="dia" checked required>
                                                        <label class="form-check-label" for="dia">Dia</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control form-control-sm" id="fechaDia" name="fecha" required >
                                                </div>
                                                <!-- <div class="col-sm-4">
                                                <button type="button" class="btn btn-warning" id="btnPrint">Imprimir</button>
                                                </div> -->
                                            </div>
                                            <div class="row">
                                                <!-- <legend class="col-form-label col-sm-2 pt-0">Semana</legend> -->
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="date" id="semana" value="semana" required>
                                                        <label class="form-check-label" for="semana">Semana</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="week" class="form-control form-control-sm" id="fechaSemana" name="fecha" disabled required>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="button" id="limpiar" class="btn lh-1 btn-info">Limpiar</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- <legend class="col-form-label col-sm-2 pt-0">Mes</legend> -->
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="date" id="mes" value="mes" required>
                                                        <label class="form-check-label" for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="month" class="form-control form-control-sm" id="fechaMes" name="fecha" disabled required>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="submit" id="buscar" class="btn lh-1 btn-primary">Buscar&nbsp;</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </form>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_ingresos" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Día</th>
                                                    <th>B.Expedidos</th>
                                                    <th>B.Cobrados</th>
                                                    <th>%B.Promedio</th>
                                                    <th>Ingreso Boletaje</th>
                                                    <th>Ingreso Pensiones</th>
                                                    <th>Ingreso Otros</th>
                                                    <th>Ingreso General</th>
                                                </tr>
                                            </thead>
                                            
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Día</th>
                                                    <th>B.Expedidos</th>
                                                    <th>B.Cobrados</th>
                                                    <th>%B.Promedio</th>
                                                    <th>Ingreso Boletaje</th>
                                                    <th>Ingreso Pensiones</th>
                                                    <th>Ingreso Otros</th>
                                                    <th>Ingreso General</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-7">
                            <div class="page-break-before">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Gráficas</h6>
                                    </div>
                                    <div class="card-body">
                                        <canvas class="myChart" id="myChart"></canvas>
                                        <hr>
                                        <br>
                                        <hr>
                                        <canvas class="myChart" id="myChart2"></canvas>
                                        <hr>
                                        <br>
                                        <hr>
                                        <canvas class="myChart" id="myChart3"></canvas>
                                        <hr>
                                        <br>
                                        <hr>
                                        <canvas class="myChart" id="myChart4"></canvas>
                                        <hr>
                                        <br>
                                        <hr>
                                        <canvas class="myChart" id="myChart5"></canvas>
                                        <hr>
                                        <br>
                                        <hr>
                                        <canvas class="myChart" id="myChart6"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                <?php $this->load->view('templates/footer'); ?>
                <script src="<?= base_url(); ?>public/vendor/chart.js/Chart.bundle.min.js"></script>
                <script src="<?= base_url(); ?>public/vendor/daterangepicker/moment.min.js"></script>
                <script src="<?= base_url(); ?>public/vendor/daterangepicker/daterangepicker.js"></script>
                <!-- <script src="https://cdn.datatables.net/fixedheader/3.4.0/js/dataTables.fixedHeader.min.js"></script> -->
                <script>
                    $('.js-example-basic-single').select2({
                        placeholder: 'Elige una opción'
                    });
                    $(document).ready(function() {
                        $('.loading').fadeOut('slow');

                        $("input[type='radio']").change(function(){
                            if($(this).val() === 'dia'){
                                $("#fechaDia").attr('disabled',false);
                                $("#fechaSemana").attr('disabled',true);
                                $("#fechaMes").attr('disabled',true);
                                $("#fechaReport").html($("#fechaDia").val());
                            }else if($(this).val() === 'semana'){
                                $("#fechaDia").attr('disabled',true);
                                $("#fechaSemana").attr('disabled',false);
                                $("#fechaMes").attr('disabled',true);
                                var resultado = obtenerFechasSemana($("#fechaSemana").val());
                                $("#fechaReport").html("del " + resultado.fechaInicio + " al " + resultado.fechaFin);
                            }else{
                                $("#fechaDia").attr('disabled',true);
                                $("#fechaSemana").attr('disabled',true);
                                $("#fechaMes").attr('disabled',false);
                                var nombreMes = obtenerMes($("#fechaMes").val());
                                $("#fechaReport").html(nombreMes);
                            }
                        });

                        $("#btnPrint").click(function() {
                            window.print();
                        });

                        $("#frm-graficos").submit(function(event){
                            event.preventDefault();
                            var data = $(this).serializeArray();
                            console.log(data);
                            fn_tbl_ingresos(data);
                        });

                        $("#estacionamiento").on("change", function() {
                            var textoSeleccionado = $("#estacionamiento option:selected").text();
                            $("#estacionamientoReport").html(textoSeleccionado+" - ");
                        });

                        $("input[name='fecha']").on("change", function() {

                            if( $("input[type='radio']:checked").val() === 'dia'){
                                $("#fechaReport").html($(this).val());
                            }else if($("input[type='radio']:checked").val() === 'semana'){
                                var resultado = obtenerFechasSemana($(this).val());
                                $("#fechaReport").html("del " + resultado.fechaInicio + " al " + resultado.fechaFin);
                            }else{
                                var nombreMes = obtenerMes($(this).val());
                                $("#fechaReport").html(nombreMes);
                            }
                            console.log($(this).val());
                        });

                        //Obtiene Fecha Inicio y Fin de la semana
                        function obtenerFechasSemana(fecha){
                            var semana = fecha;
                            // Parsear el valor en una fecha de inicio y una fecha de fin
                            var partes = semana.split("-");
                            var year = partes[0];
                            var weekNumber = partes[1].substring(1); // Eliminar el prefijo "W" de la semana

                            var fechaInicio = obtenerInicioSemanaLunes(year, weekNumber);
                            fechaInicio.setDate(fechaInicio.getDate());

                            var fechaFin = new Date(fechaInicio);
                            fechaFin.setDate(fechaInicio.getDate() + 6);

                            // Obtener el mes formateado con cero
                            var mesInicioFormateado = formatearMes(fechaInicio.getMonth() + 1); // Sumamos 1 porque los meses se cuentan desde 0
                            var mesFinFormateado = formatearMes(fechaFin.getMonth() + 1);

                            // Formatear las fechas como desees
                            var fechaInicioFormateada = fechaInicio.getDate() + "/" + mesInicioFormateado + "/" + year;
                            var fechaFinFormateada = fechaFin.getDate() + "/" + mesFinFormateado + "/" + year;

                            // Crear un objeto que contenga las dos fechas formateadas
                            var fechasFormateadas = {
                                fechaInicio: fechaInicioFormateada,
                                fechaFin: fechaFinFormateada
                            };

                            // Devolver el objeto con las dos fechas formateadas
                            return fechasFormateadas;
                        }

                        function obtenerMes(fecha) {
                            // Obten el valor del input
                            var valorInput = fecha;

                            // Divide el valor en año y mes
                            var partes = valorInput.split('-');
                            var year = partes[0];
                            var month = partes[1];

                            // Convierte el mes de numérico a nombre de mes
                            var nombreMes = obtenerNombreMes(month);

                            return nombreMes;
                        }

                        // Función auxiliar para formatear el mes con cero
                        function formatearMes(mes) {
                            return mes < 10 ? "0" + mes : mes.toString();
                        }

                        // Función para obtener el inicio de la semana en lunes
                        function obtenerInicioSemanaLunes(anio, semana) {
                            var fecha = new Date(anio, 0);
                            fecha.setDate(fecha.getDate() + (semana - 1) * 7); // Restamos 1 para considerar que la semana comienza en 0
                            var diferenciaDias = fecha.getDay() - 1; // Restamos 1 para ajustar al lunes
                            fecha.setDate(fecha.getDate() - diferenciaDias);
                            return fecha;
                        }

                        // Función para obtener el nombre del mes a partir de su número
                        function obtenerNombreMes(numeroMes) {
                            var meses = [
                                'Enero', 'Febrero', 'Marzo', 'Abril',
                                'Mayo', 'Junio', 'Julio', 'Agosto',
                                'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                            ];

                            return meses[parseInt(numeroMes) - 1];
                        }

                        function fn_tbl_ingresos(data){
                            $('.loading').fadeIn('slow');
                            tbl_ingresos = $('#tbl_ingresos').DataTable({
                                destroy: true,
                                "ajax": {
                                    type: "POST",
                                    url: "get_reporteIngresos",
                                    dataType: "json",
                                    data: data
                                },
                                "columns": [
                                    {"data": "num"},
                                    {"data": "dia"},
                                    {"data": "expedidos", render: $.fn.dataTable.render.number( ',', '.', 0)},
                                    {"data": "cobrados", render: $.fn.dataTable.render.number( ',', '.', 0)},
                                    {
                                        "data": "promedio",
                                        "render": function(data, type, full, meta) {
                                            var number = parseFloat(data);
                                            if (!isNaN(number)) {
                                                return formatNumber(number, 2)+ '&nbsp%';
                                            }
                                            return data;
                                        }
                                    },
                                    {"data": "ingresoBoletaje",render: $.fn.dataTable.render.number(',', '.', 0, '$')},
                                    {"data": "ingresoPensiones",render: $.fn.dataTable.render.number(',', '.', 0, '$')},
                                    {"data": "ingresoOtros",render: $.fn.dataTable.render.number(',', '.', 0, '$')},
                                    {"data": "ventaTotal",render: $.fn.dataTable.render.number(',', '.', 0, '$')}
                                ],
                                "columnDefs": [{
                                    className: "dt-body-right",
                                    targets: [2,3,4,5,6,7,8]
                                }],
                                order: [
                                    [0, 'asc']
                                ],
                                initComplete: function(settings, json) {
                                    $('.loading').fadeOut('slow');
                                    graficaExpedidos(json.json);
                                    graficaCobrados(json.json);
                                    graficaPromedio(json.json);
                                    graficaIngresosXboletaje(json.json);
                                    graficaIngresosXpensiones(json.json);
                                    graficaIngresosGeneral(json.json);
                                },
                                footerCallback: function (row, data, start, end, display) {
                                var api = this.api();
                    
                                // Remove the formatting to get integer data for summation
                                var intVal = function (i) {
                                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0;
                                };
                    
                                // Total over all pages
                                expedidos = api
                                    .column(2)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);

                                    cobrados = api
                                    .column(3)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);

                                    var boletoPromedio = tbl_ingresos.column(4).data().toArray();
                                    boletoPromedio = boletoPromedio.map(function(val) {
                                        if (val !== null) {
                                            val = val.replace('%', '');
                                            return parseFloat(val);
                                        }
                                        return 0; // Otra opción es tratar los valores nulos como 0
                                    });
                                    var promedioPorcentaje = calcularPromedio(boletoPromedio);

                                    ingresosXboletaje = api
                                    .column(5)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);

                                    pensiones = api
                                    .column(6)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);

                                    otros = api
                                    .column(7)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);

                                    total = api
                                    .column(8)
                                    .data()
                                    .reduce(function (a, b) {
                                        return intVal(a) + intVal(b);
                                    }, 0);

                                    // Update footer
                                    $(api.column(0).footer()).html("Total");
                                    $(api.column(2).footer()).html(formatNumber(expedidos));
                                    $(api.column(3).footer()).html(formatNumber(cobrados));
                                    $(api.column(4).footer()).html(formatNumber(promedioPorcentaje, 2)+"&nbsp;%");
                                    $(api.column(5).footer()).html("$&nbsp;"+formatNumber(ingresosXboletaje));
                                    $(api.column(6).footer()).html("$&nbsp;"+formatNumber(pensiones));
                                    $(api.column(7).footer()).html("$&nbsp;"+formatNumber(otros));
                                    $(api.column(8).footer()).html("$&nbsp;"+formatNumber(total));
                                },
                                "language": {
                                    "url": "<?= base_url(); ?>public/vendor/datatables/language/spanish.json"
                                },
                                "info": true,
                                // "scrollY": "100vh",
                                "scrollX": true,
                                "scrollCollapse": true,
                                "paging": false,
                                "searching": false,
                                "ordering": false,
                            });
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

                        var ctx = document.getElementById('myChart');
                        var ctx2 = document.getElementById('myChart2');
                        var ctx3 = document.getElementById('myChart3');
                        var ctx4 = document.getElementById('myChart4');
                        var ctx5 = document.getElementById('myChart5');
                        var ctx6 = document.getElementById('myChart6');
                        var myChart = new Chart(ctx, { type: 'bar'});
                        var myChart2 = new Chart(ctx, { type: 'bar'});
                        var myChart3 = new Chart(ctx, { type: 'bar'});
                        var myChart4 = new Chart(ctx4, { type: 'bar'});
                        var myChart5 = new Chart(ctx5, { type: 'bar'});
                        var myChart6 = new Chart(ctx6, { type: 'bar'});

                        //Gráficas
                        function graficaExpedidos(json) {
                            // var ctx = document.getElementById('myChart');
                            var color = getRandomColor();
                            var data = {
                                labels: json.labels,
                                datasets: [{
                                    label: 'expedidos',
                                    data: json.expedidos,
                                    backgroundColor: color,
                                    // borderColor: border,
                                    // borderWidth: 1
                                }]
                            };
                            myChart.destroy();
                            myChart = new Chart(ctx, {
                                type: 'bar',
                                data: data,
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                fontSize: 10,
                                                stepSize: 1000,
                                                min: 0,
                                                beginAtZero: true,
                                            }
                                        }],
                                    },
                                    elements: {
                                        rectangle: {
                                            borderSkipped: "left"
                                        }
                                    },
                                    responsive: true,
                                    title: {
                                        display: true,
                                        text: "Gráfico Boletos Expedidos"
                                    }
                                }
                            });
                        }

                        function graficaCobrados(json) {
                            // var ctx2 = document.getElementById('myChart2');
                            var color = getRandomColor();
                            var data = {
                                labels: json.labels,
                                datasets: [{
                                    label: 'cobrados',
                                    data: json.cobrados,
                                    backgroundColor: color,
                                    // borderColor: border,
                                    // borderWidth: 1
                                }]
                            };
                            myChart2.destroy();
                            myChart2 = new Chart(ctx2, {
                                type: 'bar',
                                data: data,
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                fontSize: 10,
                                                stepSize: 1000,
                                                min: 0,
                                                beginAtZero: true,
                                            }
                                        }],
                                    },
                                    elements: {
                                        rectangle: {
                                            borderSkipped: "left"
                                        }
                                    },
                                    responsive: true,
                                    title: {
                                        display: true,
                                        text: "Gráfico Boletos Cobrados"
                                    }
                                }
                            });
                        }

                        function graficaPromedio(json) {
                            // var ctx3 = document.getElementById('myChart3');
                            var color = getRandomColor();
                            var data = {
                                labels: json.labels,
                                datasets: [{
                                    label: 'promedio',
                                    data: json.promedio,
                                    backgroundColor: color,
                                    // borderColor: border,
                                    // borderWidth: 1
                                }]
                            };
                            myChart3.destroy();
                            myChart3 = new Chart(ctx3, {
                                type: 'bar',
                                data: data,
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                fontSize: 10,
                                                stepSize: 10,
                                                min: 0,
                                                beginAtZero: true,
                                            }
                                        }],
                                    },
                                    elements: {
                                        rectangle: {
                                            borderSkipped: "left"
                                        }
                                    },
                                    responsive: true,
                                    title: {
                                        display: true,
                                        text: "Gráfico Boletos Promedio"
                                    }
                                }
                            });
                        }

                        function graficaIngresosXboletaje(json) {
                            // var ctx4 = document.getElementById('myChart4');
                            var color = getRandomColor();
                            var data = {
                                labels: json.labels,
                                datasets: [{
                                    label: 'ingresosXboletaje',
                                    data: json.ingresoBoletaje,
                                    backgroundColor: color,
                                    // borderColor: border,
                                    // borderWidth: 1
                                }]
                            };
                            myChart4.destroy();
                            myChart4 = new Chart(ctx4, {
                                type: 'bar',
                                data: data,
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                fontSize: 10,
                                                stepSize: 1000,
                                                min: 0,
                                                beginAtZero: true,
                                            }
                                        }],
                                    },
                                    elements: {
                                        rectangle: {
                                            borderSkipped: "left"
                                        }
                                    },
                                    responsive: true,
                                    title: {
                                        display: true,
                                        text: "Gráfico Ingresos x Boletaje"
                                    }
                                }
                            });
                        }

                        function graficaIngresosXpensiones(json) {
                            // var ctx5 = document.getElementById('myChart5');
                            var color = getRandomColor();
                            var data = {
                                labels: json.labels,
                                datasets: [{
                                    label: 'ingresosXpensiones',
                                    data: json.ingresoPensiones,
                                    backgroundColor: color,
                                    // borderColor: border,
                                    // borderWidth: 1
                                }]
                            };
                            myChart5.destroy();
                            myChart5 = new Chart(ctx5, {
                                type: 'bar',
                                data: data,
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                fontSize: 10,
                                                stepSize: 1000,
                                                min: 0,
                                                beginAtZero: true,
                                            }
                                        }],
                                    },
                                    elements: {
                                        rectangle: {
                                            borderSkipped: "left"
                                        }
                                    },
                                    responsive: true,
                                    title: {
                                        display: true,
                                        text: "Gráfico Ingresos por Pensiones"
                                    }
                                }
                            });
                        }

                        function graficaIngresosGeneral(json) {
                            // var ctx6 = document.getElementById('myChart6');
                            var color = getRandomColor();
                            var data = {
                                labels: json.labels,
                                datasets: [{
                                    label: 'IngresosGeneral',
                                    data: json.ventaTotal,
                                    backgroundColor: color,
                                    // borderColor: border,
                                    // borderWidth: 1
                                }]
                            };
                            myChart6.destroy();
                            myChart6 = new Chart(ctx6, {
                                type: 'bar',
                                data: data,
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                fontSize: 10,
                                                stepSize: 1000,
                                                min: 0,
                                                beginAtZero: true,
                                            }
                                        }],
                                    },
                                    elements: {
                                        rectangle: {
                                            borderSkipped: "left"
                                        }
                                    },
                                    responsive: true,
                                    title: {
                                        display: true,
                                        text: "Gráfico Ingreso General"
                                    }
                                }
                            });
                        }
                    });

                    $("#limpiar").click(function(){
                        $("input:not([type=radio])").val("");
                        $('select').prop('selectedIndex',0);
                        $('select').val(null).trigger('change');
                        tbl_ingresos.clear().draw();
                    });

                    function getRandomColor() {
                        var col = [];
                        for(h = 0; h < 31; h++){
                            var r = Math.floor(Math.random() * 256);
                            var g = Math.floor(Math.random() * 256);
                            var b = Math.floor(Math.random() * 256);
                            var a = "0.8";
                            var color = "rgba(" + r + ", " + g + ", " + b + ", " + a +")";
                            col.push(color);
                        }
                        return col;
                    }

                    // function getRandomColor() {
                    //     var letters = '0123456789ABCDEF'.split('');
                    //     var color = '#';
                    //     colors = [];
                    //     for (var i = 0; i < 6; i++) {
                    //         color += letters[Math.floor(Math.random() * 16)];
                    //     }
                    //     return colors;
                    // }

                    function formatNumber(n) {
                        return n.toLocaleString(); // or whatever you prefer here
                    }
                </script>