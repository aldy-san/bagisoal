<div class="container text-center  my-5 rounded bg-white ">
    <div class="row justify-content-center">
        <div class="col-md-6 col-10 shadow p-5 my-5">
            <?= $this->session->flashdata('message'); ?>
            <h2 class="mb-4">Lupa Password</h2>
            <form method="post" action="<?= base_url('auth/lupa_password'); ?> ">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="email">Masukkan email anda yang sudah terdaftar</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                        <?= form_error('email', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Kirim Email</button>
                <hr>
                <p class="my-4 text-dark"> <a class="text-primary" href="<?= base_url('auth') ?>">Kembali untuk login</a></p>
            </form>
        </div>
    </div>
</div>