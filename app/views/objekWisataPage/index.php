<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambahkan Data Objek Wisata</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item" style="color: #007BFF;">WMS</li>
                    <li class="breadcrumb-item active">Objek Wisata</li>
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
                    <h3 class="card-title">Form Data Objek Wisata</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <form action="<?= BASEURL ?>/wisata/addWisata" method="POST">

                        <!-- id_objek -->
                        <input type="hidden" name="id_objek">

                        <!-- nama_objek -->
                        <div class="form-group">
                            <label for="inputName">Nama Objek Wisata</label>
                            <input type="text" id="inputName" class="form-control" name="nama_objek_wisata">
                        </div>

                        <!-- kabupaten -->
                        <div class="form-group">
                            <label for="inputName">Kabupaten</label>
                            <input type="text" id="inputName" class="form-control" name="kabupaten">
                        </div>

                        <!-- jenis_objek -->
                        <div class="form-group">
                            <label for="inputClientCompany">Jenis Objek</label>
                            <select name="jenis_objek" id="jenis_objek" class="form-control">
                                <option disabled selected>Pilih Jenis Objek Wisata...</option>
                                <option value="Wisata Air">Wisata Air</option>
                                <option value="Pegunungan">Pegunungan</option>
                                <option value="Religi">Religi</option>
                            </select>
                        </div>

                        <!-- fasilitas_tambahan -->
                        <div class="form-group">
                            <label for="inputProjectLeader">Fasilitas Tambahan</label>
                            <input type="text" id="inputProjectLeader" class="form-control" name="fasilitas_tambahan">
                        </div>

                        <!-- biaya_tiket -->
                        <div class="form-group">
                            <label for="inputProjectLeader">Biaya Tiket</label>
                            <input type="number" id="inputProjectLeader" class="form-control" name="biaya_tiket_masuk">
                        </div>

                        <!-- tanggal dibuka -->
                        <div class="form-group">
                            <label for="inputProjectLeader">Tanggal Dibuka</label>
                            <input type="date" id="inputProjectLeader" class="form-control" name="tanggal_dibuka">
                        </div>

                        <button type="submit" class="btn btn-primary" name="cuti"> Tambahkan Data</button>
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
                    <h1 class="m-0">List Objek Wisata</h1>
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
                        List Objek Wisata
                    </h3>
                </div><!-- /.card-header -->

                <!-- Search Data -->

                <div class="col-3 mt-3 ml-3">
                    <form action="<?= BASEURL; ?>/wisata/searchWisata" method="POST">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Cari Data Wisata" name="keyword" id="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

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
                                                <th>Nama Objek Wisata</th>
                                                <th>Kabupaten</th>
                                                <th>Jenis Objek</th>
                                                <th>Fasilitas Tambahan</th>
                                                <th>Biaya Tiket Masuk</th>
                                                <th>Tanggal Dibuka</th>
                                                <th width="200px">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $no = 1 ?>
                                            <?php foreach ($data['wisata'] as $objekWisata) : ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $objekWisata['nama_objek_wisata']; ?></td>
                                                    <td><?= $objekWisata['kabupaten']; ?></td>
                                                    <td><?= $objekWisata['jenis_objek']; ?></td>
                                                    <td><?= $objekWisata['fasilitas_tambahan']; ?></td>
                                                    <td><?= $objekWisata['biaya_tiket_masuk']; ?></td>
                                                    <td><?= $objekWisata['tanggal_dibuka']; ?></td>
                                                    <td>
                                                        <a href=" <?= BASEURL; ?>/wisata/detailWisata/<?= $objekWisata['id_objek'] ?>">
                                                            <button class="btn btn-success"><i class="fas fa-edit"></i></button>
                                                        </a>

                                                        <a href="<?= BASEURL; ?>/wisata/deleteWisata/<?= $objekWisata['id_objek'] ?>">
                                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php $no++; ?>
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