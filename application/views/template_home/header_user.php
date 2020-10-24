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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>application/css/style.css">
    <title>
        <?= $title; ?>
    </title>
</head>

<body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <a class="navbar-brand ml-2" style="font-weight: bold;">BAGI<span class="text-warning">SOAL</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('user') ?>">BERANDA<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="soal-main.html">SOAL-SOAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kompetisi-main.html">KOMPETISI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="komunitas.html">KOMUNITAS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PERINGKAT
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">PROVINSI</a>
                        <a class="dropdown-item" href="#">KOTA</a>
                        <a class="dropdown-item" href="#">SEKOLAH</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#help">BANTUAN</a>
                </li>
            </ul>
            <form class="form-inline mx-auto my-2">
                <div class="input-group">
                    <input class="form-control mr-2 input" type="search" placeholder="Cari" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-warning d-inline-block" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav mr-md-3">
                <li class="nav-item d-inline">
                    <div class="text-white align-self-center text-right">
                        <p style="line-height: 25px" class="p-0 m-0"><?= $user['nama'] ?></p>
                        <p style="line-height: 25px" class="p-0 m-0"><?= $user['total_poin'] ?> Poin</p>
                    </div>
                </li>
                <li class="nav-item dropdown d-inline">
                    <a class="nav-link ml-md-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle d-inline-block" src="<?= base_url() ?>/application/res/<?= $user['foto']; ?>" width="40" height="40">
                    </a>
                    <div class="dropdown-menu" style="left: -100px;" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <a class="dropdown-item" href="#">Edit Profile</a>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>