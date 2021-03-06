<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= BASEURL; ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/plugins/summernote/summernote-bs4.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= BASEURL; ?>/pegawai" class="nav-link">Pegawai</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= BASEURL; ?>/absensi" class="nav-link">Kehadiran</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-center">
                        <span class="dropdown-item dropdown-header">Profile</span>
                        <div class="dropdown-divider"></div>

                        <div class="image text-center my-2">
                            <img src="<?= BASEURL; ?>/dist/img/avatar.png" class="img-circle elevation-2" width="50px" alt="User Image">
                        </div>

                        <span class="dropdown-header text-bold text-md"><?= $_SESSION["nama_pegawai"] ?></span>

                        <div class="dropdown-divider md-2"></div>
                        <a href="<?= BASEURL ?>/logout" class="dropdown-item dropdown-footer">Logout</a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Brand Logo -->
            <a href="<?= BASEURL; ?>" class="brand-link text-center">
                <span class="font-weight-bold h3">WMS</span>
            </a>


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= BASEURL; ?>/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $_SESSION["nama_pegawai"]; ?></a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <?php if ($_SESSION['level'] == 'admin') { ?>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-header">MAIN MENU</li>

                            <li class="nav-item">
                                <a href="<?= BASEURL ?>/dashboard_admin" class="nav-link <?= $data['link']['dashboard']; ?>">
                                    <i class=" nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/pegawai" class="nav-link <?= $data['link']['pegawai']; ?>">
                                    <i class="nav-icon fas fa-user-friends"></i>
                                    <p>
                                        Pegawai
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/absensi" class="nav-link <?= $data['link']['kehadiran']; ?>">
                                    <i class="nav-icon fas fa-user-clock"></i>
                                    <p>
                                        Manage Kehadiran
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/wisata" class="nav-link <?= $data['link']['wisata']; ?>">
                                    <i class="nav-icon fab fa-affiliatetheme"></i>
                                    <p>
                                        Manage Objek Wisata
                                    </p>
                                </a>
                            </li>

                            <li class="nav-header">PERSONAL</li>
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/pegawai/detail/<?= $_SESSION["nik"] ?>" class="nav-link <?= $data['link']['profiles']; ?>">
                                    <i class="nav-icon fas fa-user-circle"></i>
                                    <p>
                                        Profiles
                                    </p>
                                </a>
                            </li>
                        </ul>
                    <?php } else if ($_SESSION['level'] == 'pegawai') { ?>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-header">EXAMPLES</li>

                            <li class="nav-item">
                                <a href="<?= BASEURL ?>/absensi/absensiPegawai" class="nav-link <?= $data['link']['kehadiran']; ?>">
                                    <i class=" nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Absensi
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/cuti/cutiPegawai/<?= $_SESSION['nik'] ?>" class="nav-link <?= $data['link']['cuti']; ?>">
                                    <i class="nav-icon fas fa-user-friends"></i>
                                    <p>
                                        Pengajuan Cuti
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/wisata" class="nav-link <?= $data['link']['wisata']; ?>">
                                    <i class="nav-icon fab fa-affiliatetheme"></i>
                                    <p>
                                        Manage Objek Wisata
                                    </p>
                                </a>
                            </li>

                            <li class="nav-header">PERSONAL</li>
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/pegawai/detail/<?= $_SESSION["nik"] ?>" class="nav-link <?= $data['link']['profiles']; ?>">
                                    <i class="nav-icon fas fa-user-circle"></i>
                                    <p>
                                        Profiles
                                    </p>
                                </a>
                            </li>

                        </ul>
                    <?php } ?>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- /.sidebar -->


        <!-- Content Wrapper -->
        <div class="content-wrapper">