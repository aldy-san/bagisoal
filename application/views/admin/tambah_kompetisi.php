<div class="col-lg-10 col-12">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin') ?>">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin/daftar_kompetisi') ?>">Daftar Kompetisi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Kompetisi</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container my-3 shadow p-md-5">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <h2><i class="fas fa-plus mr-2"></i></i>TAMBAH KOMPETISI</h2>
            </div>
        </div>
        <?= form_open_multipart('tambah/kompetisi'); ?>
        <div class="form-row">
            <div class="form-group col-12">
                <label for="nama"><b>Nama Kompetisi</b></label>
                <input type="name" class="form-control my-2" id="nama" name="nama" placeholder="Nama Kompetisi" value="<?php echo set_value('nama'); ?>">
                <?= form_error('nama', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-12">
                <label for="penyelenggara"><b>Penyelenggara</b></label>
                <input type="text" class="form-control my-2" id="penyelenggara" name="penyelenggara" placeholder="Penyelenggara" value="<?php echo set_value('penyelenggara'); ?>">
                <?= form_error('penyelenggara', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
        </div>
        <div class="row">
            <h5 class="col"><b>Pilih soal dalam kompetisi ini </b></h5>
        </div>
        <div class="form-row justify-content-between">
            <div class="form-group col-12 col-md-2 my-2">
                <label><b>Pilih Soal 1</b></label>
                <select class="form-control" name="soal1" id="soal1" value="<?php echo set_value('soal1'); ?>">
                    <?php $soal1 = $soal; ?>
                    <option value="" disabled selected>Pilih</option>
                    <?php foreach ($soal1 as $soal1) : ?>
                        <option value=" <?= $soal1['kode_soal'] ?>"><?= $soal1['kode_soal'] ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('soal1', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
            <div class="form-group col-12 col-md-2 my-2">
                <label><b>Pilih Soal 2</b></label>
                <select class="form-control" name="soal2" id="soal2" value="<?php echo set_value('soal2'); ?>">
                    <?php $soal1 = $soal; ?>
                    <option value="" disabled selected>Pilih</option>
                    <?php foreach ($soal1 as $soal1) : ?>
                        <option value=" <?= $soal1['kode_soal'] ?>"><?= $soal1['kode_soal'] ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('soal2', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
            <div class="form-group col-12 col-md-2 my-2">
                <label><b>Pilih Soal 3</b></label>
                <select class="form-control" name="soal3" id="soal3" value="<?php echo set_value('soal3'); ?>">
                    <?php $soal1 = $soal; ?>
                    <option value="" disabled selected>Pilih</option>
                    <?php foreach ($soal1 as $soal1) : ?>
                        <option value=" <?= $soal1['kode_soal'] ?>"><?= $soal1['kode_soal'] ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('soal3', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
            <div class="form-group col-12 col-md-2 my-2">
                <label><b>Pilih Soal 4</b></label>
                <select class="form-control" name="soal4" id="soal4" value="<?php echo set_value('soal4'); ?>">
                    <?php $soal1 = $soal; ?>
                    <option value="" disabled selected>Pilih</option>
                    <?php foreach ($soal1 as $soal1) : ?>
                        <option value=" <?= $soal1['kode_soal'] ?>"><?= $soal1['kode_soal'] ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('soal4', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
            <div class="form-group col-12 col-md-2 my-2">
                <label><b>Pilih Soal 5</b></label>
                <select class="form-control" name="soal5" id="soal5" value="<?php echo set_value('soal5'); ?>">
                    <?php $soal1 = $soal; ?>
                    <option value="" disabled selected>Pilih</option>
                    <?php foreach ($soal1 as $soal1) : ?>
                        <option value=" <?= $soal1['kode_soal'] ?>"><?= $soal1['kode_soal'] ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('soal5', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-12 col-md-3 my-2">
                <label><b>Batas Pendaftaran</b></label>
                <input type="date" class="form-control" id="batasPendaftaran" name="batasPendaftaran" value="<?php echo set_value('batasPendaftaran'); ?>">
                <?= form_error('batasPendaftaran', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
            <div class="form-group col-12 col-md-3 my-2">
                <label><b>Mulai</b></label>
                <input type="date" class="form-control" id="mulai" name="mulai" value="<?php echo set_value('mulai'); ?>">
                <?= form_error('mulai', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
            <div class="form-group col-12 col-md-3 my-2">
                <label><b>Berakhir</b></label>
                <input type="date" class="form-control" id="berakhir" name="berakhir" value="<?php echo set_value('berakhir'); ?>">
                <?= form_error('berakhir', '<small class="text-danger ml-0">', '</small>'); ?>
            </div>
            <div class="form-group col-12 col-md-3 my-2">
                <label><b>Tambah Banner</b></label>
                <div class="input-group">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" id="banner" name="banner" value="<?php echo set_value('banner'); ?>">
                        <label class="custom-file-label" for="banner">Pilih Gambar</label>
                    </div>
                </div>
                <?= form_error('banner', '<small class=" text-danger ml-0">', '</small>'); ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-2">Tambah Kompetisi</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        <?= form_close(); ?>
    </div>
</div>
</div>
</div>