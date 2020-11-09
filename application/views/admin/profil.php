<div class="col-md-10">
  <div class="container my-3 rounded shadow">
    <div class="row">
      <nav aria-label="breadcrumb" class="w-100">
        <ol class="breadcrumb m-0 w-100">
          <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin') ?>">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Profil Saya</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="container shadow p-auto p-md-5 mt-3">
    <div class="row mb-md-5 border-bottom">
      <div class="col-12">
        <h1>Profil Saya</h1>
      </div>
    </div>
    <div class="row my-3 justify-content-between">
      <div class="col-12 col-md-12">
        <div class="row">
          <div class="col-12 col-md-4 text-center my-2">
            <img src="<?= base_url() ?>./assets/foto/<?= $user['foto']; ?>" class="rounded-circle" width="155" height="155">
          </div>
          <div class="col-12 col-md-8 text-center text-md-left">
            <h3 class="d-md-inline"><?= $user['nama_admin'] ?></h3>
            <a href="<?= base_url('profil-admin/edit') ?>" class="btn btn-primary float-right">Edit Profil</a>
            <h5>Admin-<?= $user['jabatan'] ?></h5>
            <div class="my-2">
              <i class="fas fa-fw fa-envelope mr-2"></i>
              <a href=""><?= $user['email'] ?></a>
            </div>
            <div class="my-2">
              <i class="fas fa-fw fa-phone mr-2"></i>
              <p class="d-inline" href=""><?= $user['no_hp'] ?></p>
            </div>
            <div class="my-2">
              <i class="fas fa-fw fa-map-marker-alt mr-2"></i>
              <p class="d-inline" href=""><?= $user['alamat'] ?></p>
            </div>
          </div>
        </div>
        <div class="row mb-3 mt-5">
          <div class="col-12">
            <h2>Log Aktivitas</h2>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-12">
            <table class="table table-sm table-responsive-sm hide-scroll text-center">
              <thead class="table-dark">
                <tr>
                  <th class="" scope="col">AKTIVITAS</th>
                  <th class="" scope="col">WAKTU</th>
                  <th class="" scope="col">KETERANGAN</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($log as $log) : ?>
                  <tr>
                    <td><?= $log->keterangan . " " . $log->data ?></td>
                    <td><?php $stamp = strtotime($log->tanggal);
                        echo date("d F Y", $stamp); ?></td>
                    <td><a href="#" class="btn btn-sm btn-info">DETAIL</a></td>
                  </tr>
                <?php endforeach; ?>
                <tr>
                  <td colspan="4" class="border-0"><button class="btn btn-sm btn-primary">Lihat Lebih</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- <div class="col-12 col-md-3 text-left shadow-sm p-2 h-100">
        <ul class="list-group">
          <li class="list-group-item active border-0 text-center">Laporan Masalah</li>
          <a href="#" class="list-group-item list-group-item-action border-0">
            Jawaban Soal Tidak ada
            <span class="fa-sm d-block text-primary">Dari: Syukur212</span>
            <span class="fa-sm d-block text-primary">10 Nov 2019</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action border-0">
            Jawaban Soal Tidak ada
            <span class="fa-sm d-block text-primary">Dari: bakayarp</span>
            <span class="fa-sm d-block text-primary">10 Nov 2019</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action border-0">
            Jawaban Soal Tidak ada
            <span class="fa-sm d-block text-primary">Dari: aldi123</span>
            <span class="fa-sm d-block text-primary">10 Nov 2019</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action border-0">
            Jawaban Soal Tidak ada
            <span class="fa-sm d-block text-primary">Dari: lailail</span>
            <span class="fa-sm d-block text-primary">10 Nov 2019</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action border-0">
            Jawaban Soal Tidak ada
            <span class="fa-sm d-block text-primary">Dari: anjayani</span>
            <span class="fa-sm d-block text-primary">10 Nov 2019</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action border-0 text-secondary">
            Dan 5 laporan lain...
          </a>
        </ul>
      </div> -->
    </div>
  </div>
</div>
</div>
</div>