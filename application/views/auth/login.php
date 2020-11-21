<div class="container text-center  my-5 rounded bg-white ">
    <div class="row justify-content-center">
        <div class="col-md-6 col-10 shadow p-5 my-5">
            <?= $this->session->flashdata('message'); ?>
            <h2 class="mb-4">LOGIN</h2>
            <form method="post" action="<?= base_url('auth'); ?> ">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                        <?= form_error('email', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger ml-0">', '</small>'); ?>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">LOGIN</button>
                <hr>
                <p class="my-4 text-dark"> <a class="text-primary" href="<?= base_url('auth/lupa_password') ?>">Lupa Password ?</a></p>
                <p class="my-4 text-dark">Jika belum memiliki akun harap daftar terlebih dahulu | <a class="text-primary" href="<?= base_url('auth/register') ?>">Daftar ?</a></p>
            </form>
        </div>
    </div>
</div>