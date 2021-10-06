<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
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
        <!-- Absensi -->
        <div class="row">
            <!-- Absensi -->
            <div class="col-lg-12">
                <form action="" method="POST">
                    <?php $time = date('H:i:s'); ?>
                    <?php $date = date('Y-m-d'); ?>
                    <input type="hidden" value="<?= $nik; ?>" name="nik">
                    <input type="hidden" value="<?= $time; ?>" name="waktu">
                    <input type="hidden" value="<?= $date; ?>" name="tanggal">
                    <input type="hidden" value="1" name="status">
                    <button type="submit" name="absensi" class="btn btn-success py-5 h2 font-weight-bold" style="width: 100%;">
                        <div class="inner">
                            <span class="h1 font-weight-bold">Lakukan Absensi</span>
                        </div>
                    </button>
                </form>
            </div>
        </div>
        <!-- End Absensi -->
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Absensi & Pengajuan Cuti</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        List Kehadiran
                    </h3>
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
                                                <th width="400px">Tanggal Hadir</th>
                                                <th>Jam</th>
                                                <th>Jabatan</th>
                                                <th width="150px">Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $nomer = 1; ?>
                                            <?php foreach ($data["absensi"] as $absensi) : ?>
                                                <tr>
                                                    <td><?= $nomer; ?></td>
                                                    <td><?= $absensi["tanggal"] ?></td>
                                                    <td><?= $absensi["waktu"] ?></td>
                                                    <td><?= $absensi["nama_jabatan"]; ?></td>
                                                    <td><?= $absensi["status"] ?></td>
                                                </tr>
                                                <?php $nomer++; ?>
                                            <?php endforeach; ?>

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