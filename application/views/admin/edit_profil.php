<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin') ?>">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('profil-admin') ?>">Profil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profil</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container shadow p-auto p-md-5 mt-3">
        <div class="row mb-md-5 border-bottom">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <h1>Edit Profil</h1>
            </div>
        </div>
        <div class="row my-3 justify-content-between">
            <div class="col-12 col-md-12">
                <div class="row justify-content-center">
                    <?= form_open_multipart('profil-admin/edit'); ?>
                    <div class="form-row ">
                        <div class="form-group col-6 ">
                            <img src="<?= base_url() ?>./assets/foto/<?= $user['foto']; ?>" class="d-block mx-auto mb-3 rounded-circle" width="155" height="155">
                            <div class="input-group w-75 mx-auto text-left">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input input-file" id="foto" name="foto">
                                    <label class="custom-file-label" for="foto">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group col-12  text-left">
                                <input type="hidden" name="id_admin" id="id_admin" value="<?= $user['id_admin'] ?>">
                                <input type="hidden" name="old" id="old" value="<?= $user['foto'] ?>">
                                <label for="nama" class="d-inline"><b>Nama</b></label>
                                <input type="name" class="form-control my-2 d-inline" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $user['nama_admin'] ?>">
                                <?= form_error('nama', '<small class="text-danger ml-0">', '</small>'); ?>
                            </div>
                            <div class="form-group col-12 text-left">
                                <label for="email" class="d-inline"><b>Email</b></label>
                                <input type="name" class="form-control my-2 d-inline" id="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" readonly>
                            </div>
                            <div class="form-group col-12 text-left">
                                <label for="no_hp" class="d-inline"><b>Nomor Handphone</b></label>
                                <input type="no_hp" class="form-control my-2 d-inline" id="no_hp" name="no_hp" placeholder="Nomor Handhphone" value="<?= $user['no_hp'] ?>">
                                <?= form_error('no_hp', '<small class="text-danger ml-0">', '</small>'); ?>
                            </div>
                            <div class="form-group col-12 text-left">
                                <label for="alamat" class="d-inline"><b>Alamat</b></label>
                                <input type="alamat" class="form-control my-2 d-inline" id="alamat" name="alamat" placeholder="Alamat" value="<?= $user['alamat'] ?>">
                                <?= form_error('alamat', '<small class="text-danger ml-0">', '</small>'); ?>
                            </div>
                            <div class="form-group col-12 text-left">
                                <label for="password" class="d-inline"><b>Konfirmasi Password</b></label>
                                <input type="password" class="form-control my-2 d-inline" id="password" name="password" placeholder="Konfirmasi password">
                                <?= form_error('password', '<small class="text-danger ml-0">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn btn-sm btn-primary col-2 mx-1">Konfirmasi</button>
                        <a href="<?= base_url('admin/profil') ?>" class="btn btn-sm btn-danger col-2 mx-1">Batal</a>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>