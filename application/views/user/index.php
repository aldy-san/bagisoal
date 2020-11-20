
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
	            <h3 class="mt-2 mb-4"><b>PERINGKAT</b></h3>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-4">
	            <h4>PROVINSI</h4>
	            <table class="table table-sm">
	              <thead class="table-dark">
	                <tr>
	                  <th scope="col">PROVINSI</th>
	                  <th scope="col">POIN</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td><a href="#">Jawa Timur</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">Jawa Barat</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">Jawa Tengah</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">Kalimantan Barat</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">Kalimantan Timur</a></td>
	                  <td>2234 poin</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>
	          <div class="col-md-4">
	            <h4>KOTA</h4>
	            <table class="table table-sm">
	              <thead class="table-dark">
	                <tr>
	                  <th scope="col">KOTA</th>
	                  <th scope="col">POIN</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td><a href="#">Bandung</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">Yogyakarta</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">Surabaya</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">Medan</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">Malang</a></td>
	                  <td>2234 poin</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>
	          <div class="col-md-4">
	            <h4>SEKOLAH</h4>
	            <table class="table table-sm">
	              <thead class="table-dark">
	                <tr>
	                  <th scope="col">SEKOLAH</th>
	                  <th scope="col">POIN</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td><a href="#">SMAN 3 Malang</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">SMAN 1 Sumenep</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">SMAN 3 Pamekasan</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">SMAN 1 Malang</a></td>
	                  <td>2234 poin</td>
	                </tr>
	                <tr>
	                  <td><a href="#">SMA 12 Jakarta</a></td>
	                  <td>2234 poin</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-12 col-md-3 mt-3">
	      <h4 class="mt-2 mb-4"><b>KOMUNITAS</b></h4>
	      <ul class="list-group border-0">
	        <a href="#" class="list-group-item list-group-item-action border-0">Berbagi Materi Kalkulus</a>
	        <a href="#" class="list-group-item list-group-item-action border-0">Berbagi Materi Kalkulus</a>
	        <a href="#" class="list-group-item list-group-item-action border-0">Berbagi Materi Kalkulus</a>
	        <a href="#" class="list-group-item list-group-item-action border-0">Berbagi Materi Kalkulus</a>
	        <a href="#" class="list-group-item list-group-item-action border-0">Berbagi Materi Kalkulus</a>
	        <a href="#" class="list-group-item list-group-item-action border-0">Berbagi Materi Kalkulus</a>
	        <a href="#" class="list-group-item list-group-item-action border-0">Berbagi Materi Kalkulus</a>
	        <a href="#" class="list-group-item list-group-item-action border-0">Berbagi Materi Kalkulus</a>
	        <button class="btn btn-outline-success rounded-0">Lebih..</button>
	      </ul>
	    </div>
	  </div>
	</div>