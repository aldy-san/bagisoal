<!-- CONTENT -->
<div class="container p-3 my-3 bg-white shadow">
    <div class="container">
        <div class="row no-gutters mt-3 mb-4">
            <h3><i class="fas fa-trophy mr-2"></i>Daftar Peringkat</h3>
        </div>
    </div>
    <div class="row no-gutters">
    </div>
    <div class="container p-3">
        <table class="table table-stripped table-bordered table-sm text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Poin</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0 ?>
                <?php foreach ($user_terbaik as $ut) : ?>
                    <tr>
                        <th scope="row"><?= ++$no ?></th>
                        <td class="text-left"><a href="<?= base_url('user/profile/')?><?= $ut->id_user ?>"><?= $ut->nama ?></a></td>
                        <td><?= $ut->total_poin ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>