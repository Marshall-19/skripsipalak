<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Kartu Keluarga</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item"><a href="<?= base_url('Keluarga') ?>">Data Kartu Keluarga </a></li>
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
            <div class="mr-auto p-2"><a class="btn btn-primary" href="<?= base_url('tambahkeluarga') ?>"><i class="fas fa-plus"></i>
                    Keluarga
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
                                <th>No. KK</th>
                                <th>Nama Kepala Keluarga</th>
                                <th>Alamat</th>
                                <th>Jorong</th>
                                <th>Nagari</th>
                                <th>Kecamatan</th>
                                <th>Kode Pos</th>
                                <th>Provinsi</th>
                                <th>
                                    <center>AKSI</i></center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($keluarga as $i => $a) :
                            ?>
                                <tr>
                                    <td><?= $a->no_kk ?></td>
                                    <td><?= $a->nama_kepala ?></td>
                                    <td><?= $a->alamat ?></td>
                                    <td><?= $a->jorong ?></td>
                                    <td><?= $a->nagari ?></td>
                                    <td><?= $a->kecamatan ?></td>
                                    <td><?= $a->kode_pos ?></td>
                                    <td><?= $a->provinsi ?></td>
                                    <td><a href="<?= base_url('editkeluarga/' . $a->no_kk) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
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