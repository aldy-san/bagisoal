<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/91e0a5b445.js" crossorigin="anonymous"></script>
  <link rel="icon" href="<?= base_url() ?>application/res/bs.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">
  <title>
    <?= $title; ?>
  </title>
</head>

<body>
  <!-- NAVIGATION -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow">
    <a class="navbar-brand ml-2" style="font-weight: bold;">BAGI<span class="text-warning">SOAL</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- NAVLINK -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item 
        <?php if ($this->uri->segment(1) == "") {
          echo "active";
        } ?>">
          <a class="nav-link" href="<?= base_url('') ?>">BERANDA<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown
        <?php if ($this->uri->segment(1) == "soal") {
          echo "active";
        } ?>">
          <a class="nav-link dropdown-toggle" href="#" id="soalDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SOAL
          </a>
          <div class="dropdown-menu" aria-labelledby="soalDropdown">
            <a class="dropdown-item" href="<?= base_url('soal') ?>">SEMUA</a>
            <a class="dropdown-item" href="<?= base_url('soal/matematika') ?>">MATEMATIKA</a>
            <a class="dropdown-item" href="<?= base_url('soal/fisika') ?>">FISIKA</a>
            <a class="dropdown-item" href="<?= base_url('soal/biologi') ?>">BIOLOGI</a>
            <a class="dropdown-item" href="<?= base_url('soal/kimia') ?>">KIMIA</a>
          </div>
        </li>

        <li class="nav-item 
        <?php if ($this->uri->segment(1) == "kompetisi") {
          echo "active";
        } ?>">
          <a class="nav-link" href="<?= base_url('kompetisi') ?>">KOMPETISI</a>
        </li>

        <li class="nav-item dropdown
        <?php if ($this->uri->segment(1) == "komunitas") {
          echo "active";
        } ?>">
          <a class="nav-link dropdown-toggle" href="#" id="komunitasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            KOMUNITAS
          </a>
          <div class="dropdown-menu" aria-labelledby="komunitasDropdown">
            <a class="dropdown-item" href="<?= base_url('komunitas/forum') ?>">BAGI <b>PERTANYAAN</b></a>
            <a class="dropdown-item" href="<?= base_url('komunitas/catatan') ?>">BAGI <b>CATATAN</b></a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= ($this->uri->segment(1) == "peringkat") ? "active" : ''; ?>" href="<?= base_url('peringkat') ?>">PERINGKAT</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#help">BANTUAN</a>
        </li>
      </ul>
      <!-- <form class="form-inline mx-auto my-2 d-md-none d-lg-block">
        <div class="input-group">
          <input class="form-control mr-2 input" type="search" placeholder="Cari" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-warning d-inline-block" type="submit"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form> -->