<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Kematian</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item"><a href="<?= base_url('Kematian') ?>">Data Kematian </a></li>
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
            <div class="mr-auto p-2"><a class="btn btn-primary" href="<?= base_url('tambahkematian') ?>"><i class="fas fa-plus"></i>
                    Data Kematian
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
                                <th>NIK</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Tempat Dimakamkan</th>
                                <th>
                                    <center>AKSI</i></center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kematian as $i => $a) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a->nik ?></td>
                                    <td><?= $a->hari_kematian ?></td>
                                    <td><?= $a->tanggal_kematian ?></td>
                                    <td><?= $a->jam ?></td>
                                    <td><?= $a->dimakamkan ?></td>
                                    <td><a href="<?= base_url('editkematian/' . $a->id_kematian) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>
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