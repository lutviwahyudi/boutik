<?=  view('layout/header')?>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Admin Panel</a>

        <div class="ms-auto text-white">
            <?= session()->get('name'); ?> |
            <a href="/logout" class="text-white text-decoration-none">Logout</a>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container my-5">

    <h4 class="mb-4">Dashboard</h4>

    <div class="row g-4">

        <!-- CARD USERS -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Total Users</h6>
                    <h3 class="fw-bold"><?= count(array_filter($user, fn($u) => $u['role'] == 2)); ?></h3>
                    <small class="text-muted">User terdaftar</small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Jumlah Produk</h6>
                    <h3 class="fw-bold"><?= count(array_filter($clothes, fn($c) => $c['id'])); ?></h3>
                    <small class="text-muted"><a href="<?= base_url('/products')?>" class="btn-link">Lihat semua produk</a></small>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Ulasan Customer</h6>
                    <h3 class="fw-bold"><?= count(array_filter($message, fn($c) => $c['id'])); ?></h3>
                    <small class="text-muted"><a href="<?=  base_url('/ulasan') ?>" class="btn-link">lihat semua ulasan</a></small>
                </div>
            </div>
        </div>

    </div>

    <!-- TABLE -->
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-white fw-bold">
            Quick Info
        </div>
        <div class="card-body">
            <p class="mb-1">Login sebagai: <strong>Administrator</strong></p>
            <p class="mb-0">Email: <?= session()->get('email'); ?></p>
            <p class="mb-0"><a href="<?= base_url('/') ?>" class="btn-link" target="_blank">Lihat Website</a></p>
        </div>
    </div>
</div>

<script src="<?= base_url('template')?>/js/jquery.min.js"></script>
  <script src="<?= base_url('template')?>/js/plugins.js"></script>
  <script src="<?= base_url('template')?>/js/SmoothScroll.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="<?= base_url('template/')?>js/script.min.js"></script>
</body>

</html>
