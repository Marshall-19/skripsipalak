<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Penduduk Jorong Batikan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/J_batikan') ?>">Data Penduduk Jorong Batikan</a></li>
                            <li class="breadcrumb-item active">Tambah Data Penduduk</li>
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
                    <h3 class="card-title">Input Data Penduduk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="<?= site_url('admin/J_batikan/tambah_aksi/'); ?>" role="form">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="number" autofocus name="nik" class="form-control" placeholder="Nomor induk Keluarga" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NO. KK</label>
                                    <input type="number" name="kk" class="form-control" placeholder="Nomor Kartu Keluarga" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>NAMA</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>TEMPAT LAHIR</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>TANGGAL LAHIR</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ALAMAT</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- radio -->
                                <div class="form-group">
                                    <label for="jk">JENIS KELAMIN</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Laki-laki" name="jk">
                                        <label class="form-check-label">Laki-laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Perempuan" name="jk">
                                        <label class="form-check-label">Perempuan</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>AGAMA</label>
                                    <select name="agama" class="form-control">
                                        <option value="">-- Pilih Agama</option>
                                        <?php foreach ($agama as $x) { ?>
                                            <option value="<?= $x->agama ?>"><?= $x->agama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>GOLONGAN DARAH</label>
                                    <select name="goldar" class="form-control">
                                        <option value="">-- Pilih Golongan Darah</option>
                                        <?php foreach ($goldar as $x) { ?>
                                            <option value="<?= $x->goldar ?>"><?= $x->goldar ?></option>
                                        <?php }  ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>STATUS PERKAWINAN</label>
                                    <select name="stkawin" class="form-control">
                                        <option>-- Pilih Status Perkawinan</option>
                                        <?php foreach ($stkawin as $x) { ?>
                                            <option value="<?= $x->kawin ?>"><?= $x->kawin ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>NAMA AYAH</label>
                                    <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NAMA IBU</label>
                                    <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>PEKERJAAN</label>
                                    <select name="kerja" class="form-control">
                                        <option>-- Pilih Pekerjaan</option>
                                        <?php foreach ($kerja as $x) { ?>
                                            <option value="<?= $x->kerja ?>"><?= $x->kerja ?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>PENDIDIKAN</label>
                                    <select name="pendidikan" class="form-control">
                                        <option>-- Pilih pendidikan</option>
                                        <?php foreach ($pendidikan as $x) { ?>
                                            <option value="<?= $x->pendidikan ?>"><?= $x->pendidikan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="card-footer">
                                        <a href="<?= base_url() . 'admin/J_batikan/'; ?>" class="btn btn-danger">Batal</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>