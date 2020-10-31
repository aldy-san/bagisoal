<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('admin') ?>">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Kompetisi</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container my-3 shadow p-md-5">
        <?= $this->session->flashdata('message'); ?>
        <h3><i class="fas fa-trophy mr-2"></i></i>DAFTAR KOMPETISI</h3>
        <hr>
        <a href="<?= base_url('tambah/kompetisi') ?>" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Kompetisi</a>
        <table class="table table-sm table-responsive-sm text-center table-striped">
            <thead>
                <tr>
                    <th scope="col" class="align-middle" rowspan="2">No</th>
                    <th scope="col" class="align-middle" rowspan="2">Nama</th>
                    <th scope="col" class="align-middle" rowspan="2">Penyelenggara</th>
                    <th class="align-middle" colspan="3">Tanggal</th>
                    <th scope="col" class="align-middle" colspan="3" rowspan="2">Aksi</th>
                </tr>
                <tr>
                    <th scope="col" class="align-middle">Batas Pendaftaran</th>
                    <th scope="col" class="align-middle">Dimulai</th>
                    <th scope="col" class="align-middle">Berakhir</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = $this->uri->segment(3);
                foreach ($kompetisi as $kom) : ?>
                    <tr>
                        <th scope="row"><?= ++$no ?></th>
                        <td><?= $kom->nama ?></td>
                        <td><?= $kom->penyelenggara ?></td>
                        <td><?php $stamp = strtotime($kom->batasPendaftaran);
                            echo date("d F Y", $stamp); ?></td>
                        <td><?php $stamp = strtotime($kom->mulai);
                            echo date("d F Y", $stamp); ?></td>
                        <td><?php $stamp = strtotime($kom->berakhir);
                            echo date("d F Y", $stamp); ?></td>
                        <td><a href="" class="btn btn-info">Detail</a></td>
                        <td><a href="<?= base_url('edit/kompetisi/' . $kom->kode_kompetisi) ?>" class="btn btn-warning text-white"><i class="fas fa-edit"></i></a></td>
                        <td onclick="return confirm('yakin?')"><a type="button" href="<?= base_url('admin/hapus_kompetisi/' . $kom->kode_kompetisi) ?>" id="btn-delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Modal -->
        <!-- <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Kompetisi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin menghapus Kompetisi ini?
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
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>