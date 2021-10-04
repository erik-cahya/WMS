<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pegawai</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">WMS</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">


            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            List Kehadiran
                        </h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#daftar-hadir" data-toggle="tab">Daftar Hadir</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#daftar-cuti" data-toggle="tab">Daftar Cuti</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->

                    <div class="card-body">
                        <div class="tab-content p-0">
                            <!-- Daftar Hadir -->
                            <div class="tab-pane active" id="daftar-hadir" style="position: relative; height: 500px;">
                                <!-- Content Daftar Hadir -->
                                <div class="card">
                                    <div class="card-body table-responsive p-0" style="height: 500px;">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th width="60px">NO</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal Hadir</th>
                                                    <th>Jam</th>
                                                    <th>Jabatan</th>
                                                    <th width="150px">Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>190030209</td>
                                                    <td>Erik Cahya Pradana</td>
                                                    <td>04-05-2021</td>
                                                    <td>08.00</td>
                                                    <td>Network Engineer</td>

                                                    <?php
                                                    $dKehadiran = 1;
                                                    if ($dKehadiran == 1) {
                                                        $class = "fas fa-check-circle";
                                                        $style = "color: #28A745; font-size:25px;";
                                                    } else if ($dKehadiran == 2) {
                                                        $class = "fas fa-times-circle";
                                                        $style = "color: #DC3545; font-size:25px;";
                                                    }
                                                    ?>

                                                    <td><span class="<?= $class; ?>" style="<?= $style; ?>"></span></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>

                            <!-- Cuti -->
                            <div class="tab-pane" id="daftar-cuti" style="position: relative; height: 500px;">
                                <!-- Content Daftar Cuti -->
                                <div class="card">
                                    <div class="card-body table-responsive p-0" style="height: 500px;">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px;">NO</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Mulai Cuti</th>
                                                    <th>Akhir Cuti</th>
                                                    <th width="180px">Keterangan</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>190030209</td>
                                                    <td>Erik Cahya Pradana</td>
                                                    <td>Network Engineer</td>
                                                    <td>04-05-2001</td>
                                                    <td>04-05-2001</td>
                                                    <td>Pulang Kampung Acara Adat</td>

                                                    <?php
                                                    $dCuti = 1;
                                                    if ($dCuti == 1) {
                                                        $keterangan = "Accepted";
                                                        $badge = "badge-success";
                                                    } else if ($dCuti == 2) {
                                                        $keterangan = "Pending";
                                                        $badge = "badge-warning";
                                                    } else if ($dCuti == 3) {
                                                        $keterangan = "Rejected";
                                                        $badge = "badge-danger";
                                                    }
                                                    ?>

                                                    <td><span class="badge <?= $badge; ?>"><?= $keterangan; ?></span></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
<!-- /.content -->