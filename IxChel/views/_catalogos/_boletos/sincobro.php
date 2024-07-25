                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Cátalogo Boletos Sin Cobro</h1>
                    <div class="row">
                        <div class="col-lg-9">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Boletos sin Cobro</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tbl_cBsinCobro" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th rowspan="2" style="vertical-align:middle">Estado</th>
                                                    <th rowspan="2" style="vertical-align:middle"><span style="color: #e74a3b">Inactivo</span><b>&nbsp;/&nbsp;</b><span style="color: #1cc88a">Activo</span></th>
                                                    <th rowspan="2"></th>
                                                    <th>id_estacionamiento</th>
                                                    <th>Estacionamiento</th>
                                                </tr>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Concepto</th>
                                                    <th>id_estacionamiento</th>
                                                    <th>Estacionamiento</th>
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
                <!-- /.container-fluid -->

                <!-- Modal Alta Boleto -->
                <div class="modal fade" id="altaConcepto" tabindex="-1" role="dialog" aria-labelledby="altaConceptoLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="altaConceptoLabel">Agregar Concepto</h5>
                                <button type="button" class="close modalClose">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="frm-alta" method="POST">
                                <div class="modal-body"> 
                                    <div class="row" id="conceptos">
                                       <?php if($this->session->userdata('rol') <= '4'): ?>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="estacionamiento">Estacionamiento</label>
                                                <select id="estacionamiento" name="estacionamiento" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach($estacionamiento as $item): ?>
                                                        <option value="<?= $item['id_estacionamiento']?>"><?= $item['nombre']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php endif;?>
                                        <div class="col-md-12">
                                            <label for="concepto" class="col-form-label">Concepto</label>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <input id="concepto" type="text" class="form-control" name="concepto[]" required>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <a href='#!' class="agregarConcepto" class='btn btn-sm' role="button"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-secondary modalClose">Cerrar</a>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Editar Concepto -->
                <div class="modal fade" id="editConcepto" tabindex="-1" role="dialog" aria-labelledby="editConceptoLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editConceptoLabel">Editar Concepto</h5>
                                <button type="button" class="close modalClose">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="frm-editConcepto" method="POST">
                                <div class="modal-body"> 
                                    <div class="row">
                                        <input type="hidden" id="idC_e" name="idC_e">
                                        <input type="hidden" id="estacionamiento_idC_e" name="estacionamiento_idC_e">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="estacionamientoC_e" class="col-form-label">Estacionamiento</label>
                                                <input id="estacionamientoC_e" type="text" class="form-control" name="estacionamientoC_e" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="concepto_e" class="col-form-label">Concepto</label>
                                                <input id="concepto_e" type="text" class="form-control" name="concepto_e" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-secondary modalClose">Cerrar</a>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php $this->load->view('templates/footer'); ?>
                <script>
                    $('#estacionamiento').select2({
                        dropdownParent: $('#altaConcepto')
                    });
                    $(document).ready(function() {
                        let tbl_cBsinCobro = $('#tbl_cBsinCobro').DataTable();
                        fn_tbl_cBsinCobro(estatus=1);

                        function fn_tbl_cBsinCobro(estatus) {
                            tbl_cBsinCobro = $('#tbl_cBsinCobro').DataTable({
                                destroy: true,
                                dom: 'Bfrtip',
                                buttons: [
                                    // {
                                    //     text: (estatus == 1 ? 'Eliminados' : 'Activos'),
                                    //     action: function ( e, dt, node, config ) {
                                    //         (estatus == 1 ? fn_tbl_cBsinCobro(estatus=0) : fn_tbl_cBsinCobro(estatus=1));
                                    //     }
                                    // },
                                    {
                                        text: '<i class="fas fa-plus"></i>',
                                        titleAttr: 'Agregar',
                                        className: 'buttons-agregar',
                                        attr: (estatus == 1 ? {
                                            'data-toggle':"modal",
                                            'data-target':"#altaConcepto"
                                        } :  {'hidden':true})
                                    }
                                ],
                                "ajax": {
                                    type: "POST",
                                    url: "../../getCatBsinCobro",
                                    dataType: "json",
                                    data: {estatus:estatus}
                                },
                                "columns": [
                                    {"data": "id"},
                                    {"data": "concepto","width":"75%"},
                                    {"data": "estatus","width":"15%",
                                        "render": function(data, type, full, meta) {
                                        html = ``;
                                        if(full.estacionamiento == "SKYLINE"){
                                            html +=`<a href='#!' class='btn btn-warning btn-sm' role="button">Demo</a>`;
                                        }else{
                                            if(data != 'Activo'){
                                                html +=`<a href='#!' class='btn btn-danger btn-sm' role="button">`+data+`</a>`;
                                            }else{
                                                html +=`<a href='#!' class='btn btn-success btn-sm' role="button">`+data+`</a>`;
                                            }
                                        }
                                        return html;
                                    }},
                                    {"data": "id_estatus",
                                        "render": function(data, type, full, meta) {
                                        acciones = `<div>\n\
                                        <!-- a href='#!' class='edit'><i class='fas fa-pen'></i></a -->`;
                                        if(data == 0){
                                            acciones +=`<a href='#!' class='estatus' data-estatus='`+data+`'><i class="fas fa-toggle-on fa-rotate-180 fa-lg" style="color: #e74a3b;"></i></a>`;
                                        }else{
                                            acciones +=`<a href='#!' class='estatus' data-estatus='`+data+`'><i class="fas fa-toggle-on fa-lg" style="color: #1cc88a"></i></a>\n\
                                            <!-- <a href='#!' class='editar' data-editar='`+data+`'><i class='fas fa-pen'></i></a> -->`;
                                        }
                                        acciones +=`</div>`;
                                        return acciones;
                                    },"width":"5%"},
                                    {"defaultContent": "",
                                        "render": function(data, type, full, meta) {
                                            <?php if($this->session->userdata('rol') == '1'): ?>
                                                return `<a href='#!' class='editConcepto'><i class='fas fa-pen'></i></a>`;
                                            <?php endif; ?>
                                        },"width": "3%"
                                    },
                                    {"data": "estacionamiento_id"},
                                    {"data": "estacionamiento"}
                                ],
                                "columnDefs": [
                                    {
                                        "targets": [0,5,6],
                                        "visible": false,
                                        "searchable": true
                                    },
                                    { width: '5%', targets: 0 },
                                    {
                                        className: "dt-body-center", targets: [ 2,3 ],
                                        // className: "dt-body-right", targets: [ 1,2 ],
                                    }
                                ],
                                fixedHeader: true,
                                // order: [[11, 'asc']],
                               <?php if($this->session->userdata('rol') <= '4'): ?>
                                rowGroup: {
                                    dataSrc: 'estacionamiento'
                                },
                                <?php endif; ?>
                                initComplete: function () {
                                    $('.loading').fadeOut('slow');
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
                        }

                        $("#tbl_cBsinCobro tbody").on("click", "a.estatus", function () {
                            let data = tbl_cBsinCobro.row($(this).parents("tr")).data();
                            let id = data.id;
                            let estatus = $(this).data('estatus');
                            console.log(id);
                            $('.loading').fadeIn('slow');
                            $.post("../../updateEstatusCatBsinCobro", {id:id,estatus:estatus},
                            function(result){
                                $('.loading').fadeOut('slow');
                                if(result.validacion){
                                    Swal.fire({
                                        title:'Correcto',
                                        text:'Se actualizo el estatus',
                                        icon:'success',
                                        allowOutsideClick:false
                                    }).then((result) =>{
                                        tbl_cBsinCobro.ajax.reload();
                                    });
                                }else{
                                    Swal.fire({
                                        title:'Error',
                                        text:'Ocurrio un error',
                                        icon:'error',
                                        allowOutsideClick:false
                                    }).then((result) =>{
                                        tbl_cBsinCobro.ajax.reload();
                                    });
                                }
                            },'json');
                        });

                        $("#frm-alta").submit(function(event){
                            event.preventDefault();
                            var data = $(this).serialize();
                            $('.loading').fadeIn('slow');
                            $.post('../../insertConceptoBsinCobro',data,
                            function(result){
                                $('.loading').fadeOut('slow');
                                if(result.validacion){
                                    Swal.fire({
                                        title:'Correcto',
                                        text: result.mensaje,
                                        icon: result.icon,
                                        allowOutsideClick:false
                                    }).then((result) =>{
                                        tbl_cBsinCobro.ajax.reload();
                                        $( ".eliminarConcepto" ).each(function() {
                                            $(this).parent('div').prev().remove('div');
                                            $(this).parent('div').remove();
                                        });
                                        $('select').prop('selectedIndex',0);
                                        $('select').val(null).trigger('change');
                                        $("input").val("");
                                        $(".modal").modal('hide');
                                    });
                                }else{
                                    Swal.fire({
                                        title:'Error',
                                        text: result.mensaje,
                                        icon: result.icon,
                                        allowOutsideClick:false
                                    }).then((result) =>{
                                        tbl_cBsinCobro.ajax.reload();
                                        // $(".modal").modal('hide');
                                    });
                                }
                            },'json');
                        });

                        $("#conceptos").on('click','.agregarConcepto', function(){
                            $(this).parent('div').after(`<div class="col-md-11">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="concepto[]">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <a href="#!" class="agregarConcepto" class="btn btn-sm" role="button"><i class="fas fa-plus"></i></a>
                                </div>`);
                                $(this).parent('div').html('<a href="#!" class="eliminarConcepto" class="btn btn-sm" role="button"><i class="fas fa-minus"></i></a>');
                        });

                        $("#conceptos").on('click','.eliminarConcepto', function(){
                            $(this).parent('div').prev().remove('div');
                            $(this).parent('div').remove();
                        });

                        $("#tbl_cBsinCobro tbody").on("click", "a.editConcepto", function () {
                            let data = tbl_cBsinCobro.row($(this).parents("tr")).data();
                            $("#idC_e").val(data.id);
                            $("#estacionamiento_idC_e").val(data.estacionamiento_id);
                            $("#estacionamientoC_e").val(data.estacionamiento);
                            $("#concepto_e").val(data.concepto);
                            $("#editConcepto").modal("show");
                        });

                        $("#frm-editConcepto").submit(function(event) {
                            event.preventDefault();
                            var data = $(this).serialize();
                            
                            $('.loading').fadeIn('slow');
                            $.post('../../updateConceptoBsinCobro', data,
                            function(result) {
                                $('.loading').fadeOut('slow');
                                if(result.validacion){
                                    Swal.fire({
                                        title:'Correcto',
                                        text: result.mensaje,
                                        icon: result.icon,
                                        allowOutsideClick:false
                                    }).then((result) =>{
                                        tbl_cBsinCobro.ajax.reload();
                                        $("input").val("");
                                        $(".modal").modal('hide');
                                    });
                                }else{
                                    Swal.fire({
                                        title:'Error',
                                        text: result.mensaje,
                                        icon: result.icon,
                                        allowOutsideClick:false
                                    }).then((result) =>{
                                        tbl_cBsinCobro.ajax.reload();
                                        // $(".modal").modal('hide');
                                    });
                                }
                            }, 'json');
                        });
                    });

                    $(".modalClose").click(function(){
                        $("input").val("");
                        $('select').prop('selectedIndex',0);
                        $('select').val(null).trigger('change');
                        $( ".eliminarConcepto" ).each(function() {
                            $(this).parent('div').prev().remove('div');
                            $(this).parent('div').remove();
                        });
                        $(".modal").modal('hide');
                    });
            </script>