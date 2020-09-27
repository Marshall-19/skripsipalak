<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Data Keluarga</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('Keluarga') ?>">Data Keluarga</a></li>
                            <li class="breadcrumb-item active">Edit Data Keluarga</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
    </section>

    <section class="content">
        <?php
        foreach ($kematian as $x) {
        ?>
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Kematian</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="<?= base_url('updatekematian'); ?>" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <input type="hidden" name="id_kematian" value="<?= $x->id_kematian ?>">
                                        <label>NIK</label>
                                        <input type="number" autofocus name="nik" class="form-control" value="<?= $x->nik ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>HARI KEMATIAN</label>
                                        <select class="form-control" name="hari_kematian" id="">
                                            <option value="<?= $x->hari_kematian ?>"><?= $x->hari_kematian ?></option>
                                            <option disabled value="">-- Pilih hari</option>
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
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>TANGGAL KEMATIAN</label>
                                        <input type="date" name="tanggal_kematian" class="form-control" value="<?= $x->tanggal_kematian ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>JAM</label>
                                        <input type="time" value="<?= $x->jam ?>" name="jam" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>TEMPAT DIMAKAMKAN</label>
                                        <input type="text" name="dimakamkan" value="<?= $x->dimakamkan ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <!-- <label>TEMPAT DIMAKAMKAN</label>
                                    <input type="text" name="dimakamkan" placeholder="Tempat dimakamkan" class="form-control" required> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="card-footer">
                                                <a href="<?= base_url('Kematian') ?>" class="btn btn-danger">Batal</a>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
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