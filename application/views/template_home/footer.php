<!-- FOOTER -->
<div id="help" class="container-fluid p-md-3 mt-5 text-center rounded shadow-lg">
  <div class="row mx-md-5 px-md-5 py-3">
    <div class="col-12 col-md-4 w-25 mb-4">
      <h5 class="mb-3">Tentang</h5>
      <p class="text-justify">
        Website ini berfungsi untuk memberikan layanan media informasi kepada siswa-siswi Indonesia khususnya SMA yang kesulitan untuk mencari latihan soal.
      </p>
    </div>
    <div class="col-12 col-md-4 w-25 mb-4">
      <h5 class="mb-3">Sosial Media</h5>
      <ul class="list-group list-group-horizontal w-auto mx-auto">
        <li class="list-group-item border-0 mx-auto">
          <a href="" class="text-dark">
            <i class="fab fa-facebook fa-2x my-2"></i>
          </a>
        </li>
        <li class="list-group-item border-0 mx-auto">
          <a href="" class="text-dark">
            <i class="fab fa-twitter fa-2x my-2 "></i>
          </a>
        </li>
        <li class="list-group-item border-0 mx-auto">
          <a href="" class="text-dark">
            <i class="fab fa-instagram fa-2x my-2"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="col-12 col-md-4 w-25 mb-4">
      <h5 class="mb-3">Kontak</h5>
      <ul class="list-group text-left">
        <li class="list-group-item border-0">
          <a href="" style="text-decoration: none;" class="text-dark">
            <i class="fas fa-envelope fa-lg d-inline mr-2"></i>
            <p class="h6 d-inline align-items-center">bagisoal@gmail.com</p>
          </a>
        </li>
        <li class="list-group-item border-0">
          <a href="" style="text-decoration: none;" class="text-dark">
            <i class="fas fa-phone fa-lg d-inline mr-2"></i>
            <p class="h6 d-inline align-items-center">0877-1234-1234 (Moshi)</p>
          </a>
        </li>
        <li class="list-group-item border-0">
          <a href="" style="text-decoration: none;" class="text-dark">
            <i class="fas fa-map-marker-alt fa-lg d-inline mr-2"></i>
            <p class="h6 d-inline align-items-center">Indonesia</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mt-3">
      Copyright © 2020 BAGISOAL
    </div>
  </div>
</div>
<!-- </div> -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
<script>
  $('.custom-file-input').on('change', function() {
    //get the file name
    var fileName = $(this).val().split('\\').pop();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  })
</script>
</body>

</html>