<div class="container p-3 my-3 rounded bg-white shadow-lg">
    <div class="row">
        <div class="col-12">
            <p class="h4 ">KOMPETISI</p>
        </div>
    </div>
    <div class="row justify-content-between my-2 mx-1">
        <div class="col-6 align-self-centere p-0">
            <h5 class="my-auto text-left">Jelajahi Kompetisi Di Seluruh Indonesia</h5>
        </div>
        <div class="col-6 col-lg-4 d-flex justify-content-end ">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#cari">
                Cari
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-responsive-sm text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Penyelenggara</th>
                        <th scope="col">Batas Pendaftaran</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="<?= base_url('kompetisi/show') ?>">ON MIPA 2020</a></th>
                        <td>Kemdikbud RI</td>
                        <td>8 Oktober 2020, 16:00 WIB</td>
                        <td>10 Oktober 2020 - 11 Oktober 2020</td>
                        <td><button type="button" class="btn btn-primary 
                        <?php if (!$this->session->userdata('email')) {
                            echo "disabled";
                        } ?>">Daftar</button></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="<?= base_url('kompetisi/show') ?>">ON MIPA 2020</a></th>
                        <td>Universtias Negeri Jakarta</td>
                        <td>8 Oktober 2020, 16:00 WIB</td>
                        <td>10 Oktober 2020 - 11 Oktober 2020</td>
                        <td><button type="button" class="btn btn-primary 
                        <?php if (!$this->session->userdata('email')) {
                            echo "disabled";
                        } ?>">Daftar</button></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="<?= base_url('kompetisi/show') ?>">ON MIPA 2020</a></th>
                        <td>Kemdikbud RI</td>
                        <td>8 Oktober 2020, 16:00 WIB</td>
                        <td>10 Oktober 2020 - 11 Oktober 2020</td>
                        <td><button type="button" class="btn btn-primary 
                        <?php if (!$this->session->userdata('email')) {
                            echo "disabled";
                        } ?>">Daftar</button></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="<?= base_url('kompetisi/show') ?>">ON MIPA 2020</a></th>
                        <td>Universtias Negeri Jakarta</td>
                        <td>8 Oktober 2020, 16:00 WIB</td>
                        <td>10 Oktober 2020 - 11 Oktober 2020</td>
                        <td><button type="button" class="btn btn-primary 
                        <?php if (!$this->session->userdata('email')) {
                            echo "disabled";
                        } ?>">Daftar</button></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="<?= base_url('kompetisi/show') ?>">ON MIPA 2020</a></th>
                        <td>Universtias Negeri Jakarta</td>
                        <td>8 Oktober 2020, 16:00 WIB</td>
                        <td>10 Oktober 2020 - 11 Oktober 2020</td>
                        <td><button type="button" class="btn btn-primary 
                        <?php if (!$this->session->userdata('email')) {
                            echo "disabled";
                        } ?>">Daftar</button></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="<?= base_url('kompetisi/show') ?>">ON MIPA 2020</a></th>
                        <td>Kemdikbud RI</td>
                        <td>8 Oktober 2020, 16:00 WIB</td>
                        <td>10 Oktober 2020 - 11 Oktober 2020</td>
                        <td><button type="button" class="btn btn-primary 
                        <?php if (!$this->session->userdata('email')) {
                            echo "disabled";
                        } ?>">Daftar</button></td>
                    </tr>
                    <tr>
                        <th scope="row"><a href="<?= base_url('kompetisi/show') ?>">ON MIPA 2020</a></th>
                        <td>Universtias Negeri Jakarta</td>
                        <td>8 Oktober 2020, 16:00 WIB</td>
                        <td>10 Oktober 2020 - 11 Oktober 2020</td>
                        <td><button type="button" class="btn btn-primary 
                        <?php if (!$this->session->userdata('email')) {
                            echo "disabled";
                        } ?>">Daftar</button></td>
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