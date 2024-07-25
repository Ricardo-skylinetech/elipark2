<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elipark</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>public/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url();?>public/css/estilos.min.css" rel="stylesheet">

    <!-- Datatables -->
    <!-- <link href="<?= base_url();?>public/vendor/datatables/dataTables.min.css" rel="stylesheet"> -->
    <link href="<?= base_url();?>public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url();?>public/vendor/datatables/Buttons-2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url();?>public/vendor/datatables/rowGroup.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url();?>public/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    <link href="<?= base_url();?>public/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?= base_url();?>public/vendor/select2/select2.min.css" rel="stylesheet">

</head>
<!-- Loader -->
<div class="loading">
    <div class="loader"></div>
</div>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('inicio\index'); ?>">
                <img src="<?= base_url();?>public/img/icon_elipark.png" alt="" width="50">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Inicio -->
            
            <li id="li-inicio" class="nav-item active">
                <a class="nav-link" href="<?= base_url('inicio\index'); ?>">
                    <i class="fas fa-home"></i>
                    <span>Inicio</span></a>
            </li>
            

            <!-- Nav Item - Catalogos -->
            <?php if($this->session->userdata('rol') != 6): ?>
            <li id="li-catalogos" class="nav-item">
                <a class="nav-link" href="<?= base_url('catalogos\index'); ?>">
                    <i class="fas fa-folder-open"></i>
                    <span>Catalogos</span></a>
            </li>
            <?php endif; ?>

            <!-- Nav Item - Panel -->
            <li id="li-panel" class="nav-item">
                <a class="nav-link" href="<?= base_url('panel\index'); ?>">
                <i class="fas fa-columns"></i>
                    <span>Panel</span></a>
            </li>

            <!-- Nav Item - Pensiones -->
            <?php if($this->session->userdata('rol') == 1 || $this->session->userdata('rol') == 6 || $this->session->userdata('rol') == 2): ?>
            <li id="li-pensiones" class="nav-item">
                <a class="nav-link" href="<?= base_url('pensiones\index'); ?>">
                <i class="fas fa-parking fa-lg"></i>
                    <span>Pensiones</span></a>
            </li>
            <?php endif; ?>

            <!-- Nav Item - Reportes -->
            <?php if($this->session->userdata('rol') <= 4): ?>
            <li id="li-reportes" class="nav-item">
                <a class="nav-link" href="<?= base_url('reportes\index'); ?>">
                <i class="fas fa-chart-pie"></i>
                    <span>Reportes</span></a>
            </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider">
                <!-- Nav Item - Salir -->
                <li class="nav-item">
                    <a class="nav-link btnPerfil" href="<?= base_url('perfil\index'); ?>" data-toggle="modal">
                        <i class="fas fa-user"></i>
                        <span>Perfil</span>
                    </a>
                </li>

                <!-- Nav Item - Salir -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Salir</span>
                    </a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('user\logout'); ?>" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 lg"><b><?= strtoupper($this->session->userdata('usuario')) . " / " . strtoupper($this->session->userdata('estacionamiento')); ?></b></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url();?>public/img/car-solid.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item btnPerfil" href="<?= base_url('perfil\index'); ?>" data-toggle="modal">
                                    <i class="fas fa-user fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->