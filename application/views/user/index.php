<div class="container p-3 my-3 bg-white shadow">
	<div class="row">
		<div class="col-12">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner p-3">
					<div class="carousel-item active">
						<img src="<?= base_url() ?>/application/res/onmipa.png" class="rounded-lg d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?= base_url() ?>/application/res/calcup.jpg" class="rounded-lg d-block w-100 " alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?= base_url() ?>/application/res/bioits.jpg" class="rounded-lg d-block w-100 " alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div class="row text-center p-1">
		<div class="col-12 col-sm-12 col-md-9">
			<div class="container ">
				<div class="row ">
					<div class="col-12">
						<h3 class="mt-2 mb-4"><b>SOAL TERBARU</b></h3>
						<table class="table table-sm table-responsive-sm hide-scroll">
							<thead class="table-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">SOAL</th>
									<th scope="col">MATERI</th>
									<th scope="col">SUMBER</th>
									<th scope="col">POIN</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($soal as $soal) : ?>
									<tr>
										<th scope="row"><?= ++$no ?></th>
										<td><a href="<?= base_url('soal/jawab/' . $soal->kode_soal) ?>"> <?= substr($soal->soal, 0, 50) ?>...</a></td>
										<td><?= $soal->materi ?></td>
										<td><?= $soal->sumber ?></td>
										<td><?= $soal->poin ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h3 class="mt-2 mb-4"><b>PENGGUNA TERBAIK</b></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-lg">
							<thead class="table-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">NAMA</th>
									<th scope="col">POIN</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0; ?>
								<?php foreach ($user_terbaik as $user_terbaik) : ?>
									<tr>
										<td scope="row"><?= ++$no ?></td>
										<td class="text-left"><a href="#"><?= $user_terbaik->nama ?></a></td>
										<td><?= $user_terbaik->total_poin ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="border-left col-12 col-md-3 mt-3">
			<h4 class="mt-2 mb-4"><b>CATATAN</b></h4>
			<ul class="list-group">
				<?php foreach ($catatan as $catatan) : ?>
					<a href="<?= base_url('catatan/showcatatan/') ?><?= $catatan->id_catatan; ?>" class="shadow-sm list-group-item list-group-item-action border-0"><?= $catatan->judul_catatan; ?></a>
				<?php endforeach; ?>
				<a href="#" class="btn btn-outline-secondary rounded-0">Lebih..</a>
			</ul>
			<h4 class="mt-2 my-4"><b>FORUM</b></h4>
			<ul class="list-group">
				<?php foreach ($forum as $forum) : ?>
					<a href="<?= base_url('forum/showforum/') ?><?= $forum->id_pertanyaan; ?>" class="shadow-sm list-group-item list-group-item-action border-0"><?= $forum->judul_pertanyaan; ?></a>
				<?php endforeach; ?>
				<a href="#" class="btn btn-outline-secondary rounded-0">Lebih..</a>
			</ul>
		</div>
	</div>
</div>