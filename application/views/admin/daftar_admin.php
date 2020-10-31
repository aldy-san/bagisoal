<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('') ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Admin</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container my-3 shadow p-md-5">
        <?= $this->session->flashdata('message'); ?>
        <h3><i class="fas fa-users-cog mr-2"></i>DAFTAR ADMIN</h3>
        <hr>
        <table class="table table-sm table-responsive-sm text-center table-striped">
            <thead>
                <tr>
                    <th scope="col" class="align-middle"></th>
                    <th scope="col" class="align-middle">Nama Admin</th>
                    <th scope="col" class="align-middle">Jabatan</th>
                    <th scope="col" class="align-middle"></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = $this->uri->segment(3);
                foreach ($admin as $admin) : ?>
                    <tr>
                        <th scope="row"><img src="<?= base_url() ?>/application/res/<?= $admin->foto; ?>" height="45" width="45" class="rounded-circle"></th>
                        <td class="align-middle"><?= $admin->nama_admin ?></td>
                        <td class="align-middle"><?= $admin->jabatan ?></td>
                        <td><a href="profil-admin.html" class="btn btn-success">Profil</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>