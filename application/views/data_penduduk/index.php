<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Data Penduduk Jorong Batikan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/J_batikan') ?>">Data Penduduk Jorong Batikan</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
    </section>
    <section>
        <div class="content">
            <div class="col">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <div class="d-flex">
            <div class="mr-auto p-2"><a class="btn btn-primary" href="<?= base_url('tambahpenduduk') ?>"><i class="fas fa-plus"></i>
                    Penduduk
                </a>
                <a class="btn btn-danger" href=""><i class="fas fa-print"></i>
                    Cetak Data
                </a>
                <a class="btn btn-success" href=""><i class="fas fa-recycle"></i>
                    Refresh
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
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Jorong</th>
                                <th>Nagari</th>
                                <th>Kecamatan</th>
                                <th>Agama</th>
                                <th>Status Perkawinan</th>
                                <th>Golongan Darah</th>
                                <th>Pekerjaan</th>
                                <th>Kewarganegaraan</th>
                                <th>
                                    <center>AKSI</i></center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($penduduk as $i => $a):
                            ?>
                            <tr>
                                <td><?= $a->nik ?></td>
                                <td><?= $a->nama ?></td>
                                <td><?= $a->tempat_lahir ?></td>
                                <td><?= $a->tanggal_lahir ?></td>
                                <td><?= $a->jenis_kelamin ?></td>
                                <td><?= $a->alamat ?></td>
                                <td><?= $a->jorong ?></td>
                                <td><?= $a->nagari ?></td>
                                <td><?= $a->kecamatan ?></td>
                                <td><?= $a->agama ?></td>
                                <td><?= $a->status_perkawinan ?></td>
                                <td><?= $a->golongan_darah ?></td>
                                <td><?= $a->pekerjaan ?></td>
                                <td><?= $a->kewarganegaraan ?></td>
                                <td>
                                    <a href="<?= base_url('editpenduduk/'.$a->nik) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url('hapuspenduduk/'.$a->nik) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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