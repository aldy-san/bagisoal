<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 collapse navbar-collapse d-lg-block min-vh-100 bg-dark border-top border-warning text-center sidebar-outer" id="navbarBawah">
            <nav class="navbar navbar-expand-lg navbar-dark p-0  position-fixed">
                <ul class="navbar-nav w-100 d-block mt-3 text-left">
                    <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="<?= base_url('admin') ?>#nav" <?php if ($this->uri->segment(1) == "admin") {
                                                                                    echo "data-target='#nav'";
                                                                                } ?>><i class="fas fa-home mr-2"></i>Beranda</a>
                    </li>
                    <!-- <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="<?= base_url('admin') ?>#grafik" data-target="#grafik"><i class="fas fa-chart-line mr-2"></i>Grafik Pengguna</a>
                    </li> -->
                    <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="<?= base_url('admin') ?>#riwayat" data-target="#riwayat"><i class="fas fa-history mr-2"></i>Riwayat Aktivitas</a>
                    </li>
                    <li class="nav-item py-3 px-1 dropdown 
                    <?php if ($this->uri->segment(1) == "daftar") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="#" id="tambah" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-table mr-2"></i>Daftar Data</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('daftar/pengguna') ?>">Daftar Pengguna</a>
                            <a class="dropdown-item" href="<?= base_url('daftar/soal') ?>">Daftar Soal</a>
                            <a class="dropdown-item" href="<?= base_url('daftar/kompetisi') ?>">Daftar Kompetisi</a>
                            <a class="dropdown-item" href="<?= base_url('daftar/mitra') ?>">Daftar Mitra</a>
                            <a class="dropdown-item" href="<?= base_url('daftar/admin') ?>">Daftar Admin</a>
                        </div>
                    </li>
                    <li class="nav-item py-3 px-1 dropdown
                    <?php if ($this->uri->segment(1) == "tambah") {
                        echo "active";
                    } ?>">
                        <a class=" nav-link" href="#" id="tambah" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-folder-plus mr-2"></i>Tambah Data</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('tambah/soal') ?>">Tambah Soal</a>
                            <a class="dropdown-item" href="<?= base_url('tambah/kompetisi') ?>">Tambah Kompetisi</a>
                            <a class="dropdown-item" href="<?= base_url('tambah/mitra') ?>">Tambah Mitra</a>
                        </div>
                    </li>
                    <li class="nav-item py-3 px-1 
                    <?php if ($this->uri->segment(1) == "profil-admin") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="<?= base_url('profil-admin') ?>"><i class="fas fa-user mr-2"></i>Profil</a>
                    </li>
                    <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt mr-2"></i>Log out</a>
                    </li>
                </ul>
            </nav>
        </div>