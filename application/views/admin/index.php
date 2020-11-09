<div class="col-md-10">
    <div class="container my-3 rounded shadow">
        <div class="row">
            <nav aria-label="breadcrumb" class="w-100">
                <ol class="breadcrumb m-0 w-100">
                    <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container p-auto p-md-5 mt-3 rounded shadow">
        <div class="row my-3 text-white">
            <div class="col-12 my-2 col-lg-4">
                <div class="card-body bg-info">
                    <i class="fas fa-users d-inline mr-2"></i>
                    <h5 class="card-title d-inline">Jumlah Pengguna</h5>
                    <h6 class="display-4"><?= $pengguna ?></h6>
                    <a href="<?= base_url('admin/daftar_pengguna') ?>" class="text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></a>
                </div>
            </div>
            <div class="col-12 my-2 col-lg-4">
                <div class="card-body bg-success">
                    <i class="fas fa-folder d-inline mr-2"></i>
                    <h5 class="card-title d-inline">Jumlah Soal</h5>
                    <h6 class="display-4"><?= $soal ?></h6>
                    <a href="<?= base_url('admin/daftar_soal') ?>" class="text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></a>
                </div>
            </div>
            <div class="col-12 my-2 col-lg-4">
                <div class="card-body bg-warning">
                    <i class="fas fa-trophy d-inline mr-2"></i>
                    <h5 class="card-title d-inline">Jumlah Kompetisi</h5>
                    <h6 class="display-4"><?= $kompetisi ?></h6>
                    <a href="<?= base_url('admin/daftar_kompetisi') ?>" class="text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></a>
                </div>
            </div>
        </div>
        <div class="row my-3 text-white justify-content-around">
            <div class="col-12 my-2 col-lg-4">
                <div class="card-body bg-danger">
                    <i class="fas fa-handshake d-inline mr-2"></i>
                    <h5 class="card-title d-inline">Jumlah Mitra</h5>
                    <h6 class="display-4"><?= $mitra ?></h6>
                    <a href="<?= base_url('admin/daftar_mitra') ?>" class="text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></a>
                </div>
            </div>
            <div class="col-12 my-2 col-lg-4">
                <div class="card-body bg-secondary">
                    <i class="fas fa-users-cog d-inline mr-2"></i>
                    <h5 class="card-title d-inline">Jumlah Admin</h5>
                    <h6 class="display-4"><?= $admin ?></h6>
                    <a href="<?= base_url('admin/daftar_admin') ?>" class="text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container p-5 mt-3 rounded shadow" id="grafik">
        <div class="row">
            <div class="col-12">
                <h2>Grafik Pengguna</h2>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col-12 col-md-6">
                <h4>Aktifitas Pengguna</h4>
                <div id="piechart"></div>
            </div>
            <div class="col-12 col-md-6">
                <h4>Keaktifan Pengguna</h4>
                <div id="chart_div"></div>
            </div>
        </div>
    </div> -->
    <div class="container p-5 my-3 rounded shadow" id="riwayat">
        <div class="row">
            <div class="col-12">
                <h2>Riwayat Aktivitas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-sm table-responsive-sm hide-scroll  text-center">
                    <thead class="table-dark">
                        <tr>
                            <th class="" scope="col">ID</th>
                            <th class="" scope="col">WAKTU</th>
                            <th class="" scope="col">AKTIVITAS</th>
                            <th class="" scope="col">ADMIN</th>
                            <th class="" scope="col">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($log as $log) : ?>
                            <?php $admin = $this->db->get_where('admin', array('id_admin' => $log->id_admin))->row_array(); ?>
                            <tr>
                                <td><?= $log->id ?></td>
                                <td><?php $stamp = strtotime($log->tanggal);
                                    echo date("d F Y", $stamp); ?></td>
                                <td><?= $log->keterangan . " " . $log->data ?></td>
                                <td><?= $admin['nama_admin'] ?></td>
                                <td><a href="#" class="btn btn-info">DETAIL</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 d-flex justify-content-center">
                <a href="" class="btn btn-primary ">Lihat lebih..</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['ga ngapa-ngapain', 11],
            ['Melihat Soal', 2],
            ['Menjawab Soal', 2],
            ['MengikutI Kompetisi', 2],
        ]);

        var options = {
            title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Mon', 20, 28, 38, 45],
            ['Tue', 31, 38, 55, 66],
            ['Wed', 50, 55, 77, 80],
            ['Thu', 77, 77, 66, 50],
            ['Fri', 68, 66, 22, 15]
            // Treat first row as data as well.
        ], true);

        var options = {
            legend: 'none'
        };

        var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));

        chart.draw(data, options);
    }
</script>