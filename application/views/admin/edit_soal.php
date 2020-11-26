<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin') ?>">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin/daftar_soal') ?>">Daftar Soal</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Soal</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container my-3 shadow p-md-5">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <h2><i class="fas fa-edit mr-2"></i></i>EDIT SOAL - <span class="text-primary"><?= $soal['kode_soal'] ?></span></h2>
            </div>
        </div>
        <div class="row">
            <form class="col-12 mt-3" action="<?= current_url() ?>" method="post">
                <div class="form-row my-2">
                    <div class="form-group col-12">
                        <label for="soal"><b>Soal:</b></label>
                        <input type="hidden" name="kode_soal" id="kode_soal" value="<?= $this->uri->segment(3) ?>">
                        <textarea class="form-control col-12 p-2" id="soal" name="soal" placeholder="Masukkan Soal"><?= $soal['soal']; ?></textarea>
                        <?= form_error('soal', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="form-group col-12 col-md-3">
                        <label for="opsi1"><b>Opsi 1</b></label>
                        <textarea class="form-control" id="opsi1" name="opsi1" rows="1"><?= $soal['opsi1']; ?></textarea>
                        <?= form_error('opsi1', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <div class="form-group col-12 col-md-3">
                        <label for="opsi2"><b>Opsi 2</b></label>
                        <textarea class="form-control" id="opsi2" name="opsi2" rows="1"><?= $soal['opsi2']; ?></textarea>
                        <?= form_error('opsi2', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <div class="form-group col-12 col-md-3">
                        <label for="opsi3"><b>Opsi 3</b></label>
                        <textarea class="form-control" id="opsi3" name="opsi3" rows="1"><?= $soal['opsi3']; ?></textarea>
                        <?= form_error('opsi3', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <div class="form-group col-12 col-md-3">
                        <label for="opsi4"><b>Opsi 4</b></label>
                        <textarea class="form-control" id="opsi4" name="opsi4" rows="1"><?= $soal['opsi4']; ?></textarea>
                        <?= form_error('opsi4', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row my-2 justify-content-between">
                    <div class="form-group col-12 col-md-6">
                        <label for="sumber"><b>Sumber</b></label>
                        <input class="form-control" type="text" id="sumber" name="sumber" placeholder="Sumber" value="<?= $soal['sumber']; ?>">
                        <?= form_error('sumber', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <div class="form-group col-12 col-md-3">
                        <label for="materi"><b>Materi</b></label>
                        <select id="materi" name="materi" class="form-control" value="<?php echo set_value('materi'); ?>">
                            <option selected disabled value="">Materi...</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Kimia">Kimia</option>
                        </select>
                        <?= form_error('materi', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <div class="form-group col-12 col-md-3">
                        <label for="poin"><b>Poin</b></label>
                        <input class="form-control" type="number" id="poin" name="poin" placeholder="Poin" value="<?= $soal['poin']; ?>">
                        <?= form_error('poin', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="form-group col-12">
                        <label for="pembahasan"><b>Pembahasan</b></label>
                        <textarea class="form-control col-12 p-2" id="pembahasan" name="pembahasan" placeholder="Masukkan Pembahasan"><?= $soal['pembahasan']; ?></textarea>
                        <?= form_error('pembahasan', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <!-- <div class="form-row my-2">
                            <div class="form-group col-md-4 col-12">
                                <label for="gambarPembahasan"><b>Tambahkan gambar (Pembahasan)</b></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                <button type="submit" class="btn btn-primary mb-2">Edit Soal</button>
                <a href="<?= base_url('daftar/soal') ?>" class="btn btn-danger mb-2">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>