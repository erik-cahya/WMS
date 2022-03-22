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

<body class="hold-transition login-page">

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <div class="h3 text-bold">WMS</div>
                <div class="h5"><strong>W</strong>ORKER <strong>M</strong>ANAGEMENT <strong>S</strong>YSTEM</div>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Please Enter Your Username & Password</p>




                <!-- Form Login -->
                <form action="<?= BASEURL; ?>/login/setSession" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                        </div>
                    </div>

                </form>
                <!-- End Form Login -->


                <div class="row text-center mt-3">
                    <div class="col-12">
                        <span>Version 1.0</span>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>