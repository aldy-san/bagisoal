<div class="container text-center p-3 my-5 rounded bg-white ">
    <div class="row justify-content-center">
        <div class="col-md-6 col-10 shadow p-5">
            <div id="registrasi" class=" mt-4 mt-md-0">
                <h2 class="mb-4">REGISTRASI</h2>
                <form method="post" action="<?= base_url('auth/register'); ?>">
                    <div class="form-row">
                        <div class="col-12 mb-2">
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo set_value('nama'); ?>" placeholder="Nama Lengkap">
                            <?= form_error('nama', '<small class="text-danger ml-0">', '</small>'); ?>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger ml-0">', '</small>'); ?>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="password" class="form-control" name="password1" id="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger ml-0">', '</small>'); ?>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password">
                        </div>
                    </div>
                    <!-- <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="provinsi">Provinsi</label>
                        <select class="custom-select" id="provinsi" required>
                            <option selected disabled value="">Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="kota">Kota</label>
                        <select class="custom-select" id="kota" required>
                            <option selected disabled value="">Pilih...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="sekolah">Sekolah</label>
                        <input type="text" class="form-control" id="sekolah" required>
                    </div>
                </div> -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="syarat" name="syarat">
                            <label class="form-check-label" for="syarat">
                                Saya menyetujui syarat dan ketentuan.
                            </label>
                        </div>
                        <?= form_error('syarat', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <button class="btn btn-primary" type="submit">SIGN UP</button>
                </form>
                <hr>
                <p class="my-4 text-dark"> <a class="text-primary" href="<?= base_url('auth/lupa_password') ?>">Lupa Password ?</a></p>
                <p class="my-4 text-dark">Jika sudah memiliki akun, silahkan login | <a class="text-primary" href="<?= base_url('auth') ?>">Login ?</a></p>
            </div>
        </div>
    </div>
</div>