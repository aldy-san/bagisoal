<div class="container p-3 my-3 rounded bg-white shadow-lg">
    <div class="row">
        <div class="col-12">
            <p class="h4 ">KOMPETISI</p>
        </div>
    </div>
    <div class="row justify-content-between my-2 mx-1">
        <div class="col-6 align-self-centere p-0">
            <h5 class="my-auto text-left">Jelajahi Kompetisi Di Seluruh Indonesia</h5>
        </div>
        <!-- <div class="col-6 col-lg-4 d-flex justify-content-end ">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#cari">
                Cari
            </button>
        </div> -->
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-responsive-sm text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Penyelenggara</th>
                        <th scope="col">Batas Pendaftaran</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kompetisi as $kompetisi) : ?>
                        <tr>
                            <th scope="row"><a href="<?= base_url('kompetisi/show/') . $kompetisi->kode_kompetisi ?>"><?= $kompetisi->nama ?></a></th>
                            <td><?= $kompetisi->penyelenggara ?></td>
                            <td><?php setlocale(LC_ALL, 'IND');
                                $stamp = strtotime($kompetisi->batasPendaftaran);
                                echo strftime("%d %B %Y", $stamp);
                                ?></td>
                            <td><?php $stamp = strtotime($kompetisi->mulai);
                                echo strftime("%d %B %Y", $stamp) ?> -
                                <?php $stamp = strtotime($kompetisi->berakhir);
                                echo strftime("%d %B %Y", $stamp) ?></td>
                            <td>
                                <?= $this->session->userdata('email') ? "<a href=" . base_url('kompetisi/daftar/') . $kompetisi->kode_kompetisi . " class='btn btn-primary'>Daftar</a>" : "<a href=" . base_url('auth') . " type='button' class='btn btn-outline-dark'>Login untuk mendaftar</a>"; ?>
                            </td>
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