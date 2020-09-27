<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Kartu Keluarga</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('Keluarga') ?>">Data Kartu Keluarga</a></li>
                            <li class="breadcrumb-item active">Tambah Data Keluarga</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Kartu Keluarga</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="<?= base_url('simpankeluarga') ?>" role="form">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>NO. KK</label>
                                    <input type="number" autofocus name="no_kk" class="form-control" placeholder="Nomor Kartu Keluarga" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NAMA KEPALA KELUARGA</label>
                                    <input type="text" name="nama_kepala" class="form-control" placeholder="Nama Kepala Keluarga" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>ALAMAT</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>JORONG</label>
                                    <input type="text" name="jorong" class="form-control" placeholder="Jorong" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>NAGARI</label>
                                    <input type="text" placeholder="Nagari" name="nagari" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>KECAMATAN</label>
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>KODE POS</label>
                                    <input type="number" class="form-control" name="kode_pos" placeholder="Kode pos" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>PROVINSI</label>
                                    <input type="text" class="form-control" name="provinsi" placeholder="Provinsi" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="card-footer">
                                        <a href="<?= base_url('Keluarga') ?>" class="btn btn-danger">Batal</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>