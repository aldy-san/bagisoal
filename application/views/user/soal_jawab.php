<div class="container text-center p-5 my-3 rounded bg-white shadow">
    <div class="row">
        <div class="col-9">
            <div class="container">
                <div class="row p-2 shadow-sm">
                    <div class="col-12 text-left">
                        <?= $this->session->flashdata('message'); ?>
                        <hr class="my-1">
                        <p><?= $soal['soal'] ?></p>
                        <hr>
                        <form action="<?= current_url() ?>" method="post">
                            <input type="hidden" id="kode_soal" name="kode_soal" value="<?= $soal['kode_soal'] ?>">
                            <div class="form-row justify-content-between">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opsi" id="opsi1" value="A">
                                        <label class="form-check-label" for="opsi1">
                                            <?= $soal['opsi1'] ?>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opsi" id="opsi2" value="B">
                                        <label class="form-check-label" for="opsi2">
                                            <?= $soal['opsi2'] ?>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opsi" id="opsi3" value="C">
                                        <label class="form-check-label" for="opsi3">
                                            <?= $soal['opsi3'] ?>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="opsi" id="opsi4" value="D">
                                        <label class="form-check-label" for="opsi4">
                                            <?= $soal['opsi4'] ?>
                                        </label>
                                    </div>
                                    <?= form_error('opsi', '<small class="text-danger ml-0">', '</small>'); ?>

                                </div>
                                <button type="submit" class="btn btn-sm btn-primary rounded my-2">Jawab</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-12 col-12">
                        <a class="btn btn-info" data-toggle="collapse" href="#pembahasan" role="button" aria-expanded="false" aria-controls="pembahasan">
                            PEMBAHASAN
                        </a>
                    </div>
                    <div class="col-12 my-2">
                        <div class="collapse" id="pembahasan">
                            <div class="card card-body">
                                <?= $soal['pembahasan'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="container text-left">
                <div class="row">
                    <div class="col-12 p-3 shadow-sm">
                        <h5 class="text-center">KETERANGAN</h5>
                        <?php if ($cekTerjawab) {
                            if ($cekJawaban) {
                                echo "<div class='alert alert-success text-center' role='alert'>Soal Sudah Terjawab</div>";
                            } else {
                                echo "<div class='alert alert-danger text-center' role='alert'>Soal Sudah Terjawab</div>";
                            }
                        }  ?>

                        <p class="m-1"><b>Kode Soal:</b> <?= $soal['materi'] . $soal['kode_soal'] ?></p>
                        <p class="m-1"><b>Sumber:</b> <?= $soal['sumber'] ?></p>
                        <!-- <p class="m-1"><b>Diunggah:</b> 10 Oktober 2020</p> -->
                        <p class="m-1"><b>Poin:</b> <?= $soal['poin'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>