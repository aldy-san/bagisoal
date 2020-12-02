<div class="container p-3 my-3 rounded">
    <div class="row">
        <div class="col-md-10 col-12 shadow p-3">
            <div class="container">
                <div class="row">
                    <h2>Berbagilah catatan dengan semua orang</h2>
                </div>
                <div class="row my-3 justify-content-between">
                    <a type="button" class="btn btn-dark shadow px-3" href="<?= base_url('catatan/tulis'); ?>">Berbagi Catatan</a>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <?php foreach ($catatan as $catatan) : ?>
                    <div class="row py-3">
                        <div class="col-12 shadow-sm p-2">
                            <h6 class="m-0 d-flex align-items-center">
                                <img src="<?= base_url() ?>./assets/foto/<?= $catatan->foto; ?>" width="26" height="26" class="rounded-circle mr-1">
                                <a href="<?= base_url('user/profile/') ?><?= $catatan->id_user ?>" style="text-decoration: none;" class="text-dark"><b><?= $catatan->nama; ?></b></a>
                            </h6>
                            <div class="pt-2">
                                <h4><a style="text-decoration: none;" href="<?= base_url('catatan/showcatatan/') ?><?= $catatan->id_catatan; ?>"><?= $catatan->judul_catatan; ?></a></h4>
                                <p class="text-justify m-0">
                                    <?= $catatan->konten; ?>
                                </p>
                            </div>
                            <!-- <div class="row my-2">
                                <div class="col-12">
                                    <a href="#" class="badge badge-info">#Tags</a>
                                    <a href="#" class="badge badge-info">#Tags</a>
                                </div>
                                <div class="col-12">
                                </div>
                            </div> -->
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
                <!-- <div>
                    <h3 class="text-center">Trending</h3>
                    <a href="#" class="badge badge-info">#Matematika</a>
                    <a href="#" class="badge badge-info">#TPB</a>
                    <a href="#" class="badge badge-info">#UTBK</a>
                    <a href="#" class="badge badge-info">#SBMPTN</a>
                </div> -->
                <div class="text-left">
                    <h2 class="text-center p-4">Top User</h2>
                    <?php foreach ($top_user as $top) : ?>
                        <div class="my-2">
                            <img src="<?= base_url() ?>./assets/foto/<?= $top['foto']; ?>" width="24" height="24" class="rounded-circle mr-2">
                            <a href=""><?= $top['nama']; ?></a>
                            <span class="badge badge-pill badge-light float-right"><?= $top['total_poin']; ?> Poin</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>