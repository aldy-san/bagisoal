<div class="container text-center  my-5 rounded bg-white ">
    <div class="row justify-content-center">
        <div class="col-md-6 col-10 shadow p-5 my-5">
            <?= $this->session->flashdata('message'); ?>
            <h2 class="mb-4">Reset Password</h2>
            <form method="post" action="<?= base_url('auth/changePassword'); ?> ">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" name="email" id="email" value="<?= $this->session->userdata('reset_email') ?>" readonly placeholder="Email">
                        <?= form_error('email', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="password1" style="font-weight: bold;">Buat Password Baru</label>
                        <input type="password" class="form-control" name="password1" id="password1" placeholder="Password Baru">
                        <?= form_error('password1', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password">
                    </div>
                    <button class="btn btn-primary" type="submit">Ubah Password</button>
                    <hr>
            </form>
        </div>
    </div>
</div>