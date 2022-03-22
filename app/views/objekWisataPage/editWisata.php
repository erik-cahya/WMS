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

                    <form action="<?= BASEURL ?>/wisata/editWisata/<?= $data['wisata']['id_objek'] ?>" method="POST">

                        <!-- id_objek -->
                        <input type="hidden" name="id_objek" value="<?= $data['wisata']['id_objek'] ?>">

                        <!-- nama_objek -->
                        <div class="form-group">
                            <label for="inputName">Nama Objek Wisata</label>
                            <input type="text" id="inputName" class="form-control" name="nama_objek_wisata" value="<?= $data['wisata']['nama_objek_wisata'] ?>">
                        </div>

                        <!-- kabupaten -->
                        <div class=" form-group">
                            <label for="inputName">Kabupaten</label>
                            <input type="text" id="inputName" class="form-control" name="kabupaten" value="<?= $data['wisata']['kabupaten'] ?>">
                        </div>

                        <!-- jenis_objek -->
                        <div class="form-group">
                            <label for="inputClientCompany">Jenis Objek</label>
                            <select name="jenis_objek" id="jenis_objek" class="form-control">
                                <option value="<?= $data['wisata']['jenis_objek'] ?>" selected>Pilih Jenis Objek Wisata...</option>
                                <option value="Wisata Air">Wisata Air</option>
                                <option value="Pegunungan">Pegunungan</option>
                                <option value="Religi">Religi</option>

                            </select>
                        </div>

                        <!-- fasilitas_tambahan -->
                        <div class="form-group">
                            <label for="inputProjectLeader">Fasilitas Tambahan</label>
                            <input type="text" id="inputProjectLeader" class="form-control" name="fasilitas_tambahan" value="<?= $data['wisata']['fasilitas_tambahan'] ?>">
                        </div>

                        <!-- biaya_tiket -->
                        <div class="form-group">
                            <label for="inputProjectLeader">Biaya Tiket</label>
                            <input type="number" id="inputProjectLeader" class="form-control" name="biaya_tiket_masuk" value="<?= $data['wisata']['biaya_tiket_masuk'] ?>">
                        </div>

                        <!-- tanggal dibuka -->
                        <div class="form-group">
                            <label for="inputProjectLeader">Tanggal Dibuka</label>
                            <input type="datetime" id="inputProjectLeader" class="form-control" name="tanggal_dibuka" value="<?= $data['wisata']['tanggal_dibuka'] ?>">
                        </div>

                        <button type="submit" class="btn btn-warning" name="cuti"> Save</button>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

</section>
<!-- /.content -->