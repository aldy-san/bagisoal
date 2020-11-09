<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin') ?>">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin/daftar_mitra') ?>">Daftar Mitra</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Mitra</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container my-3 shadow p-md-5">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <h2><i class="fas fa-plus mr-2"></i></i>TAMBAH MITRA</h2>
            </div>
        </div>
        <div class="row">
            <form class="col-12 mt-3" action="<?= base_url('tambah/mitra') ?>" method="post">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="nama"><b>Nama Mitra</b></label>
                        <input type="name" class="form-control my-2" id="nama" name="nama" placeholder="Nama Mitra" value="<?php echo set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="bidang"><b>Bidang</b></label>
                        <input type="text" class="form-control my-2" id="bidang" name="bidang" placeholder="Bidang" value="<?php echo set_value('bidang'); ?>">
                        <?= form_error('bidang', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="alamat"><b>Alamat</b></label>
                        <input type="text" class="form-control my-2" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo set_value('alamat'); ?>">
                        <?= form_error('alamat', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="email"><b>Email</b></label>
                        <input type="text" class="form-control my-2" id="email" name="email" placeholder="Email Mitra" value="<?php echo set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <button class="btn btn-primary my-2">Tambah Mitra</button>
                <button type="reset" class="btn btn-danger">reset</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>