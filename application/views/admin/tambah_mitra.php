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
            <form class="col-12 mt-3" action="<?= base_url('admin/input_mitra') ?>" method="post">
                <div class="form-row my-2">
                    <div class="form-group col-12">
                        <label for="soal"><b>Nama Mitra</b></label>
                        <input type="name" class="form-control my-2" id="nama" name="nama" placeholder="Nama Mitra">
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="form-group col-12">
                        <label for="bidang"><b>Bidang</b></label>
                        <input type="text" class="form-control my-2" id="bidang" name="bidang" placeholder="Bidang">
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="form-group col-12">
                        <label for="alamat"><b>Alamat</b></label>
                        <input type="text" class="form-control my-2" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                </div>
                <div class="form-row my-2">
                    <div class="form-group col-12">
                        <label for="email"><b>Email</b></label>
                        <input type="email" class="form-control my-2" id="email" name="email" placeholder="Email Mitra">
                    </div>
                </div>
                <button class="btn btn-primary my-2">Tambah Mitra</button>
                <button type="submit" class="btn btn-danger">Batal</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>