<div class="container text-center p-3 my-3 rounded bg-white shadow">
    <div class="row">
        <div class="col-12">
            <h3 class="text-left">KUMPULAN SOAL</h3>
        </div>
    </div>
    <div class="row justify-content-between my-2">
        <div class="col-2 align-self-center">
            <h5 class=" my-auto text-left">Jelajahi Soal</h5>
        </div>
        <!-- <div class="float-right mr-3">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#filter">Filter</button>
        </div> -->
        <!-- Modal -->
        <!-- <div class="modal fade" id="filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form>
                                <div class="form-group">
                                    <label for="cariSoal">Cari Soal</label>
                                    <input type="email" class="form-control" id="cariSoal" placeholder="Peleburan sel/Integral dari">
                                </div>
                                <div class="form-group">
                                    <label for="Materi">Urutkan Menurut</label>
                                    <select class="form-control" id="Materi">
                                        <option>Soal</option>
                                        <option>Poin</option>
                                        <option>Populer</option>
                                        <option>Sumber</option>
                                    </select>
                                </div>
                                <h6>Materi</h6>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Matematika" value="option1">
                                    <label class="form-check-label" for="Matematika">Matematika</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Fisika" value="option2">
                                    <label class="form-check-label" for="Fisika">Fisika</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Kimia" value="option2">
                                    <label class="form-check-label" for="Kimia">Kimia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Biologi" value="option2">
                                    <label class="form-check-label" for="Biologi">Biologi</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-responsive-sm text-center">
                <thead class="table-dark">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2">SOAL</th>
                        <th class="align-middle" scope="col" rowspan="2">MATERI</th>
                        <th class="align-middle" scope="col" rowspan="2">SUMBER</th>
                        <th scope="col" colspan="3">USER</th>
                        <th class="align-middle" scope="col" rowspan="2">POIN</th>
                    </tr>
                    <tr>
                        <th scope="col">TOTAL</th>
                        <th scope="col">BENAR</th>
                        <th scope="col">RASIO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($soal as $soal) : ?>
                        <?php
                        $jawaban = $this->m_soal->soal_jumlah_jawab($soal->kode_soal);
                        $benar = $this->m_soal->soal_jumlah_hasil($soal->kode_soal, 'BENAR');
                        if ($jawaban > 0) {
                            $rasio = round($benar / $jawaban * 100);
                        } else {
                            $rasio = 0;
                        }
                        $cekTerjawab = $this->m_soal->cekTerjawab($id, $soal->kode_soal);
                        ?>
                        <tr <?= $cekTerjawab ? "style='background-color: #B4F8C8;'" : ''; ?>>
                            <th scope="row"><a href="<?= base_url('soal/jawab/' . $soal->kode_soal) ?>" style="text-decoration: none; font-weight:600;"><?= substr($soal->soal, 0, 50) ?>...</a></th>
                            <td><?= $soal->materi ?></td>
                            <td><?= $soal->sumber ?></td>
                            <td><?= $jawaban ?></td>
                            <td><?= $benar ?></td>
                            <td><?= $rasio ?>%</td>
                            <td><?= $soal->poin ?></td>
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