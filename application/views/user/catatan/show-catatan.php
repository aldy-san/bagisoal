<!-- CONTENT -->
<div class="container text-center p-3 my-3 rounded bg-white shadow">
  <div class="row">
    <div class="col-9">
      <div class="container">
        <div class="row p-2 shadow-sm">
          <?= $this->session->flashdata('message'); ?>
          <div class="col-12 text-left">
            <h2><?= $catatan['judul_catatan']; ?></h2>
            <hr class="my-1">
            <p><?= $catatan['konten']; ?></p>
            <hr>
            <form method="post" action="<?= current_url(); ?>">
              <div class="form-row justify-content-between">
                <div class="col-10">
                  <input type="text" name="komentar" placeholder="Komentar disini" class="form-control">
                  <?= form_error('komentar', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
                <div class="col-2">
                  <button type="submit" class="btn btn-warning rounded">Jawab</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <hr>
        <div class="row mt-2">
          <div class="col-md-12 shadow-sm">
            <div class="container text-left">
              <div class="row">
                <h4 class="p-2"><b>Komentar</b></h4>
              </div>
              <div class="row my-3 shadow-sm">
                <div class="col-12">
                  <h6 class="m-0 d-flex align-items-center">
                    <img src="res/fc.jpg" width="26" height="26" class="rounded-circle mr-1">
                    <a href="" style="text-decoration: none;" class="text-dark"><b>M. Syukur Abadi</b></a>
                  </h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt.</p>
                </div>
              </div>
              <?php foreach($komentar as $k): ?>
              <div class="row my-3 shadow-sm">
                <div class="col-12">
                  <h6 class="m-0 d-flex align-items-center">
                    <img src="res/fc.jpg" width="26" height="26" class="rounded-circle mr-1">
                    <a href="" style="text-decoration: none;" class="text-dark"><b>M. Syukur Abadi</b></a>
                  </h6>
                  <p><?= $k['komentar'];?></p>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="container text-left">
        <h4>Catatan Lain</h4>
        <ul style="list-style: none; text-indent: 0px;" class="py-1 px-0">
          <li class="border-bottom py-2 "><a href="" class="text-dark">Catatan lain</a></li>
          <li class="border-bottom py-2 "><a href="" class="text-dark">Catatan lain</a></li>
          <li class="border-bottom py-2 "><a href="" class="text-dark">Catatan lain</a></li>
          <li class="border-bottom py-2 "><a href="" class="text-dark">Catatan lain</a></li>
          <li class="border-bottom py-2 "><a href="" class="text-dark">Catatan lain</a></li>
          <li class="border-bottom py-2 "><a href="" class="text-dark">Catatan lain</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>