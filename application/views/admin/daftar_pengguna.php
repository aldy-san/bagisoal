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
        <h3><i class="fas fa-user mr-2"></i></i>DAFTAR PENGGUNA</h3>
        <hr>
        <table class="table table-sm table-responsive-sm text-center table-striped">
            <thead>
                <tr>
                    <th scope="col" class="align-middle">No</th>
                    <th scope="col" class="align-middle">Nama</th>
                    <th scope="col" class="align-middle">Tempat Lahir</th>
                    <th scope="col" class="align-middle">Tanggal Lahir</th>
                    <th scope="col" class="align-middle">Instansi</th>
                    <th scope="col" class="align-middle">Email</th>
                    <th colspan="2" scope="col" class="align-middle">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Lailatul Khasanah</td>
                    <td>Tulungagung</td>
                    <td>27-07-2001</td>
                    <td>Universitas Negeri Malang</td>
                    <td>lailatulkhasanah277@gmail.com</td>
                    <td><a href="" class="btn btn-info">Profil</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Nur Syahrial Maulidi</td>
                    <td>Malang</td>
                    <td>21-12-2000</td>
                    <td>Universitas Indonesia</td>
                    <td>nur.sm@gmail.com</td>
                    <td><a href="" class="btn btn-info">Profil</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Muhammad Syukur Abadi</td>
                    <td>Malang</td>
                    <td>22-02-2000</td>
                    <td>Universitas Gadjah Mada</td>
                    <td>inisyukur@gmail.com</td>
                    <td><a href="" class="btn btn-info">Profil</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Salsabilla Azzahra</td>
                    <td>Blitar</td>
                    <td>11-02-2003</td>
                    <td>SMA Negeri 1 Blitar</td>
                    <td>salsabilus@gmail.com</td>
                    <td><a href="" class="btn btn-info">Profil</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Cheryllina Athalia</td>
                    <td>Tulungagung</td>
                    <td>24-02-2002</td>
                    <td>SMA Negeri 1 Boyolangu</td>
                    <td>cherylofficial@gmail.com</td>
                    <td><a href="" class="btn btn-info">Profil</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Adhelia Zafiera</td>
                    <td>Solo</td>
                    <td>22-02-2002</td>
                    <td>SMA Negeri 1 Solo</td>
                    <td>raradhelia@gmail.com</td>
                    <td><a href="" class="btn btn-info">Profil</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Chayra Fayyola</td>
                    <td>Tulungaung</td>
                    <td>12-02-2001</td>
                    <td>Institut Teknologi Bandung</td>
                    <td>chayra.fayy@gmail.com</td>
                    <td><a href="" class="btn btn-info">Profil</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#hapus" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
            </tbody>
        </table>
        <!-- Modal -->
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