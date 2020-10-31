<div class="container text-center p-3 my-3 rounded bg-white shadow">
    <div class="container">
        <div class="row mb-md-5 border-bottom">
            <div class="col-12">
                <h1>Edit Profil</h1>
            </div>
        </div>
        <div class="row my-3 justify-content-between">
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col-12 col-md-4 text-center">
                        <img src="<?= base_url() ?>/application/res/<?= $user['foto']; ?>" class="rounded-circle" width="155" height="155">
                    </div>
                    <div class="col-12 col-md-8 text-center text-md-left">
                        <h3><?= $user['nama'] ?></h3>
                        <h5>Poin: <?= $user['total_poin'] ?></h5>
                        <h5>Peringkat: --</h5>
                        <div class="my-2">
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="" class="text-dark"><?= $user['email'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>