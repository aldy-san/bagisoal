<div class="container p-3 my-3 rounded">
    <div class="row">
        <div class="col-md-10 col-12 shadow p-3">
            <div class="container">
                <div class="row">
                    <h2>Berbagilah pertanyaan dengan semua orang</h2>
                </div>
                <div class="row my-3 justify-content-between">
                    <a type="button" class="btn btn-dark px-3 shadow" href="<?= base_url('forum/tulis') ?>">Tanya Sesuatu</a>
                </div>
                <?php foreach ($pertanyaan as $p) : ?>
                    <div class="row shadow-sm py-3">
                        <div class="col-1 text-center text-dark">
                            <?php
                            $vote_up = $this->db->get_where('votes', ['id_pertanyaan' => $p->id_pertanyaan, 'up_down' => 1])->num_rows();
                            $vote_down = $this->db->get_where('votes', ['id_pertanyaan' => $p->id_pertanyaan, 'up_down' => -1])->num_rows();
                            $vote = $vote_up - $vote_down;
                            ?>
                            <p class="my-1"><b class="badge badge-sm badge-danger"><?= $vote ?></b> Votes</p>
                            <p class="my-1"><b class="badge badge-sm badge-warning text-white"><?= $p->jawaban ?></b> Jawaban</p>
                            <p class="my-1"><b class="badge badge-sm badge-success"><?= $p->melihat ?></b> Melihat</p>
                        </div>
                        <div class="col-11  p-2">
                            <h6 class="m-0 d-flex align-items-center">
                                <img src="<?= base_url() ?>./assets/foto/<?= $p->foto; ?>" width="26" height="26" class="rounded-circle mr-1">
                                <a href="" style="text-decoration: none;" class="text-dark"><b><?= $p->nama; ?></b></a>
                            </h6>
                            <div class="pt-2">
                                <a class="h5 btn-klik" style="text-decoration: none; cursor:pointer;" href="<?= base_url('forum/showforum/') ?><?= $p->id_pertanyaan; ?>"><?= $p->judul_pertanyaan; ?></a>
                                <p class="my-1">
                                    <?= $p->pertanyaan; ?>
                                </p>
                            </div>
                            <!-- <div class="row">
                                <div class="col-12">
                                    <a href="#" class="badge badge-info">#Tags</a>
                                    <a href="#" class="badge badge-info">#Tags</a>
                                </div>
                                <div class="col-12">
                                </div>
                            </div> -->
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="row justify-content-center mt-4">
                    <div class="col-4">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2 sidebar-outer text-center d-none d-sm-block">
            <div class="position-fixed col-2 shadow p-2 rounded">
                <div class="text-left">
                    <h2 class="text-center p-4">Top User</h2>
                    <?php foreach ($top_user as $top) : ?>
                        <div class="my-2">
                            <img src="<?= base_url() ?>./assets/foto/<?= $top['foto']; ?>" width="24" height="24" class="rounded-circle mr-2">
                            <a href=""><?= $top['nama']; ?></a>
                            <span class="badge badge-pill badge-light float-right"><?= $top['total_poin']; ?> Poin</span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>