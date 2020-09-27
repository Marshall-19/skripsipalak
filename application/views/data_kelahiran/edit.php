<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Data Kelahiran</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('Kelahiran') ?>">Data Kelahiran</a></li>
                            <li class="breadcrumb-item active">Edit Data Kelahiran</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
    </section>

    <section class="content">
        <?php
        foreach ($kelahiran as $x) {
        ?>
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Kelahiran</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="<?= base_url('updatekelahiran'); ?>" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>NO. KK</label>
                                        <input type="number" readonly autofocus name="no_kk" class="form-control" value="<?= $x->no_kk ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="number" name="nik" class="form-control" value="<?= $x->nik ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>HARI LAHIR</label>
                                        <select class="form-control" name="hari_lahir" id="">
                                            <option value=""><?= $x->hari_lahir ?></option>
                                            <option disabled value="">-- Pilih hari Lahir</option>
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
                                        <input type="date" name="tanggal_lahir" value="<?= $x->tanggal_lahir ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>PUKUL</label>
                                        <input type="time" value="<?= $x->jam_lahir ?>" name="jam_lahir" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NAMA</label>
                                        <input type="text" name="nama" class="form-control" value="<?= $x->nama ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- radio -->
                                    <div class="form-group">
                                        <label for="jk">JENIS KELAMIN</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Laki-laki" name="jk" <?php if ($x->jenis_kelamin == 'Laki-laki') echo 'checked' ?>>
                                            <label class="form-check-label">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Perempuan" name="jk" <?php if ($x->jenis_kelamin == 'Perempuan') echo 'checked' ?>>
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>BERAT (KG)</label>
                                        <input type="number" class="form-control" name="berat" value="<?= $x->berat ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>PANJANG (CM)</label>
                                        <input type="number" class="form-control" name="panjang" value="<?= $x->panjang ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>TEMPAT LAHIR</label>
                                        <input type="text" class="form-control" name="tempat_lahir" value="<?= $x->tempat_lahir ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ANAK KE</label>
                                        <input type="number" class="form-control" name="anak_ke" value="<?= $x->anak_ke ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>AGAMA</label>
                                        <select class="form-control" name="agama" id="">
                                            <option value="<?= $x->agama ?>"><?= $x->agama ?></option>
                                            <option value="">-- Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="card-footer">
                                        <a href="<?= base_url('Kelahiran')  ?>" class="btn btn-danger">Batal</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
</div>
<?php } ?>
</section>
</div>