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
            <div class="mr-auto p-2"><a class="btn btn-primary" href="<?= base_url() . 'admin/J_batikan/tambah'; ?>"><i class="fas fa-plus"></i>
                    Penduduk
                </a>
                <a class="btn btn-danger" href="<?= base_url() . 'admin/J_batikan/print'; ?>"><i class="fas fa-print"></i>
                    Cetak Data
                </a>
                <a class="btn btn-success" href="<?= base_url() . 'admin/J_batikan/'; ?>"><i class="fas fa-recycle"></i>
                    Refresh
                </a>
            </div>
            <div class="p-2">
                <div class="form-inline">
                    <div class="form-group mx-sm-3">
                        <?= form_open('admin/J_batikan/search') ?>
                        <input type="text" class="form-control" name="keyword" placeholder="Cari">
                        <button type="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>TANGGAL LAHIR</th>
                                <th>JENIS KELAMIN</th>
                                <th>PEKERJAAN</th>
                                <th>ALAMAT</th>
                                <th></th>
                                <th>
                                    <center>AKSI</i></center>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($jr_batikan as $x) {

                            ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $x->nama ?></td>
                                    <td><?= $x->tanggal_lahir ?></td>
                                    <td><?= $x->jk ?></td>
                                    <td><?= $x->kerja ?></td>
                                    <td><?= $x->alamat ?></td>
                                    <td align="center" onclick="javascript: return confirm('Hapus Data ?')">
                                        <?php echo anchor('admin/J_batikan/hapus/' . $x->id, '<div class="btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
                                    <td>
                                        <?php echo anchor('admin/J_batikan/detail/' . $x->id, '                                        <div class="btn-sm"><i class="fas fa-eye"></i></div>
') ?>
                                    </td>
                                    <td>
                                        <?php echo anchor('admin/J_batikan/edit/' . $x->id, '                                        <div class="btn-sm"><i class="fas fa-edit"></i></div>
') ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>

</div>