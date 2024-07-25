                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Cátalogo Estacionamientos</h1>

                    <div class="row">

                        <div class="col-lg-12">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Estacionamientos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" id="tblEstacionamientos" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Estacionamiento</th>
                                            <th rowspan="2" style="vertical-align:middle">Grupo</th>
                                            <th rowspan="2" style="vertical-align:middle">Estatus</th>
                                            <th rowspan="2" style="vertical-align:middle"></th>
                                            <th rowspan="2" style="vertical-align:middle"></th>
                                            <th rowspan="2" style="vertical-align:middle">Adjuntar</th>
                                            <th rowspan="2" style="vertical-align:middle">LimiteDiferencia</th>
                                        </tr>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- DB -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                        </div>

                    </div>

                </div>

                <!-- Modal Alta Boleto -->
                <div class="modal fade" id="altaEstacionamiento" tabindex="-1" role="dialog" aria-labelledby="altaEstacionamientoLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="altaEstacionamientoLabel">Agregar Estacionamiento</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="frm-alta" method="POST">
                                <div class="modal-body"> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nombre" class="col-form-label">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="grupo">Grupo</label>
                                                <select class="form-control" id="grupo" name="grupo" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach($grupos as $item): ?>
                                                        <option value="<?= $item['id_grupo']?>"><?= $item['nombre']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</a>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal subir Excel -->
                <div class="modal fade bd-example-modal-lg" id="modalTarifario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Subir Tarifas</h5>
                                <button type="button" class="close modalClose">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form id="frm-importTarifas" method="post" action="javascript:void(0)" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="card shadow mb-4">
                                            <div class="card-body">                                
                                                <div class="container-fluid">
                                                    <input type="hidden" name="estacionamiento" id="estacionamiento">
                                                    <div class="form-group row upload">
                                                        <input type="file" id="archivo" name="archivo" accept=".pdf" required>
                                                        <p>Arrastra tus archivos aquí o has clic dentro del area punteada</p>
                                                        <i class="fas fa-file-upload fa-3x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                                        <button id="btn-importTarifas" type="submit" class="btn btn-primary">Cargar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Tarifarios-->
                <div class="modal fade" id="modal-pdf" tabindex="-1" role="dialog" aria-labelledby="modal-pdf-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-pdf-label">Tarifas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- <iframe id="iframe-pdf" src="" width="100%" height="500px"></iframe> -->
                        </div>
                        <div class="modal-footer" style="position: relative;">
                            <input id="id_tarifario" type="hidden">
                            <a href="#" class="deleteTarifario" style="position: absolute; left: 10px; bottom: 5px;">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->
                <?php $this->load->view('templates/footer'); ?>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.5.141/pdf.min.js" integrity="sha512-BagCUdQjQ2Ncd42n5GGuXQn1qwkHL2jCSkxN5+ot9076d5wAI8bcciSooQaI3OG3YLj6L97dKAFaRvhSXVO0/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script>
                $(document).ready(function(){
                    let rol = <?php echo $this->session->userdata('rol')?>;
                    let ocultar = (rol != 1 ? '4,5,7' : '');
                    let columnasOcultas = ocultar.split(',').map(Number); // Convertir la cadena en un array de números

                    let table = $('#tblEstacionamientos').DataTable({
                        destroy: true,
                        dom: 'Bfrtip',                        
                        buttons: [
                            <?php if($this->session->userdata('rol') <= '3'): ?>
                            {
                                text: '<i class="fas fa-plus"></i>',
                                titleAttr: 'Agregar',
                                className: 'buttons-agregar',
                                attr: {
                                    'data-toggle':"modal",
                                    'data-target':"#altaEstacionamiento"
                                }
                            }
                            <?php endif; ?>
                        ],
                       
                        "ajax": {
                            type: "POST",
                            url: "../getEstacionamientos",
                            dataType: "json"
                            
                        },
                        "columns": [
                            {"data": "id_estacionamiento"},
                            {"data": "nombre","width":"40%"},
                            {"data": "grupo","width":"30%"},
                            {"data": "descripcion",
                                "render": function(data, type, full, meta) {
                                    estatus = `<div>`;
                                        if(full.id_estacionamiento == 1){
                                            estatus +=`<a href='#!' class='btn btn-warning btn-sm' role="button">Demo</a>`;
                                        }else{
                                            if(data != 'Activo'){
                                                estatus +=`<a href='#!' class='btn btn-danger btn-sm' role="button">`+data+`</a>`;
                                            }else{
                                                estatus +=`<a href='#!' class='btn btn-success btn-sm' role="button">`+data+`</a>`;
                                            }
                                        estatus +=`</div>`;
                                    }
                                    return estatus;
                                },"width":"20%"
                            },
                            {"defaultContent": "",
                                "render": function(data, type, full, meta) {
                                    acciones = `<div>`;
                                    <?php if($this->session->userdata('rol') <= '3'): ?>
                                        acciones += `<a href='#!' class='edit'><i class='fas fa-pen'></i></a>`;
                                    <?php endif; ?>
                                    acciones +=`</div>`;
                                    return acciones;
                                },"width":"5%"
                            },
                            {"defaultContent": "",
                                "render": function(data, type, full, meta) {
                                    acciones = `<div>`;
                                        <?php if($this->session->userdata('rol') <= '3'): ?>
                                            if(data == 0){
                                            acciones +=`<a href='#!' class='estatus' data-value='`+full.estatus+`'><i class="fas fa-toggle-on fa-rotate-180 fa-lg" style="color: #e74a3b;"></i></a>`;
                                            }else{
                                            acciones +=`<a href='#!' class='estatus' data-value='`+full.estatus+`'><i class="fas fa-toggle-on fa-lg" style="color: #1cc88a"></i></a>`;
                                            }
                                        <?php endif; ?>
                                    acciones +=`</div>`;
                                    return acciones;
                                },"width":"5%"
                            },
                            {"defaultContent": "",
                                "render": function(data, type, full, meta) {
                                    acciones = `<div>`;
                                    if(full.estatusTarifa != 1){
                                        acciones +=`<a href='#!' class='uploadTarifario'><i class="fas fa-paperclip"></i></i></a>`;
                                    }else{
                                        acciones +=`<a href='#!' class='showTarifarios'><i class='fas fa-eye'></i></a>`;
                                    }
                                    acciones +=`</div>`;
                                    return acciones;
                                },"width":"5%"
                            },
                            {"data": "limiteBolDif",
                                "render": function(data, type, row, meta) {
                                    acciones = `<div>`;
                                    <?php if($this->session->userdata('rol') <= '3'): ?>
                                        acciones += `<input type="number" class="form-control updateLimit" value="` + data + `">`;
                                    <?php endif; ?>
                                    acciones +=`</div>`;
                                    return acciones;
                                },"width":"5%"
                            }
                        ],
                        "columnDefs": [
                            {
                                "targets": [0].concat(columnasOcultas),
                                "visible": false,
                                "searchable": true
                            },
                            { width: '5%', targets: 0 },
                            {
                                className: "dt-body-center", targets: [ 2,3,4 ],
                                // className: "dt-head-center", targets: [ 0 ],
                            }
                        ],
                        fixedHeader: true,
                        // order: [[2, 'asc']],
                        rowGroup: {
                            dataSrc: 'grupo'
                        },
                        initComplete: function () {
                            $('.loading').fadeOut('slow');
                            <?php if($this->session->userdata('rol') <= '3'):?>
                            var api = this.api();
                            api
                            .columns(2)
                            .every(function () {
                                var column = this;
                                var select = $('<select class="form-control"><option value="" selected disabled>PORTAFOLIO</option><option value="">TODO</option></select>')
                                    .appendTo($(table.column( 1 ).header()).empty())
                                    .on('change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex($(this).val());
            
                                        column.search(val ? '^' + val + '$' : '', true, false).draw();
                                    });
            
                                    table.column( 2 )
                                    .data()
                                    .unique()
                                    .sort()
                                    .each(function (d, j) {
                                        select.append('<option value="' + d + '">' + d + '</option>');
                                    });
                            });
                            <?php endif; ?>

                        },
                        "language": {
                            "url": "<?= base_url();?>public/vendor/datatables/language/spanish.json"
                        },
                        "info": true,
                        "scrollY": '53vh',
                        "scrollX" : true,
                        "scrollCollapse": true,
                        "paging": true,
                        "pageLength": 25,
                        "searching": true,
                        "ordering": false,
                    });

                    $("#tblEstacionamientos tbody").on("click", "a.estatus", function () {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.id_estacionamiento;
                        let estatus = $(this).data('value');
                        $('.loading').fadeIn('slow');
                        $.post("../updateEstacionamiento", {id:id,estatus:estatus},
                        function(result){
                            $('.loading').fadeOut('slow');
                            if(result.validacion){
                                Swal.fire({
                                    title:'Correcto',
                                    text:'Se actualizo el estatus',
                                    icon:'success',
                                    allowOutsideClick:false
                                }).then((result) =>{
                                    table.ajax.reload();
                                });
                            }else{
                                Swal.fire({
                                    title:'Error',
                                    text:'Ocurrio un error',
                                    icon:'error',
                                    allowOutsideClick:false
                                }).then((result) =>{
                                    table.ajax.reload();
                                });
                            }
                        },'json');
                    });

                    $("#frm-alta").submit(function(event){
                        event.preventDefault();
                        var data = $(this).serialize();
                        $('.loading').fadeIn('slow');
                        $.post('../insertEstacionamiento',data,
                        function(result){
                            $('.loading').fadeOut('slow');
                            if(result.validacion){
                                Swal.fire({
                                    title:'Correcto',
                                    text:'Se guardo el Estacionamiento',
                                    icon:'success',
                                    allowOutsideClick:false
                                }).then((result) =>{
                                    table.ajax.reload();
                                    $('select').prop('selectedIndex',0);
                                    $('select').val(null).trigger('change');
                                    $("input").val("");
                                    $(".modal").modal('hide');
                                });
                            }else{
                                Swal.fire({
                                    title:'Error',
                                    text:'Ocurrio un error',
                                    icon:'error',
                                    allowOutsideClick:false
                                }).then((result) =>{
                                    table.ajax.reload();
                                    $(".modal").modal('hide');
                                });
                            }
                        },'json');
                    });

                    $("#tblEstacionamientos tbody").on("click", "a.uploadTarifario", function () {
                        let data = table.row($(this).parents("tr")).data();
                        let id = data.id_estacionamiento;
                        $("#estacionamiento").val(id);
                        $("#modalTarifario").modal('show');
                    });

                    $("#frm-importTarifas").submit(function(event) {
                        event.preventDefault();

                        // Obtener los datos del formulario
                        var formData = new FormData($(this)[0]);

                        $.ajax({
                            url: '../importTarifas',
                            type: 'POST',
                            data: formData,
                            dataType: 'json',
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                $('.loading').fadeIn('slow');
                            },
                            success: function(data) {
                                $('.loading').fadeOut('slow');
                                if (data.validacion) {
                                    table.ajax.reload();
                                    $(".modal input").val("");
                                    $("input").val("");
                                    $('form p').text("0 archivo(s) seleccionados");
                                    $(".modal").modal("hide");
                                } else {
                                    $('.loading').fadeOut('slow');
                                }
                                Swal.fire({
                                    title: 'Correcto',
                                    html: data.mensaje,
                                    icon: data.icon,
                                    allowOutsideClick: false
                                });
                            }
                        });
                    });

                    $("#tblEstacionamientos tbody").on("click", "a.showTarifarios", function () {
                        let datos = table.row($(this).parents("tr")).data();
                        var estacionamiento = datos.id_estacionamiento.toString();

                        $.post("../verTarifas", {estacionamiento: estacionamiento},
                            function(result) {
                                if (result.validacion) {
                                    var obj = document.createElement('object'); 
                                    obj.style.width = '100%';
                                    obj.style.height = '450pt';
                                    obj.type = 'application/pdf';
                                    obj.data = 'data:application/pdf;base64,' + [result.data['archivo']];
                                    $('#modal-pdf .modal-body').html(obj);
                                    $("#id_tarifario").val(result.data['id_tarifario']);
                                    $('#modal-pdf').modal('show');
                                }
                                $('.loading').fadeOut('slow');
                            }
                        );
                    });

                    $("a.deleteTarifario").click(function () {
                        var id_tarifario = $("#id_tarifario").val();
                        $.post("../eliminarTarifas", {id_tarifario: id_tarifario},
                            function(result) {
                                console.log(result);
                                if (result.validacion) {
                                    Swal.fire({
                                        title: 'Correcto',
                                        html: "Se elimino el documento",
                                        icon: "success",
                                        allowOutsideClick: false
                                    });
                                    $(".modal").modal("hide");
                                }
                                $('.loading').fadeOut('slow');
                                table.ajax.reload();
                            },'json'
                        );
                    });

                    $('#tblEstacionamientos tbody').on('change', 'input.updateLimit', function() {
                        let datos = table.row($(this).parents("tr")).data();
                        var id = datos.id_estacionamiento;
                        var input = this;
                        var value = input.value; // Capturar el nuevo valor del input

                        $.ajax({
                            "url": "../updateLimit",
                            "method": "POST",
                            dataType: 'json',
                            "data": {
                                "id": id,
                                "value": value
                            },
                            "success": function(response) {
                                if (response.validacion) {
                                    Swal.fire({
                                        title: 'Correcto',
                                        html: "Se actualizo el limite",
                                        icon: "success",
                                        allowOutsideClick: false
                                    });
                                    $(".modal").modal("hide");
                                }
                                $('.loading').fadeOut('slow');
                                table.ajax.reload();
                            }
                        });
                    });
                });

                $(".modalClose").click(function(){
                        $("input").val("");
                        $('select').prop('selectedIndex',0);
                        $(".modal").modal('hide');
                    });
            </script>