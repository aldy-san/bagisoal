<div class="container p-3 my-3 rounded">
    <div class="row">
        <div class="col-md-10 col-12 shadow p-3">
            <div class="container">
                <div class="row my-3 justify-content-between">
                    <a type="button" class="btn btn-dark shadow px-3" href="<?= base_url('catatan/tulis'); ?>">Berbagi Catatan</a>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <?php foreach ($catatan as $catatan) : ?>
                    <div class="row py-3">
                        <div class="col-12 shadow-sm p-2">
                            <h6 class="m-0 d-flex align-items-center">
                                <img src="res/fc.jpg" width="26" height="26" class="rounded-circle mr-1">
                                <a href="" style="text-decoration: none;" class="text-dark"><b><?= $catatan->nama; ?></b></a>
                            </h6>
                            <div class="pt-2">
                                <h4 class=""><?= $catatan->judul_catatan; ?></h4>
                                <p class="text-justify m-0">
                                    <?= $catatan->konten; ?>
                                    <a href="<?= base_url('catatan/showcatatan/') ?><?= $catatan->id_catatan; ?>">Selengkapnya</a>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="badge badge-info">#Tags</a>
                                    <a href="#" class="badge badge-info">#Tags</a>
                                </div>
                                <div class="col-12">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="row justify-content-center m-2">
                    <div class="col-4">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2 sidebar-outer text-center d-none d-sm-block">
            <div class="position-fixed col-2 shadow p-2 rounded">
                <div>
                    <h3 class="text-center">Trending</h3>
                    <a href="#" class="badge badge-info">#Matematika</a>
                    <a href="#" class="badge badge-info">#TPB</a>
                    <a href="#" class="badge badge-info">#UTBK</a>
                    <a href="#" class="badge badge-info">#SBMPTN</a>
                </div>
                <hr class="m-1">
                <div class="text-left">
                    <h3 class="text-center">Top User</h3>
                    <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                    </div>
                    <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Temennya Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                    </div>
                    <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                    </div>
                    <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Temennya Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                    </div>
                    <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>