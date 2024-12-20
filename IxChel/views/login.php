<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>public/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url();?>public/css/login.min.css" rel="stylesheet">
</head>
<!-- Loader -->
<div class="loading">
    <div class="loader"></div>
</div>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 card-login">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Inicia Sesión</h1>
                                    </div>
                                    <form method="POST" action="<?= base_url('login/login');?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email" aria-describedby="emailHelp"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Contraseña">
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordarme</label>
                                            </div>
                                        </div> -->
                                        <?php
                                            if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
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
                                        <button class="btn btn-danger btn-user btn-block" type="submit">
                                            Iniciar Sesión
                                        </button>
                                    </form>
                                    <div class="text-right">
                                        <!-- <a class="small" href="<?= base_url('olvidemicontrasena') ?>">¿Olvidaste tu contraseña?</a> -->
                                    </div>
                                    <!-- <hr>
                                    <div class="text-center">
                                        <a class="large" href="<?= base_url('register') ?>">¡Crea una cuenta!</a>
                                    </div> -->
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
    
    <script>
        $(document).ready(function(){
            $('.loading').fadeOut('slow');
        });
    </script>
</body>

</html>