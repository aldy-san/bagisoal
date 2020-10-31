<div class="container text-center p-3 my-3 rounded bg-white shadow">
    <div class="container">
        <div class="row mb-md-5 border-bottom">
            <div class="col-12">
                <h1>Profil Saya</h1>
            </div>
        </div>
        <div class="row my-3 justify-content-between">
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col-12 col-md-4 text-center">
                        <img src="<?= base_url() ?>/application/res/<?= $user['foto']; ?>" class="rounded-circle" width="155" height="155">
                    </div>
                    <div class="col-12 col-md-8 text-center text-md-left">
                        <h3 class="d-md-inline"><?= $user['nama'] ?></h3>
                        <a href="<?= base_url('user/edit_profil') ?>" class="btn btn-primary btn-sm mb-2">Edit Profil</a>
                        <h5>Poin: <?= $user['total_poin'] ?></h5>
                        <h5>Peringkat: --</h5>
                        <div class="my-2">
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="" class="text-dark"><?= $user['email'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 text-left px-3 py-1">
                <h3 class="text-center mb-3 btn-info">STATISTIK</h3>
                <table>
                    <tr>
                        <td><b>Soal Terjawab</b></td>
                        <td>: 0</td>
                    </tr>
                    <tr>
                        <td><b>Benar</b></td>
                        <td>: 0</td>
                    </tr>
                    <tr>
                        <td><b>Salah</b></td>
                        <td>: 0</td>
                    </tr>
                    <tr>
                        <td><b>Rasio</b></td>
                        <td>: 0%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>