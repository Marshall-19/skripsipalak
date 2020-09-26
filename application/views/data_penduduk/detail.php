<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Detail Data Penduduk Jorong Batikan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/J_batikan') ?>">Data Penduduk Jorong Batikan</a></li>
                            <li class="breadcrumb-item active">Detail Data Penduduk</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
    </section>

    <section class="content">
        <?php
        foreach ($jr_batikan as $x) {

        ?>
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Detail Data Penduduk</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="<?= site_url('admin/Data_penduduk/update/'); ?>" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="hidden" name="id" value="<?= $x->id ?>">
                                        <input disabled type="number" name="nik" class="form-control" value="<?= $x->nik ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NO. KK</label>
                                        <input disabled type="number" name="kk" class="form-control" value="<?= $x->kk ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>NAMA</label>
                                        <input disabled type="text" name="nama" class="form-control" value="<?= $x->nama ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>TEMPAT LAHIR</label>
                                        <input disabled type="text" name="tempat_lahir" class="form-control" value="<?= $x->tempat_lahir ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>TANGGAL LAHIR</label>
                                        <input disabled type="date" name="tanggal_lahir" class="form-control" value="<?= $x->tanggal_lahir ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ALAMAT</label>
                                        <input disabled type="text" name="alamat" class="form-control" value="<?= $x->alamat ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- radio -->
                                    <div class="form-group">
                                        <label for="jk">JENIS KELAMIN</label>
                                        <div class="form-check">
                                            <input disabled class="form-check-input" type="radio" value="Laki-laki" name="jk" <?php if ($x->jk == 'Laki-laki') echo 'checked' ?>>
                                            <label class="form-check-label">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input disabled class="form-check-input" type="radio" value="Perempuan" name="jk" <?php if ($x->jk == 'Perempuan') echo 'checked' ?>>
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>AGAMA</label>
                                        <select disabled name="agama" class="form-control">
                                            <option value=""><?= $x->agama ?></option>
                                            <?php foreach ($agama as $agm) { ?>
                                                <option value="<?= $agm->agama ?>" <?php if ($x->id == $x->id) ?>>
                                                    <?= $agm->agama ?></option>
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
                                        <select disabled name="goldar" class="form-control">
                                            <?php foreach ($goldar as $gd) { ?>
                                                <option value="<?= $gd->id ?>" <?php if ($gd->id == $x->id) {
                                                                                    echo 'selected';
                                                                                } ?>><?= $gd->goldar ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>STATUS PERKAWINAN</label>
                                        <select disabled name="stkawin" class="form-control">
                                            <option value=""><?= $x->stkawin ?></option>
                                            <?php foreach ($kawin as $kw) { ?>
                                                <option value="<?= $kw->kawin ?>" <?php if ($kw->id == $x->id) ?>><?= $kw->kawin ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>NAMA AYAH</label>
                                        <input disabled type="text" name="nama_ayah" class="form-control" value="<?= $x->nama_ayah ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>NAMA IBU</label>
                                        <input disabled type="text" name="nama_ibu" class="form-control" value="<?= $x->nama_ibu ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>PEKERJAAN</label>
                                        <select disabled name="kerja" class="form-control">
                                            <option value=""><?= $x->kerja ?></option>
                                            <?php foreach ($kerja as $kj) { ?>
                                                <option value="<?= $kj->kerja ?>" <?php if ($kj->id == $x->id) ?>><?= $kj->kerja ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>PENDIDIKAN</label>
                                        <select disabled name="pendidikan" class="form-control">
                                            <option value=""><?= $x->pendidikan ?></option>
                                            <?php foreach ($pendidikan as $pdd) { ?>
                                                <option value="<?= $pdd->pendidikan ?>" <?php if ($pdd->id == $x->id) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $pdd->pendidikan ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="card-footer">
                                            <a href="<?= base_url() . 'admin/J_batikan/'; ?>" class="btn btn-danger">Kembali</a>
                                            <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
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