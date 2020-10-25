<div class="container text-center p-3 my-3 rounded bg-white shadow">
    <div class="row">
        <div class="col-12">
            <h3 class="text-left">KUMPULAN SOAL</h3>
        </div>
    </div>
    <div class="row justify-content-between my-2">
        <div class="col-2 align-self-center">
            <h5 class=" my-auto text-left">Jelajahi Soal</h5>
        </div>
        <div class="col-3 col-lg-1">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#filter">Filter</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form>
                                <div class="form-group">
                                    <label for="cariSoal">Cari Soal</label>
                                    <input type="email" class="form-control" id="cariSoal" placeholder="Peleburan sel/Integral dari">
                                </div>
                                <div class="form-group">
                                    <label for="Materi">Urutkan Menurut</label>
                                    <select class="form-control" id="Materi">
                                        <option>Soal</option>
                                        <option>Poin</option>
                                        <option>Populer</option>
                                        <option>Sumber</option>
                                    </select>
                                </div>
                                <h6>Materi</h6>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Matematika" value="option1">
                                    <label class="form-check-label" for="Matematika">Matematika</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Fisika" value="option2">
                                    <label class="form-check-label" for="Fisika">Fisika</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Kimia" value="option2">
                                    <label class="form-check-label" for="Kimia">Kimia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Biologi" value="option2">
                                    <label class="form-check-label" for="Biologi">Biologi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Biologi" value="option2">
                                    <label class="form-check-label" for="Biologi">B. Indonesia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Biologi" value="option2">
                                    <label class="form-check-label" for="Biologi">B. Inggris</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-responsive-sm text-center">
                <thead class="table-dark">
                    <tr>
                        <th class="align-middle" scope="col" rowspan="2">SOAL</th>
                        <th class="align-middle" scope="col" rowspan="2">MATERI</th>
                        <th class="align-middle" scope="col" rowspan="2">SUMBER</th>
                        <th scope="col" colspan="3">USER</th>
                        <th class="align-middle" scope="col" rowspan="2">POIN</th>
                    </tr>
                    <tr>
                        <th scope="col">TOTAL</th>
                        <th scope="col">BENAR</th>
                        <th scope="col">RASIO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Peleburan antara sel telur dan....</a></th>
                        <td>Biologi</td>
                        <td>SIMAK UI 2018</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>5 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Tentukan rumus empiris...</a></th>
                        <td>Kimia</td>
                        <td>STAN 2017</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>10 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="">Tentukanlah hasil dari Integral...</a></th>
                        <td>Matematika</td>
                        <td>Ujian Mandiri ITB 2016</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>20 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Suatu campuran reaksi didalam...</a></th>
                        <td>Kimia</td>
                        <td>Ujian Mandiri UGM 2017</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>4 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Bentuk sederhana dari 4x +...</a></th>
                        <td>Matematika</td>
                        <td>UTBK 2019</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>22 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Peleburan antara sel telur dan....</a></th>
                        <td>Biologi</td>
                        <td>SIMAK UI 2018</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>5 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Tentukan rumus empiris...</a></th>
                        <td>Kimia</td>
                        <td>STAN 2017</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>10 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="">Tentukanlah hasil dari Integral...</a></th>
                        <td>Matematika</td>
                        <td>Ujian Mandiri ITB 2016</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>20 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Suatu campuran reaksi didalam...</a></th>
                        <td>Kimia</td>
                        <td>Ujian Mandiri UGM 2017</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>4 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Bentuk sederhana dari 4x +...</a></th>
                        <td>Matematika</td>
                        <td>UTBK 2019</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>22 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Peleburan antara sel telur dan....</a></th>
                        <td>Biologi</td>
                        <td>SIMAK UI 2018</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>5 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Tentukan rumus empiris...</a></th>
                        <td>Kimia</td>
                        <td>STAN 2017</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>10 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="">Tentukanlah hasil dari Integral...</a></th>
                        <td>Matematika</td>
                        <td>Ujian Mandiri ITB 2016</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>20 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Suatu campuran reaksi didalam...</a></th>
                        <td>Kimia</td>
                        <td>Ujian Mandiri UGM 2017</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>4 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Bentuk sederhana dari 4x +...</a></th>
                        <td>Matematika</td>
                        <td>UTBK 2019</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>22 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Peleburan antara sel telur dan....</a></th>
                        <td>Biologi</td>
                        <td>SIMAK UI 2018</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>5 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Tentukan rumus empiris...</a></th>
                        <td>Kimia</td>
                        <td>STAN 2017</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>10 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="">Tentukanlah hasil dari Integral...</a></th>
                        <td>Matematika</td>
                        <td>Ujian Mandiri ITB 2016</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>20 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Suatu campuran reaksi didalam...</a></th>
                        <td>Kimia</td>
                        <td>Ujian Mandiri UGM 2017</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>4 poin</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-left"><a href="#">Bentuk sederhana dari 4x +...</a></th>
                        <td>Matematika</td>
                        <td>UTBK 2019</td>
                        <td>1200</td>
                        <td>800</td>
                        <td>66%</td>
                        <td>22 poin</td>
                    </tr>
                </tbody>
            </table>
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
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>