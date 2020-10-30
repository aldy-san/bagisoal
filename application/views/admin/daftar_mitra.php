<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="admin.html">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Mitra</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container my-3 shadow p-md-5">
        <h3><i class="fas fa-handshake mr-2"></i>DAFTAR MITRA</h3>
        <hr>
        <a href="tambah-mitra.html" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data</a>
        <table class="table table-sm table-responsive-sm text-center table-striped">
            <thead>
                <tr>
                    <th scope="col" class="align-middle">No</th>
                    <th scope="col" class="align-middle">Nama Perusahaan</th>
                    <th scope="col" class="align-middle">Bidang</th>
                    <th scope="col" class="align-middle">Alamat</th>
                    <th scope="col" class="align-middle">Email</th>
                    <th scope="col" class="align-middle">Tanggal Bergabung</th>
                    <th colspan="3" scope="col" class="align-middle">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Yayasan Pendidikan Global Village Indonesia</td>
                    <td>Pendidikan</td>
                    <td>Jl. Ahmad Yani No.5, Jakarta Utara</td>
                    <td>globalvillage.edu@gmail.com</td>
                    <td>20-02-2018</td>
                    <td><a href="" class="btn btn-info">Detail</a></td>
                    <td><a href="edit-mitra.html" class="btn btn-warning text-white"><i class="fas fa-edit"></i></a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Moka Creative</td>
                    <td>Pendidikan</td>
                    <td>Jl. Apel No.3, Malang</td>
                    <td>mokacreativeofficial@gmail.com</td>
                    <td>28-07-2019</td>
                    <td><a href="" class="btn btn-info">Detail</a></td>
                    <td><a href="edit-mitra.html" class="btn btn-warning text-white"><i class="fas fa-edit"></i></a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Mitra</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin menghapus Mitra ini?
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
                        <li class="page-item disabled">
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