<div class="container text-center p-3 my-3 rounded bg-white shadow">
    <div class="container">
        <div class="row mb-md-5 border-bottom">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <h1>Edit Profil</h1>
            </div>
        </div>
        <div class="row my-3 justify-content-between">
            <div class="col-12">
                <div class="row justify-content-center">
                    <?= form_open_multipart('edit-profil'); ?>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <img src="<?= base_url() ?>./assets/foto/<?= $user['foto']; ?>" class="mb-2 rounded-circle" width="155" height="155">
                            <div class="input-group w-75 mx-auto text-left">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input input-file" id="foto" name="foto" />
                                    <label class="custom-file-label" for="foto">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group col-12  text-left">
                                <input type="hidden" name="id_user" id="id_user" value="<?= $user['id_user'] ?>" ?>
                                <input type="hidden" name="poin" id="poin" value="<?= $user['total_poin'] ?>" ?>
                                <input type="hidden" name="old" id="old" value="<?= $user['foto'] ?>" ?>
                                <label for="nama" class="d-inline"><b>Nama</b></label>
                                <input type="name" class="form-control my-2 d-inline" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $user['nama'] ?>">
                                <?= form_error('nama', '<small class="text-danger ml-0">', '</small>'); ?>
                            </div>
                            <div class="form-group col-12 text-left">
                                <label for="email" class="d-inline"><b>Email</b></label>
                                <input type="name" class="form-control my-2 d-inline" id="email" name="email" placeholder="Email" value="<?= $user['email'] ?>" readonly>
                            </div>
                            <div class="form-group col-12 text-left">
                                <label for="password" class="d-inline"><b>Konfirmasi Password</b></label>
                                <input type="password" class="form-control my-2 d-inline" id="password" name="password" placeholder="Konfirmasi password">
                                <?= form_error('password', '<small class="text-danger ml-0">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary my-2">Konfirmasi</button>
                    <a href="<?= base_url('user/profil') ?>" class="btn btn-danger">Batal</a>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>