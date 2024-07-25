            <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Cátalogo Accesos</h1>
                    <div class="row">

                        <div class="col-lg-12">
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm" id="tblUsuarios" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombres</th>
                                                    <th>A.&nbsp;Paterno</th>
                                                    <th>A.&nbsp;Materno</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                    <th>Rol</th>
                                                    <!-- <th>Permiso</th> -->
                                                    <th></th>
                                                    <th>Estacionamiento</th>
                                                    <th></th>
                                                    <th>Portafolio</th>
                                                    <th>Estatus</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
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

                <!-- Modal Alta Usuario -->
                <div class="modal fade" id="altaUsuario" tabindex="-1" role="dialog" aria-labelledby="altaUsuarioLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="altaUsuarioLabel">Agregar Usuario</h5>
                                <button type="button" class="close modalClose" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="frmAlta" method="POST">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="nombre" class="col-form-label">Nombres</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="apaterno" class="col-form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="apaterno" name="apaterno" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="amaterno" class="col-form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" id="amaterno" name="amaterno" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="rol">Rol</label>
                                                <select id="rol" name="rol" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach ($roles as $rol) : ?>
                                                        <option value="<?= $rol['id_rol'] ?>"><?= $rol['descripcion'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="permiso">Permiso</label>
                                                <select id="permiso" name="permiso" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach ($permisos as $permiso) : ?>
                                                        <option value="<?= $permiso['id_permiso'] ?>"><?= $permiso['descripcion'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="grupo">Portafolio</label>
                                                <select id="grupo" name="grupo" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach($grupos as $grupo): ?>
                                                        <option value="<?= $grupo['id_grupo']?>"><?= $grupo['nombre']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="estacionamiento">Estacionamiento</label>
                                                <select id="estacionamiento" name="estacionamiento" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach($estacionamientos as $estacionamiento): ?>
                                                        <option value="<?= $estacionamiento['id_estacionamiento']?>"><?= $estacionamiento['nombre']?></option>
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

                <!-- Modal Editar Usuario -->
                <div class="modal fade" id="editUsuario" tabindex="-1" role="dialog" aria-labelledby="editUsuarioLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editUsuarioLabel">Agregar Usuario</h5>
                                <button type="button" class="close modalClose" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="frmEdit" method="POST">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12" hidden>
                                            <div class="form-group">
                                                <label for="id_usuario" class="col-form-label">Id</label>
                                                <input type="text" class="form-control" id="id_usuario" name="id_usuario" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="nombre_e" class="col-form-label">Nombres</label>
                                                <input type="text" class="form-control" id="nombre_e" name="nombre_e" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="apaterno_e" class="col-form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" id="apaterno_e" name="apaterno_e" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="amaterno_e" class="col-form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" id="amaterno_e" name="amaterno_e" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="email_e" class="col-form-label">Email</label>
                                                <input type="text" class="form-control" id="email_e" name="email_e" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="rol_e">Rol</label>
                                                <select id="rol_e" name="rol_e" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach ($roles as $rol) : ?>
                                                        <option value="<?= $rol['id_rol'] ?>"><?= $rol['descripcion'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="permiso">Permiso</label>
                                                <select id="permiso" name="permiso" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach ($permisos as $permiso) : ?>
                                                        <option value="<?= $permiso['id_permiso'] ?>"><?= $permiso['descripcion'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="grupo_e">Grupo</label>
                                                <select id="grupo_e" name="grupo_e" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach($grupos as $grupo): ?>
                                                        <option value="<?= $grupo['id_grupo']?>"><?= $grupo['nombre']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="estacionamiento_e">Estacionamiento</label>
                                                <select id="estacionamiento_e" name="estacionamiento_e" class="js-example-basic-single js-states form-control form-control-sm" style="width: 100%" required>
                                                    <option value="" selected disabled>Elige una opción</option>
                                                    <?php foreach($estacionamientos as $estacionamiento): ?>
                                                        <option value="<?= $estacionamiento['id_estacionamiento']?>"><?= $estacionamiento['nombre']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</a>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->
                <?php $this->load->view('templates/footer'); ?>
                <script>
                    $('#estacionamiento').select2({
                        dropdownParent: $('#altaUsuario')
                    });
                    $('#rol').select2({
                        dropdownParent: $('#altaUsuario')
                    });
                    $('#grupo').select2({
                        dropdownParent: $('#altaUsuario')
                    });

                    $('#estacionamiento_e').select2({
                        dropdownParent: $('#editUsuario')
                    });
                    $('#rol_e').select2({
                        dropdownParent: $('#editUsuario')
                    });
                    $('#grupo_e').select2({
                        dropdownParent: $('#editUsuario')
                    });


                    $(document).ready(function() {
                        let table = $('#tblUsuarios').DataTable({
                            destroy: true,
                            dom: 'Bfrtip',
                            buttons: [
                                <?php if ($this->session->userdata('rol') <= '3') : ?> {
                                        text: '<i class="fas fa-plus"></i>',
                                        titleAttr: 'Agregar',
                                        className: 'buttons-agregar',
                                        attr: {
                                            'data-toggle': "modal",
                                            'data-target': "#altaUsuario"
                                        }
                                    }
                                <?php endif; ?>
                            ],

                            "ajax": {
                                type: "POST",
                                url: "../getUsuarios",
                                dataType: "json"

                            },
                            "columns": [
                                {"data": "id_usuario","width": "2%"},
                                {"data": "nombres"},
                                {"data": "apellido_paterno"},
                                {"data": "apellido_materno"},
                                {"data": "email"},
                                {"data": "rol_id"},
                                {"data": "rol"},
                                // {"data": "permiso"},
                                {"data": "estacionamiento_id"},
                                {"data": "estacionamiento"},
                                {"data": "id_grupo"},
                                {"data": "grupo"},
                                {"data": "estatus",
                                    "render": function(data, type, full, meta) {
                                        estatus = `<div>`;
                                        if(full.grupo == 'DEMO'){
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
                                    }
                                },
                                {"defaultContent": "",
                                    "render": function(data, type, full, meta) {
                                        if(full.grupo != 'DEMO'){
                                            return `<a href='#!' class='edit'><i class='fas fa-pen'></i></a>`;
                                        }
                                    },"width": "3%"
                                },
                                {"data": "estatus_id",
                                    "render": function(data, type, full, meta) {
                                    acciones = `<div>`;
                                    if(data == 0){
                                        acciones +=`<a href='#!' class='estatus' data-estatus='`+data+`'><i class="fas fa-toggle-on fa-rotate-180 fa-lg" style="color: #e74a3b;"></i></a>`;
                                    }else{
                                        acciones +=`<a href='#!' class='estatus' data-estatus='`+data+`'><i class="fas fa-toggle-on fa-lg" style="color: #1cc88a"></i></a>`;
                                    }
                                    acciones +=`</div>`;
                                    return acciones;
                                },"width": "3%"},
                                {
                                    "data": "estatus",
                                    "render": function() {
                                        return `<a href='#!' class='reset' data-toggle='tooltip' data-placement='top' title='resetear contraseña'><i class="fas fa-key fa-md"></i></a>`;
                                    },"width": "3%"
                                }
                            ],
                            "columnDefs": [
                                {
                                    "targets": [5,7,9],
                                    "visible": false,
                                    "searchable": true
                                },
                                {
                                    width: '5%',
                                    targets: 0
                                },
                                {
                                    className: "dt-body-center",
                                    targets: [6,8,9,10,11,12],
                                    // className: "dt-head-center", targets: [ 0 ],
                                }
                            ],
                            // fixedHeader: true,
                            // order: [[2, 'asc']],
                            // rowGroup: {
                            //     dataSrc: 'grupo'
                            // },
                            initComplete: function() {
                                $('.loading').fadeOut('slow');
                                // var api = this.api();
                                // api
                                //     .columns(2)
                                //     .every(function() {
                                //         var column = this;
                                //         console.log(column);
                                //         var select = $('<select class="form-control"><option value="" selected disabled>PORTAFOLIO</option><option value="">TODO</option></select>')
                                //             .appendTo($(table.column(1).header()).empty())
                                //             .on('change', function() {
                                //                 var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                //                 column.search(val ? '^' + val + '$' : '', true, false).draw();
                                //             });

                                //         table.column(2)
                                //             .data()
                                //             .unique()
                                //             .sort()
                                //             .each(function(d, j) {
                                //                 select.append('<option value="' + d + '">' + d + '</option>');
                                //             });
                                //     });
                            },
                            "language": {
                                "url": "<?= base_url(); ?>public/vendor/datatables/language/spanish.json"
                            },
                            "info": true,
                            "scrollY": '53vh',
                            "scrollX": true,
                            "scrollCollapse": true,
                            "paging": true,
                            "pageLength": 25,
                            "searching": true,
                            "ordering": false,
                        });

                        $("#tblUsuarios tbody").on("click", "a.estatus", function () {
                            let data = table.row($(this).parents("tr")).data();
                            let id_usuario = data.id_usuario;
                            let estatus = $(this).data('estatus');

                            $('.loading').fadeIn('slow');
                            $.post("../updateEstatus", {id_usuario:id_usuario,estatus:estatus},
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

                        $("#frmAlta").submit(function(event) {
                            event.preventDefault();
                            var data = $(this).serialize();
                            $('.loading').fadeIn('slow');
                            $.post('../insertUsuario', data,
                                function(result) {
                                    $('.loading').fadeOut('slow');
                                    if (result.validacion) {
                                        Swal.fire({
                                            title: 'Correcto',
                                            text: 'Se guardo el Usuario',
                                            html: result.mensaje,
                                            icon: 'success',
                                            allowOutsideClick: false
                                        }).then((result) => {
                                            table.ajax.reload();
                                            $('select').prop('selectedIndex', 0);
                                            $('select').val(null).trigger('change');
                                            $("input").val("");
                                            cerrarModal();
                                        });
                                    } else {
                                        Swal.fire({
                                            title: 'Error',
                                            text: result.mensaje,
                                            icon: 'error',
                                            allowOutsideClick: false
                                        }).then((result) => {
                                            table.ajax.reload();
                                            cerrarModal();
                                        });
                                    }
                                }, 'json');
                        });

                        $("#tblUsuarios tbody").on("click", "a.edit", function () {
                            let data = table.row($(this).parents("tr")).data();
                            $("#id_usuario").val(data.id_usuario);
                            $("#nombre_e").val(data.nombres);
                            $("#apaterno_e").val(data.apellido_paterno);
                            $("#amaterno_e").val(data.apellido_materno);
                            $("#email_e").val(data.email);
                            $("#rol_e").val(data.rol_id).trigger('change');
                            $("#grupo_e").val(data.id_grupo).trigger('change');
                            setTimeout(function() {$("#estacionamiento_e").val(data.estacionamiento_id).trigger('change');}, 300);
                            $("#editUsuario").modal("show");
                        });

                        $("#frmEdit").submit(function(event) {
                            event.preventDefault();
                            var data = $(this).serialize();
                            $('.loading').fadeIn('slow');
                            $.post('../updateUsuario', data,
                            function(result) {
                                $('.loading').fadeOut('slow');
                                if (result.validacion) {
                                    Swal.fire({
                                        title: 'Correcto',
                                        text: 'Se actualizo el Usuario',
                                        html: result.mensaje,
                                        icon: 'success',
                                        allowOutsideClick: false
                                    }).then((result) => {
                                        table.ajax.reload();
                                        $('select').prop('selectedIndex', 0);
                                        $('select').val(null).trigger('change');
                                        $("input").val("");
                                        cerrarModal();
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Error',
                                        text: result.mensaje,
                                        icon: 'error',
                                        allowOutsideClick: false
                                    }).then((result) => {
                                        table.ajax.reload();
                                        cerrarModal();
                                    });
                                }
                            }, 'json');
                        });

                        $('[data-toggle="tooltip"]').tooltip();

                        $("#tblUsuarios tbody").on("click", "a.reset", function () {
                            let data = table.row($(this).parents("tr")).data();
                            let id_usuario = data.id_usuario;
                            let email = data.email;

                            $('.loading').fadeIn('slow');
                            $.post('../resetPassword', {id_usuario:id_usuario, email:email},
                            function(result) {
                                $('.loading').fadeOut('slow');
                                if (result.validacion) {
                                    Swal.fire({
                                        title: 'Correcto',
                                        text: 'Se restablecio la contraseña',
                                        html: result.mensaje,
                                        icon: 'success',
                                        allowOutsideClick: false
                                    }).then((result) => {
                                        table.ajax.reload();
                                        $('select').prop('selectedIndex', 0);
                                        $('select').val(null).trigger('change');
                                        $("input").val("");
                                        cerrarModal();
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Error',
                                        text: result.mensaje,
                                        icon: 'error',
                                        allowOutsideClick: false
                                    }).then((result) => {
                                        table.ajax.reload();
                                        cerrarModal();
                                    });
                                }
                            }, 'json');
                        });

                        $("#grupo, #grupo_e").change(function(){
                            $('.loading').fadeIn('slow');
                            var grupo = $(this).val();
                            console.log(grupo);

                            $('#estacionamiento, #estacionamiento_e').empty();

                            $.post('../getEstacionamientoXgrupo', {grupo:grupo},
                            function(result) {
                                $('.loading').fadeOut('slow');
                                if (result.validacion) {

                                    var select2Data = [];
                                    $.each(result.data, function(index, item) {
                                        select2Data.push({
                                        id: item.id_estacionamiento,
                                        text: item.nombre
                                        });
                                    });

                                    console.log(select2Data);

                                    $('#estacionamiento').select2({
                                        data: select2Data
                                    });

                                    $('#estacionamiento_e').select2({
                                        data: select2Data
                                    });
                                } else {
                                    
                                }
                            }, 'json');
                        })
                    });

                    function cerrarModal(){
                        $("input").val("");
                        $('select').prop('selectedIndex',0);
                        $('select').val(null).trigger('change');
                        $('#estacionamiento, #estacionamiento_e').empty();
                        $(".modal").modal('hide');
                    }

                    $(".modalClose").click(function() {
                        $("input").val("");
                        $('select').prop('selectedIndex',0);
                        $('select').val(null).trigger('change');
                        $('#estacionamiento, #estacionamiento_e').empty();
                        $(".modal").modal('hide');
                    });
                </script>