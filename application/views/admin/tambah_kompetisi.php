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
        <div class="row">
            <?= form_open_multipart('tambah/kompetisi'); ?>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="nama"><b>Nama Kompetisi</b></label>
                    <input type="name" class="form-control my-2" id="nama" name="nama" placeholder="Nama Kompetisi">
                    <?= form_error('nama', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="penyelenggara"><b>Penyelenggara</b></label>
                    <input type="text" class="form-control my-2" id="penyelenggara" name="penyelenggara" placeholder="Penyelenggara">
                    <?= form_error('penyelenggara', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12 col-md-3 my-2">
                    <label><b>Batas Pendaftaran</b></label>
                    <input type="date" class="form-control" id="batasPendaftaran" name="batasPendaftaran">
                    <?= form_error('batasPendaftaran', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
                <div class="form-group col-12 col-md-3 my-2">
                    <label><b>Mulai</b></label>
                    <input type="date" class="form-control" id="mulai" name="mulai">
                    <?= form_error('mulai', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
                <div class="form-group col-12 col-md-3 my-2">
                    <label><b>Berakhir</b></label>
                    <input type="date" class="form-control" id="berakhir" name="berakhir">
                    <?= form_error('berakhir', '<small class="text-danger ml-0">', '</small>'); ?>
                </div>
                <div class="form-group col-12 col-md-3 my-2">
                    <label><b>Tambah Banner</b></label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="banner" name="banner" />
                            <label class="custom-file-label" for="banner">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-2">Tambah Kompetisi</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
</div>
</div>