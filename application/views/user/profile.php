<div class="container text-center p-3 my-3 rounded bg-white shadow">
    <div class="container">
        <div class="row mb-md-5 border-bottom">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <h1>Profil Saya</h1>
            </div>
        </div>
        <div class="row my-3 justify-content-between">
            <div class="col-12 col-md-10">
                <div class="row">
                    <div class="col-12 col-md-4 text-center">
                        <img src="<?= base_url() ?>./assets/foto/<?= $user_profil['foto']; ?>" class="rounded-circle" width="155" height="155">
                    </div>
                    <div class="col-12 col-md-8 text-center text-md-left text-dark">
                        <h6>ID USER : <?= $user_profil['id_user'] ?></h6>
                        <h3><?= $user_profil['nama'] ?></h3>
                        <h5>Poin: <?= $user_profil['total_poin'] ?></h5>
                        <h5>Peringkat: <?= $rank['rank'] ?></h5>
                        <div class="my-2">
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="" class="text-dark"><?= $user_profil['email'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-12 text-left px-3">
                <h5 class="text-center mb-3 btn-primary py-1">STATISTIK</h5>
                <table>
                    <tr>
                        <td><b>Jawaban</b></td>
                        <td>: <?= $total_jawab ?></td>
                    </tr>
                    <tr>
                        <td><b>Benar</b></td>
                        <td>: <?= $total_benar ?></td>
                    </tr>
                    <tr>
                        <td><b>Salah</b></td>
                        <td>: <?= $total_salah ?></td>
                    </tr>
                    <tr>
                        <td><b>Rasio</b></td>
                        <td>: <?= round($rasio)  ?>%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>