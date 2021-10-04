<div class="content-header">
    <div class="container-fluid">

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= BASEURL; ?>">WMS</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>

    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Applicants Count -->
        <div class="row">
            <!-- Total Applicants -->
            <div class="col-lg-4 col-6">
                <div class="small-box bg-light">
                    <div class="inner">
                        <h3>
                            <?php foreach ($data["countPegawai"] as $count) : ?>
                                <?= $count ?>
                            <?php endforeach; ?>
                        </h3>
                        <p>Total Pegawai</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-signal"></i>
                    </div>
                    <div class="box-footer pb-4"></div>
                </div>
            </div>
            <!-- End Total Applicants -->

            <!-- Kehadiran -->
            <div class="col-lg-4 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>
                            3 Pegawai
                        </h3>
                        <p>Kehadiran</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="box-footer pb-4"></div>
                </div>
            </div>
            <!-- End Kehadiran -->

            <!-- Pengajuan Cuti -->
            <div class="col-lg-4 col-sm-12">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>
                            0
                            Pegawai
                        </h3>
                        <p>Pengajuan Cuti</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="box-footer pb-4"></div>
                </div>
            </div>
            <!-- End Pengajuan Cuti-->

        </div>

        <!-- Tracking Applicants -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-users mr-1"></i>
                            Tracking Data Pegawai
                        </h3>
                    </div>

                    <div class="card-body text-center tab-pane active" id="total-applicants">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="10px">NO</th>
                                    <th width="150px">NIK</th>
                                    <th width="350px">Nama</th>
                                    <th width="200px">Nomor Handphone</th>
                                    <th width="250px">Jabatan</th>
                                    <th width="350px">Email</th>
                                    <th width="350px">Alamat</th>
                                    <th width="150px">Action</th>
                                </tr>
                            </thead>

                            <?php $no = 1; ?>
                            <?php foreach ($data['pegawai'] as $dataPegawai) : ?>
                                <tbody>
                                    <td><?= $no; ?></td>
                                    <td><?= $dataPegawai['nik']; ?></td>
                                    <td><?= $dataPegawai['nama_pegawai']; ?></td>
                                    <td><?= $dataPegawai['no_hp']; ?></td>
                                    <td><?= $dataPegawai['nama_jabatan']; ?></td>
                                    <td><?= $dataPegawai['email']; ?></td>
                                    <td><?= $dataPegawai['alamat']; ?></td>
                                    <td>
                                        <a href="<?= BASEURL; ?>/pegawai/detail/<?= $dataPegawai['nik'] ?>">
                                            <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                        </a>
                                    </td>
                                </tbody>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
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
                            <div class="tab-pane active" id="daftar-hadir" style="position: relative; height: 300px;">
                                <!-- Content Daftar Hadir -->
                                <div class="card">
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th width="10px">NO</th>
                                                    <th width="150px">NIK</th>
                                                    <th width="350px">Nama</th>
                                                    <th width="200px">Tanggal Hadir</th>
                                                    <th width="250px">Jam</th>
                                                    <th width="350px">Jabatan</th>
                                                    <th width="150px">Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <td>1</td>
                                                <td>190030209</td>
                                                <td>Erik Cahya Pradana</td>
                                                <td>10-25-2001</td>
                                                <td>00.00</td>
                                                <td>Senior Developer</td>
                                                <td>
                                                    <button class="btn btn-success">View</button>
                                                </td>
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>

                            <!-- Cuti -->
                            <div class="tab-pane" id="daftar-cuti" style="position: relative; height: 300px;">
                                <!-- Content Daftar Cuti -->
                                <div class="card">
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th width="10px">NO</th>
                                                    <th width="150px">NIK</th>
                                                    <th width="350px">Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Mulai Cuti</th>
                                                    <th>Akhir Cuti</th>
                                                    <th width="150px">Keterangan</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <td>1</td>
                                                <td>190030209</td>
                                                <td>Erik Cahya Pradana</td>
                                                <td>10-25-2001</td>
                                                <td>00.00</td>
                                                <td>Senior Developer</td>
                                                <td>Senior Developer</td>
                                                <td>
                                                    <button class="btn btn-success">View</button>
                                                </td>
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