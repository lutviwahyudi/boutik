<nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center w-100">
            <div class="col-auto">
                <a class="navbar-brand text-white">
                    <img src="<?= base_url('template/') ?>images/zahira.png" width="112" height="40">
                </a>
            </div>

            <div class="col-auto">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('#home') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('#produk') ?>">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('#testimoni') ?>">Testimoni</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('#contact') ?>">Contact</a>
                            </li>


                               <!-- Jika user login, tampilkan foto profile -->
                            <?php if(session()->get('logged_in')): ?>
                                <?php 
                                    $foto = session()->get('foto'); // nanti ambil dari DB
                                    $name = session()->get('name'); // nanti ambil dari DB
                                    $fotoUrl = $foto ? base_url('uploads/'.$foto) : base_url('template/images/produk/profile.jpg'); 
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="/profile">
                                        <img 
                                            src="<?= $fotoUrl ?>" 
                                            alt="<?= $name ?>?>" 
                                            style="width:40px; height:40px; border-radius:50%; object-fit:cover;"
                                        >
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Login</a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>
