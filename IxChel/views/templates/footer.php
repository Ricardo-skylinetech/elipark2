</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; @skylinetech 2022</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Deseas salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="<?= base_url('login\logout'); ?>">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="modalPerfilTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPerfilTitle">Mi perfil</h5>
                <button type="button" class="close modalClose">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Datos personales:</h5>
                <hr>
                <form id="frm-updatePerfil" method="POST">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 col-lg-4 text-center d-none d-lg-block">
                                <img src="<?=base_url('public/img/usuario.png');?>" width="70%" alt="">
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <div class="row">
                                <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="nombres" class="col-form-label">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="apellido_paterno" class="col-form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="apellido_materno" class="col-form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="parking" class="col-form-label">Estacionamiento</label>
                                <input type="text" class="form-control" id="parking" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-6 col-sm-12" style="text-align:right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-4 mb-2">Guardar</button>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
                <hr>
                <h5>Email:</h5>
                <hr>
                <form id="frm-updateEmail" method="POST">
                    <div class="form-group row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required="">
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-6 col-sm-12" style="text-align:right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-4 mb-2">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <h5>Cambiar Contraseña:</h5>
                <hr>
                <form id="frm-updatePassword" method="POST">
                    <div class="form-group row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="password" class="col-form-label">Nueva Contraseña</label>
                                <input type="text" class="form-control" id="password" name="password" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="password" class="col-form-label">Repetir Contraseña</label>
                                <input type="text" class="form-control" id="password" name="password" required="">
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-6 col-sm-12"  style="text-align:right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-4 mb-2">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary modalClose" data-dismiss="modal">Cerrar</button>
                <!-- <button type="submit" class="btn btn-primary">Guardar</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>public/js/sb-admin-2.min.js"></script>

<!-- Datatables -->
<script src="<?= base_url(); ?>public/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/datatables/Buttons-2.2.3/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/datatables/Buttons-2.2.3/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/datatables/JSZip-2.5.0/jszip.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/datatables/dataTables.rowGroup.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/select2/select2.full.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    sensarpensiones();

    setInterval(sensarpensiones, 30000);

     function sensarpensiones(){

        var url="<?php echo 'http://'.$_SERVER['HTTP_HOST']."/elipark2/";?>";
        $.post(url+"pensiones/sensarpensiones",
            function(data){

                console.log(data.valida);
            },'json');

      }
            
    });
      
</script>
<script>
$(document).ready(function() {
    $('.modal').modal({
        backdrop: 'static',
        keyboard: false,
        show: false
    });
});
</script>
<script>
$(document).ready(function(){
    $(".btnPerfil").click(function(){
        $.ajax({
            url: "<?= base_url();?>Perfil/getUserData",
            type: "POST",
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.loading').fadeIn('slow');
            },
            success:function(result) {
                if (result.validacion) {
                    $.each(result.data[0], function(index, value) {
                        $("#"+index).val(value);
                    });
                    $("#modalPerfil").modal('show');
                }
                $('.loading').fadeOut('slow');
            }
        });
    });

    $("#frm-updatePerfil").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
            // console.log(formData);

        $.ajax({
            url: "<?= base_url();?>Perfil/updateUsuario",
            type: "POST",
            dataType: 'JSON',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.loading').fadeIn('slow');
            },
            success:function(response) {
                if (response.validacion) {
                    $(".modal input").val("");
                    $(".modal").modal('hide');
                    Swal.fire({
                        title: 'Correcto',
                        text: 'Se actualizo',
                        icon: 'success',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: response.mensaje,
                        icon: 'error',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });
                }
                $('.loading').fadeOut('slow');
            }
        });
    });

    $("#frm-updatePassword").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
            // console.log(formData);

        $.ajax({
            url: "<?= base_url();?>Perfil/updatePassword",
            type: "POST",
            dataType: 'JSON',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.loading').fadeIn('slow');
            },
            success:function(response) {
                if (response.validacion) {
                    $(".modal input").val("");
                    $(".modal").modal('hide');
                    Swal.fire({
                        title: 'Correcto',
                        text: 'Se actualizo',
                        icon: 'success',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: response.mensaje,
                        icon: 'error',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });
                }
                $('.loading').fadeOut('slow');
            }
        });
    });

    $("#frm-updateEmail").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
            // console.log(formData);

        $.ajax({
            url: "<?= base_url();?>Perfil/updateEmail",
            type: "POST",
            dataType: 'JSON',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('.loading').fadeIn('slow');
            },
            success:function(response) {
                if (response.validacion) {
                    $(".modal input").val("");
                    $(".modal").modal('hide');
                    Swal.fire({
                        title: 'Correcto',
                        text: 'Se actualizo',
                        icon: 'success',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: response.mensaje,
                        icon: 'error',
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    });
                }
                $('.loading').fadeOut('slow');
            }
        });
    });

});
</script>