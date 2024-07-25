<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restablecer contraseña</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>public/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-restablecer-image{
            background: url("<?= base_url();?>public/img/firma.png");
            background-position: left;
            background-size: 213% 100%;
        }
        .bg-gradient-primary {
            background-image: url("<?= base_url();?>public/img/cyber-1920.jpg");
            background-position: center;
            /* background-size: cover */
        }

        .card-restablecer {
            opacity: 0.9;
            top: 50%
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 card-restablecer">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-restablecer-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Restablecer contraseña</h1>
                            </div>
                            <form method="POST" action="<?= base_url('restablecer/restablecer?token='.$_GET['token'].'') ?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Contraseña" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            name="password2" placeholder="Repetir contraseña" required>
                                    </div>
                                    <div id="pswd_info">
                                        <ul>
                                            <li id="letter" class="invalid">Al menos <strong>una letra</strong></li>
                                            <li id="capital" class="invalid">Al menos <strong>una letra mayuscula</strong></li>
                                            <li id="number" class="invalid">Al menos <strong>un numero</strong></li>
                                            <li id="length" class="invalid">Por lo menos <strong>8 caracteres</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="pswd_error" class="alert alert-warning alert-dismissible fade show" role="alert" style="display:none;">
                                        Las contraseñas no son iguales
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block" type="submit" disabled>
                                        Restablecer
                                    </button>
                                <hr>
                                <?php
                                    if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                                        echo '<div class="alert alert-'.$_SESSION['lbl'].' alert-dismissible fade show" role="alert">
                                        '.$_SESSION['msg'].'
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>';
                                       unset($_SESSION['msg']);
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url();?>public/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url();?>public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url();?>public/js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('input[name=password]').keyup(function() {
                var pswd = $(this).val();

                //validate the length
                if ( pswd.length < 8 ) {
                    $('#length').show();
                } else {
                    $('#length').hide();
                }
                //validate letter
                if ( pswd.match(/[A-z]/) ) {
                    $('#letter').hide();
                } else {
                    $('#letter').show();
                }
                //validate capital letter
                if ( pswd.match(/[A-Z]/) ) {
                    $('#capital').hide();
                } else {
                    $('#capital').show();
                }
                //validate number
                if ( pswd.match(/\d/) ) {
                    $('#number').hide();
                } else {
                    $('#number').show();
                }
            }); 

            $('input[name=password2]').keyup(function() {
                var pswd2 = $(this).val();

                if ( $(this).val() !== $('input[name=password]').val() )
                {
                    $("button[type=submit]").prop( "disabled", true );
                    $("#pswd_error").show();
                } else {
                    $("button[type=submit]").prop( "disabled", false );
                    $("#pswd_error").hide();
                }
            });
        });
    </script>
</body>

</html>