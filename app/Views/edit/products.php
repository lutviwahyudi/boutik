<?=  view('layout/header') ?>

<div class="container mt-5">
    <h2 class="mb-4">Edit Produk</h2>
<form action="<?= base_url('editProducts/' . $clothes['id']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <!-- Nama Produk -->
    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="name" class="form-control"
               value="<?= esc($clothes['name']) ?>" required>
    </div>

    <!-- Harga -->
    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" name="price" class="form-control"
               value="<?= esc($clothes['price']) ?>" required>
    </div>

    <!-- Deskripsi -->
    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="4" required><?= esc($clothes['description']) ?></textarea>
    </div>

    <!-- Gambar Lama -->
    <div class="mb-3">
        <label class="form-label">Gambar Saat Ini</label><br>
        <img src="<?= base_url($clothes['image']) ?>" width="120" class="img-thumbnail mb-2">
        <input type="hidden" name="old_image" value="<?= $clothes['image'] ?>">
    </div>

    <!-- Upload Gambar Baru -->
    <div class="mb-3">
        <label class="form-label">Ganti Gambar (opsional)</label>
        <input type="file" name="image" class="form-control">
    </div>

    <!-- Tombol -->
    <button type="submit" class="btn btn-success">Update</button>
    <a href="<?= base_url('products') ?>" class="btn btn-danger">Batal</a>
</form>
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