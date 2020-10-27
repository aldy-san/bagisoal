<ul class="list-inline ml-auto mr-md-3 align-middle mb-0">
  <!-- <li class="dropdown align-self-center list-inline-item">
    <a style="text-decoration: none;" class="text-white align-middle" href="#" role="button" id="pesan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa-lg mx-2 fas fa-envelope mr-3 text-white" data-toggle="tooltip" title="S"></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="pesan" style="left: -110px">
      <a class="dropdown-item" href="#">
        <span class="d-block"><b>Admin satu</b></span>
        <span class="d-block5">Gimana masalahnya udah beres?</span>
        <span class="fa-xs d-block text-primary">10 Nov 2019</span>
      </a>
      <a class="dropdown-item" href="#">
        <span class="d-block"><b>Admin dua</b></span>
        <span class="d-block">Ada mitra baru nih...</span>
        <span class="fa-xs d-block text-primary">10 Nov 2019</span>
      </a>
    </div>
  </li>
  <li class="dropdown align-self-center list-inline-item">
    <a style="text-decoration: none;" class="text-white align-middle" href="#" role="button" id="notif" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa-lg mx-2 fas fa-bell mr-3 text-white" data-toggle="tooltip" title=""></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="notif" style="left: -110px">
      <a class="dropdown-item" href="#">
        <span><b>Laporan</b></span>
        <span class="d-block">Soal tidak ada jawaban</span>
        <span class="fa-xs d-block text-primary">Dari: lailail</span>
        <span class="fa-xs d-block text-primary">10 Nov 2019</span>
      </a>
      <a class="dropdown-item" href="#">
        <span><b>Laporan</b></span>
        <span class="d-block">Soal tidak ada jawaban</span>
        <span class="fa-xs d-block text-primary">Dari: lailail</span>
        <span class="fa-xs d-block text-primary">10 Nov 2019</span>
      </a>
      <a class="dropdown-item" href="#">
        <span><b>Laporan</b></span>
        <span class="d-block">Soal tidak ada jawaban</span>
        <span class="fa-xs d-block text-primary">Dari: lailail</span>
        <span class="fa-xs d-block text-primary">10 Nov 2019</span>
      </a>
      <a class="dropdown-item text-secondary" href="#">
        Lihat Lebih...
      </a>
    </div>
  </li> -->
  <li class="list-inline-item">
    <p class="text-white"><?= $user['nama_admin'] ?></p>
  </li>
  <li class="dropdown list-inline-item">
    <a style="text-decoration: none;" class="text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="<?= base_url() ?>/application/res/<?= $user['foto']; ?>" width="35" height="35" class="rounded-circle">
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="left: -100px">
      <a class="dropdown-item" href="">Profil Saya</a>
      <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log out</a>
    </div>
  </li>
</ul>
</nav>