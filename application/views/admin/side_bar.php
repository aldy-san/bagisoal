<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 collapse navbar-collapse d-lg-block min-vh-100 bg-dark border-top border-warning text-center sidebar-outer" id="navbarBawah">
            <nav class="navbar navbar-expand-lg navbar-dark p-0  position-fixed">
                <ul class="navbar-nav w-100 d-block mt-3 text-left">
                    <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="#nav"><i class="fas fa-home mr-2"></i>Beranda</a>
                    </li>
                    <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="#grafik"><i class="fas fa-chart-line mr-2"></i>Grafik Pengguna</a>
                    </li>
                    <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="#riwayat"><i class="fas fa-history mr-2"></i>Riwayat Aktivitas</a>
                    </li>
                    <li class="nav-item py-3 px-1 dropdown">
                        <a class="nav-link" href="#" id="tambah" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-folder-plus mr-2"></i>Tambah Data</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('admin/tambah_soal') ?>">Tambah Soal</a>
                            <a class="dropdown-item" href="tambah-kompetisi.html">Tambah Kompetisi</a>
                            <a class="dropdown-item" href="tambah-mitra.html">Tambah Mitra</a>
                        </div>
                    </li>
                    <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="profil-admin.html"><i class="fas fa-user mr-2"></i>Profil</a>
                    </li>
                    <li class="nav-item py-3 px-1">
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt mr-2"></i>Log out</a>
                    </li>
                </ul>
            </nav>
        </div>