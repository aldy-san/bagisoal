<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="admin.html">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Pengguna</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container my-3 shadow p-md-5">
        <?= $this->session->flashdata('message'); ?>
        <h3><i class="fas fa-user mr-2"></i></i>DAFTAR PENGGUNA</h3>
        <hr>
        <table class="table table-sm table-responsive-sm text-center table-striped">
            <thead>
                <tr>
                    <th scope="col" class="align-middle">id user</th>
                    <th scope="col" class="align-middle">Nama</th>
                    <!-- <th scope="col" class="align-middle">Tempat Lahir</th>
                    <th scope="col" class="align-middle">Tanggal Lahir</th>
                    <th scope="col" class="align-middle">Instansi</th> -->
                    <th scope="col" class="align-middle">Email</th>
                    <th colspan="2" scope="col" class="align-middle">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pengguna as $pengguna) : ?>
                    <tr>
                        <th scope="row"><?= $pengguna->id_user ?></th>
                        <td><?= $pengguna->nama ?></td>
                        <!-- <td>Tulungagung</td>
                    <td>27-07-2001</td>
                    <td>Universitas Negeri Malang</td> -->
                        <td><?= $pengguna->email ?></td>
                        <td><a href="" class="btn btn-info">Profil</a></td>
                        <td onclick="return confirm('yakin?')"><a type="button" href="<?= base_url('admin/hapus_users/' . $pengguna->id_user) ?>" id="btn-delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                        <!-- <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td> -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Modal
        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin menghapus pengguna ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Iya</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row justify-content-center m-2">
            <div class="col-4">
                <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">23</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
</div>