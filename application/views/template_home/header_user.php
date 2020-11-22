<ul class="navbar-nav mr-md-3 d-flex ">
    <li class="nav-item">
        <div class="text-white align-self-center text-right">
            <p style="line-height: 25px" class="p-0 m-0"><?= $user['nama'] ?></p>
            <p style="line-height: 25px" class="p-0 m-0"><?= $user['total_poin'] ?> Poin</p>
        </div>
    </li>
    <li class="nav-item dropdown ">
        <a class="nav-link ml-md-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle d-inline-block" src="<?= base_url() ?>./assets/foto/<?= $user['foto']; ?>" width="40" height="40">
        </a>
        <div class="dropdown-menu" style="left: -100px;" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?= base_url('profil-saya') ?>"> <i class="fas fa-fw fa-sm fa-user text-dark"></i> Profil</a>
            <a class="dropdown-item" href="<?= base_url('edit-profil') ?>"> <i class="fas fa-fw fa-sm fa-cog text-dark"></i> Pengaturan</a>
            <hr class="my-1">
            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fas fa-fw fa-sm fa-sign-out-alt text-danger"></i> Keluar</a>
        </div>
    </li>
</ul>
</div>
</nav>