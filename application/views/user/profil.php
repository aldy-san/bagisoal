<div class="container text-center p-3 my-3 rounded bg-white shadow">
    <div class="container">
        <div class="row mb-md-5 border-bottom">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <h1>Profil Saya</h1>
            </div>
        </div>
        <div class="row my-3 justify-content-between">
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col-12 col-md-4 text-center">
                        <img src="<?= base_url() ?>./assets/foto/<?= $user['foto']; ?>" class="rounded-circle" width="155" height="155">
                    </div>
                    <div class="col-12 col-md-8 text-center text-md-left text-dark">
                        <a href="<?= base_url('admin/edit_profil') ?>" class="btn btn-primary btn-sm float-right">Edit Profil</a>
                        <h6>ID USER : <?= $user['id_user'] ?></h6>
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
            <div class="col-md-3 col-12 text-left px-3">
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
                            <th class="align-middle" scope="col">SOAL</th>
                            <th class="align-middle" scope="col">MATERI</th>
                            <th class="align-middle" scope="col">SUMBER</th>
                            <th class="align-middle" scope="col">POIN</th>
                            <th class="align-middle" scope="col">HASIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-left"><a href="#">Peleburan antara sel telur dan....</a></th>
                            <td>Biologi</td>
                            <td>SIMAK UI 2018</td>
                            <td>5 poin</td>
                            <td><span class="badge badge-success">BENAR</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="#">Tentukan rumus empiris...</a></th>
                            <td>Kimia</td>
                            <td>STAN 2017</td>
                            <td>10 poin</td>
                            <td><span class="badge badge-danger">SALAH</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="">Tentukanlah hasil dari Integral...</a></th>
                            <td>Matematika</td>
                            <td>Ujian Mandiri ITB 2016</td>
                            <td>20 poin</td>
                            <td><span class="badge badge-danger">SALAH</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="#">Peleburan antara sel telur dan....</a></th>
                            <td>Biologi</td>
                            <td>SIMAK UI 2018</td>
                            <td>5 poin</td>
                            <td><span class="badge badge-success">BENAR</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="#">Tentukan rumus empiris...</a></th>
                            <td>Kimia</td>
                            <td>STAN 2017</td>
                            <td>10 poin</td>
                            <td><span class="badge badge-danger">SALAH</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="">Tentukanlah hasil dari Integral...</a></th>
                            <td>Matematika</td>
                            <td>Ujian Mandiri ITB 2016</td>
                            <td>20 poin</td>
                            <td><span class="badge badge-danger">SALAH</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="#">Peleburan antara sel telur dan....</a></th>
                            <td>Biologi</td>
                            <td>SIMAK UI 2018</td>
                            <td>5 poin</td>
                            <td><span class="badge badge-success">BENAR</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="#">Tentukan rumus empiris...</a></th>
                            <td>Kimia</td>
                            <td>STAN 2017</td>
                            <td>10 poin</td>
                            <td><span class="badge badge-danger">SALAH</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="">Tentukanlah hasil dari Integral...</a></th>
                            <td>Matematika</td>
                            <td>Ujian Mandiri ITB 2016</td>
                            <td>20 poin</td>
                            <td><span class="badge badge-danger">SALAH</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="#">Peleburan antara sel telur dan....</a></th>
                            <td>Biologi</td>
                            <td>SIMAK UI 2018</td>
                            <td>5 poin</td>
                            <td><span class="badge badge-success">BENAR</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="#">Tentukan rumus empiris...</a></th>
                            <td>Kimia</td>
                            <td>STAN 2017</td>
                            <td>10 poin</td>
                            <td><span class="badge badge-danger">SALAH</span></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left"><a href="">Tentukanlah hasil dari Integral...</a></th>
                            <td>Matematika</td>
                            <td>Ujian Mandiri ITB 2016</td>
                            <td>20 poin</td>
                            <td><span class="badge badge-danger">SALAH</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>