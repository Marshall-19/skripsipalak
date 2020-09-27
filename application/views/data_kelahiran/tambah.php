<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Kelahiran</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('Kelahiran') ?>">Data Kelahiran</a></li>
                            <li class="breadcrumb-item active">Tambah Data Kelahiran</li>
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
                    <h3 class="card-title">Input Data Kelahiran</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="<?= base_url('simpankelahiran') ?>" role="form">
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
                                    <label>NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="Nomor induk keluarga" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>HARI LAHIR</label>
                                    <select class="form-control" name="hari_lahir" id="">
                                        <option value="">-- Pilih hari Lahir</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jum'at">Jum'at</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>TANGGAL LAHIR</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>PUKUL</label>
                                    <input type="time" name="jam_lahir" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NAMA</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- radio -->
                                <div class="form-group">
                                    <label for="jk">JENIS KELAMIN</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Laki-laki" name="jenis_kelamin">
                                        <label class="form-check-label">Laki-laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Perempuan" name="jenis_kelamin">
                                        <label class="form-check-label">Perempuan</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>BERAT (KG)</label>
                                    <input type="number" class="form-control" name="berat" placeholder="Berat" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>PANJANG (CM)</label>
                                    <input type="number" class="form-control" name="panjang" placeholder="Panjang" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>TEMPAT LAHIR</label>
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ANAK KE</label>
                                    <input type="text" class="form-control" name="anak_ke" placeholder="Anak ke" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>AGAMA</label>
                                    <select class="form-control" name="agama" required>
                                        <option value="">-- Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="card-footer">
                                        <a href="<?= base_url('Kelahiran') ?>" class="btn btn-danger">Batal</a>
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