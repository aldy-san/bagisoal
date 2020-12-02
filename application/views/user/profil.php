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
                        <img src="<?= base_url() ?>./assets/foto/<?= $user['foto']; ?>" class="rounded-circle" width="155" height="155">
                    </div>
                    <div class="col-12 col-md-8 text-center text-md-left text-dark">
                        <a href="<?= base_url('edit-profil') ?>" class="btn btn-primary btn-sm float-right">Edit Profil</a>
                        <h6>ID USER : <?= $user['id_user'] ?></h6>
                        <h3><?= $user['nama'] ?></h3>
                        <h5>Poin: <?= $user['total_poin'] ?></h5>
                        <h5>Peringkat: <?= $rank['rank'] ?></h5>
                        <div class="my-2">
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="" class="text-dark"><?= $user['email'] ?></a>
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
<div class="container text-center p-3 my-3 rounded bg-white shadow">
    <div class="container">
        <div class="row mb-md-5 border-bottom">
            <div class="col-12">
                <h1>Log Aktivitas</h1>
            </div>
        </div>
        <div class="row my-3 justify-content-between">
            <div class="container">
                <table class="table table-sm table-responsive-sm text-center">
                    <thead class="table-dark">
                        <tr>
                            <th class="align-middle" scope="col">ID</th>
                            <th class="align-middle" scope="col">SOAL</th>
                            <th class="align-middle" scope="col">MATERI</th>
                            <th class="align-middle" scope="col">SUMBER</th>
                            <th class="align-middle" scope="col">TANGGAL</th>
                            <th class="align-middle" scope="col">HASIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($log as $log) : ?>
                            <tr>
                                <th scope="row"><?= $log->id_jawaban ?></th>
                                <td class="text-left"><a href="<?= base_url('soal/jawab/' . $log->kode_soal) ?>"><?= substr($log->soal, 0, 50) ?>...</td>
                                <td><?= $log->materi ?></td>
                                <td><?= $log->sumber ?></td>
                                <td><?php $stamp = strtotime($log->tanggal);
                                    echo date("d F Y", $stamp); ?></td>
                                <?php if ($log->hasil == "BENAR") {
                                    echo "<td><span class='badge badge-success'> $log->hasil </span></td>";
                                } else {
                                    echo "<td><span class='badge badge-danger'> $log->hasil </span></td>";
                                } ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center m-2">
            <div class="col-4">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>