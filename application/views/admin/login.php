<div class="container text-center p-3 my-5 rounded bg-white">
    <div class="row justify-content-center">
        <div class="col-md-4 p-5 shadow">
            <?= $this->session->flashdata('message'); ?>
            <i class="fas fa-users-cog fa-4x"></i>
            <h2 class="mb-4">ADMIN LOGIN</h2>
            <form method="post" action="<?= base_url('auth_admin'); ?>">
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
                <button class="btn btn-primary m-2" type="submit">MASUK</button>
            </form>
        </div>
    </div>
</div>