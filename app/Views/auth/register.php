<?= view('layout/header')  ?>
<div class="container mt-5" style="max-width: 500px;">
<h3 class="text-center mb-4">Register</h3>


<?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<form action="/registerPost" method="post">
<div class="mb-3">
<label>Nama</label>
<input type="text" name="name" class="form-control" required>
</div>


<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>


<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>


<button class="btn btn-primary w-100">Register</button>
</form>


<p class="text-center mt-3">Sudah punya akun? <a href="/login">Login</a></p>
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