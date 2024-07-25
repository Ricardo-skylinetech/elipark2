<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Olvide mi contraseña</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>public/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .bg-gradient-primary {
            background-image: url("<?= base_url();?>public/img/cyber-1920.jpg");
            background-position: center;
            /* background-size: cover */
        }

        .bg-password-image{
            background: url("<?= base_url();?>public/img/firma.png");
            background-position: left;
            background-size: 213% 100%;
        }

        .card-olvide {
            opacity: 0.9;
            top: 45%
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 card-olvide">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                                        <p class="mb-4">Lo entendemos, asi pasa. Simplemente ingrese su dirección de correo electrónico a continuación y le enviaremos un enlace para restablecer su contraseña.</p>
                                    </div>
                                    <form method="POST" action="<?= base_url('olvidemicontrasena/recuperar');?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                                placeholder="Ingresa tu correo electronico...">
                                        </div>
                                        <?php
                                            if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                                                echo '<div class="alert alert-'.$_SESSION['lbl'].' alert-dismissible fade show" role="alert">
                                                '.$_SESSION['msg'].'
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>';
                                            unset($_SESSION['msg']);
                                            } else if(validation_errors()){
                                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.
                                                validation_errors().
                                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>';
                                            }
                                        ?>
                                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Restablecer contraseña
                                        </button>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url('register'); ?>">¡Crea una cuenta!</a>
                                    </div> -->
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('login'); ?>">¿Ya tienes una cuenta? Ingresa!</a>
                                    </div>
                                </div>
                            </div>
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

</body>
</html>