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
            <a class="dropdown-item" href="<?= base_url('user/profil') ?>">My Profile</a>
            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log Out</a>
        </div>
    </li>
</ul>
</div>
</nav>