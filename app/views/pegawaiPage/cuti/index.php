<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ajukan Cuti</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item" style="color: #007BFF;">WMS</li>
                    <li class="breadcrumb-item active">Pengajuan Cuti</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Flash Message -->
<div class="row ml-2">
    <div class="col-lg-3">
        <?php wms\app\core\Flasher::flash(); ?>
    </div>
</div>
<!-- END Flash Message -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Pengajuan Cuti -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Pengajuan Cuti</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <form action="<?= BASEURL ?>/cuti/addCutiPegawai" method="POST">

                        <input type="hidden" value="pending" name="status">

                        <div class="form-group">
                            <label for="inputName">NIK</label>
                            <input type="hidden" id="inputName" class="form-control" value="<?= $_SESSION["nik"] ?>" name="nik">
                            <input type="text" id="inputName" class="form-control" value="<?= $_SESSION["nik"] ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label for="inputName">Nama</label>
                            <input type="hidden" id="inputName" class="form-control" value="<?= $_SESSION["nama_pegawai"]; ?>">
                            <input type="text" id="inputName" class="form-control" value="<?= $_SESSION["nama_pegawai"] ?>" disabled>
                        </div>

                        <div class="form-group">
                            <label for="inputClientCompany">Mulai Cuti</label>
                            <input type="date" id="inputClientCompany" class="form-control" name="mulai_cuti">
                        </div>

                        <div class="form-group">
                            <label for="inputProjectLeader">Akhir Cuti</label>
                            <input type="date" id="inputProjectLeader" class="form-control" name="selesai_cuti">
                        </div>

                        <div class="form-group">
                            <label for="inputDescription">Alasan</label>
                            <textarea id="inputDescription" class="form-control" rows="4" name="keterangan"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger" name="cuti"> Ajukan Cuti</button>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
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
                                                <th style="width: 20px;">NO</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Mulai Cuti</th>
                                                <th>Akhir Cuti</th>
                                                <th width="80px">Keterangan</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $nomer = 1; ?>
                                            <?php foreach ($data["dataCuti"] as $dCuti) : ?>
                                                <tr>
                                                    <td><?= $nomer; ?></td>
                                                    <td><?= $dCuti["nik"]; ?></td>
                                                    <td><?= $dCuti["nama_pegawai"]; ?></td>
                                                    <td><?= $dCuti["nama_jabatan"]; ?></td>
                                                    <td><?= $dCuti["mulai_cuti"]; ?></td>
                                                    <td><?= $dCuti["selesai_cuti"]; ?></td>
                                                    <td><?= $dCuti["keterangan"]; ?></td>

                                                    <!-- Menampilkan Status Cuti -->
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