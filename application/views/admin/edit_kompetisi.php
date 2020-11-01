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
                <h2><i class="fas fa-plus mr-2"></i></i>TAMBAH KOMPETISI - <span class="text-primary"><?= $kompetisi['nama'] ?></span></h2>
            </div>
        </div>
        <div class="row">
            <?= form_open_multipart(current_url()); ?>
            <div class="form-row">
                <div class="form-group col-12">
                    <input type="hidden" name="kode_kompetisi" id="kode_kompetisi" value="<?= $this->uri->segment(3) ?>">
                    <label for="nama"><b>Nama Kompetisi</b></label>
                    <input type="name" class="form-control my-2" id="nama" name="nama" placeholder="Nama Kompetisi" value="<?= $kompetisi['nama'] ?>">
                    <?= form_error('nama', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="penyelenggara"><b>Penyelenggara</b></label>
                    <input type="text" class="form-control my-2" id="penyelenggara" name="penyelenggara" placeholder="Penyelenggara" value="<?= $kompetisi['penyelenggara'] ?>">
                    <?= form_error('penyelenggara', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12 col-md-3 my-2">
                    <label><b>Batas Pendaftaran</b></label>
                    <input type="date" class="form-control" id="batasPendaftaran" name="batasPendaftaran" value="<?= $kompetisi['batasPendaftaran'] ?>">
                    <?= form_error('batasPendaftaran', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
                <div class="form-group col-12 col-md-3 my-2">
                    <label><b>Mulai</b></label>
                    <input type="date" class="form-control" id="mulai" name="mulai" value="<?= $kompetisi['mulai'] ?>">
                    <?= form_error('mulai', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
                <div class="form-group col-12 col-md-3 my-2">
                    <label><b>Berakhir</b></label>
                    <input type="date" class="form-control" id="berakhir" name="berakhir" value="<?= $kompetisi['berakhir'] ?>">
                    <?= form_error('berakhir', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
                <div class="form-group col-12 col-md-3 my-2">
                    <label><b>Tambah Banner</b></label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="banner" name="banner" />
                            <label class="custom-file-label" for="banner">Pilih Gambar</label>
                            <input type="hidden" name="old" id="old" value="<?= $kompetisi['banner'] ?>">
                        </div>
                    </div>
                    <?= form_error('banner', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
            </div>
            <button class="btn btn-primary my-2">Edit Kompetisi</button>
            <a href="<?= base_url('daftar/kompetisi') ?>" class="btn btn-danger">Batal</a>
            <?= form_close(); ?>
        </div>
    </div>
</div>
</div>
</div>