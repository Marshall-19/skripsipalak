<aside style="background-color: black" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url('assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span style="font-weight: bold" class="brand-text">&nbsp;&nbsp;&nbsp; S.I.P.D BIDARA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="<?= base_url('admin/Dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Dashboard
                            <i class=""></i>
                        </p>
                    </a>
                    <a href="<?= base_url('admin/Profil') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tv"></i>
                        <p>
                            Profil Nagari
                            <i class=""></i>
                        </p>
                    </a>
                    <a href="<?= base_url('admin/Data_admin') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Administrator
                            <i class=""></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Data Master
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url('admin/Data_agama') ?>" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data Agama</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/Data_goldar') ?>" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data Golongan Darah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/Data_pendidikan') ?>" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data Pendidikan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/Data_kerja') ?>" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data Pekerjaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/Data_kawin') ?>" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data Status Kawin</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="<?= site_url('admin/Data_profil') ?>" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data Profil</p>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a href="<?= site_url('admin/Data_jorong') ?>" class="nav-link">
                                <i class="fas fa-database"></i>
                                <p>Data Jorong</p>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('penduduk') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Penduduk
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Layanan Surat
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url('admin/S_lahir') ?>" class="nav-link">
                                <i class="fas fa-child"></i>
                                <p>Keterangan Kelahiran</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url('admin/') ?>" class="nav-link">
                                <i class="fas fa-ambulance"></i>
                                <p>Keterangan Kematian</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url('admin/J_batikan') ?>" class="nav-link">
                                <i class="fas fa-folder"></i>
                                <p>Keterangan Kurang Mampu</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url('admin/J_simpang') ?>" class="nav-link">
                                <i class="fas fa-calendar"></i>
                                <p>Izin Keramaian</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="<?= base_url('admin/Login/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-arrow-left"></i>
                        <p>
                            Log Out
                            <i class=""></i>
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<?php
if( $this->session->flashdata('pesan') == TRUE)
{
    echo "
        <script>alert(".$this->session->flashdata('pesan').")</script>
    ";
}
?>