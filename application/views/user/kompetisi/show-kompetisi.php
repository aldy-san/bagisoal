<div class="container p-3 my-3 rounded bg-white shadow">
    <p class="h2">Leaderboard</p>
    <p class="h3"><?= $kompetisi['nama'] ?></p>
    <p class="h6">Penyelenggara: <?= $kompetisi['penyelenggara'] ?></p>
    <!-- <p class="h6">Laman Resmi : <a href="https://pusatprestasinasional.kemdikbud.go.id/2020/03/03/pengumuman-petunjuk-pelaksanaan-kompetisi-nasional-mipa-kn-mipa-tahun-2020/">ONMIPA 2020</a></p> -->
    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th class="align-middle" scope="col" rowspan="2">Peringkat</th>
                    <th class="align-middle" scope="col" rowspan="2">User</th>
                    <th scope="col" colspan="5">Skor</th>
                </tr>
                <tr>
                    <th scope="col"><a href="<?= base_url('soal/jawab/') . $kompetisi['soal1'] ?>">Soal 1</a></th>
                    <th scope="col"><a href="<?= base_url('soal/jawab/') . $kompetisi['soal2'] ?>">Soal 2</a></th>
                    <th scope="col"><a href="<?= base_url('soal/jawab/') . $kompetisi['soal3'] ?>">Soal 3</a></th>
                    <th scope="col"><a href="<?= base_url('soal/jawab/') . $kompetisi['soal4'] ?>">Soal 4</a></th>
                    <th scope="col"><a href="<?= base_url('soal/jawab/') . $kompetisi['soal5'] ?>">Soal 5</a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pendaftar as $pendaftar) : ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><a href=""><?= $pendaftar['nama'] ?></a></td>
                        <?= $this->m_soal->cekTerjawab($pendaftar['id_user'], $kompetisi['soal1']) ? "<td class='table-success'><i class='fas fa-check text-success'></i></td>" : "<td></td>" ?>
                        <?= $this->m_soal->cekTerjawab($pendaftar['id_user'], $kompetisi['soal2']) ? "<td class='table-success'><i class='fas fa-check text-success'></i></td>" : "<td></td>" ?>
                        <?= $this->m_soal->cekTerjawab($pendaftar['id_user'], $kompetisi['soal3']) ? "<td class='table-success'><i class='fas fa-check text-success'></i></td>" : "<td></td>" ?>
                        <?= $this->m_soal->cekTerjawab($pendaftar['id_user'], $kompetisi['soal4']) ? "<td class='table-success'><i class='fas fa-check text-success'></i></td>" : "<td></td>" ?>
                        <?= $this->m_soal->cekTerjawab($pendaftar['id_user'], $kompetisi['soal5']) ? "<td class='table-success'><i class='fas fa-check text-success'></i></td>" : "<td></td>" ?>
                        <?php for ($i = 0; $i < 5; $i++) {
                        } ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>