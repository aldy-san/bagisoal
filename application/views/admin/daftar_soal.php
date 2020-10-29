<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin') ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Soal</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container my-3 shadow p-md-5">
        <h3><i class="fas fa-folder mr-2"></i>DAFTAR SOAL</h3>
        <hr>
        <a href="<?= base_url('admin/tambah_soal') ?>" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data</a>
        <table class="table table-sm table-responsive-sm text-center table-striped">
            <thead>
                <tr>
                    <th scope="col" class="align-middle">KODE SOAL</th>
                    <th scope="col" class="align-middle">SOAL</th>
                    <th scope="col" class="align-middle">SUMBER</th>
                    <th scope="col" colspan="3" class="align-middle">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($soal as $soal) : ?>
                    <tr>
                        <th scope="row"><?= $soal->kode_soal ?></th>
                        <td class="text-left"><?= $soal->soal ?>...</td>
                        <td class="text-left"><?= $soal->sumber ?></td>
                        <td><a href="" class="btn btn-info">Detail</a></td>
                        <td><a href="edit-soal.html" class="btn btn-warning text-white"><i class="fas fa-edit"></i></a></td>
                        <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Soal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin menghapus soal ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Iya</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
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