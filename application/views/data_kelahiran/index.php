<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Kelahiran</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item"><a href="<?= base_url('Kelahiran') ?>">Data Kelahiran </a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
    </section>
    <section>
        <div class="content">
            <div class="col">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
        <div class="d-flex">
            <div class="mr-auto p-2"><a class="btn btn-primary" href="<?= base_url('tambahkelahiran') ?>"><i class="fas fa-plus"></i>
                    Kelahiran
                </a>
                <a class="btn btn-danger" href=""><i class="fas fa-print"></i>
                    Cetak Data
                </a>

            </div>
            <div class="p-2">
                <div class="form-inline">
                    <!-- <div class="form-group mx-sm-3">
                        
                        <input type="text" class="form-control" name="keyword" placeholder="Cari">
                        <button type="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table id="datatables" class="table table-striped text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>N0. KK</th>
                                <th>NIK</th>
                                <th>Hari Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jam Lahir</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Berat (Kg)</th>
                                <th>Panjang (Cm)</th>
                                <th>Tempat Lahir</th>
                                <th>Anak-Ke</th>
                                <th>Agama</th>
                                <th>
                                    <center>AKSI</i></center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kelahiran as $i => $a) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a->no_kk ?></td>
                                    <td><?= $a->nik ?></td>
                                    <td><?= $a->hari_lahir ?></td>
                                    <td><?= $a->tanggal_lahir ?></td>
                                    <td><?= $a->jam_lahir ?></td>
                                    <td><?= $a->nama ?></td>
                                    <td><?= $a->jenis_kelamin ?></td>
                                    <td><?= $a->berat ?></td>
                                    <td><?= $a->panjang ?></td>
                                    <td><?= $a->tempat_lahir ?></td>
                                    <td><?= $a->anak_ke ?></td>
                                    <td><?= $a->agama ?></td>
                                    <td>
                                        <a href="<?= base_url('editkelahiran/' . $a->id_kelahiran) ?>" class="btn btn-warning"><i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>

</div>