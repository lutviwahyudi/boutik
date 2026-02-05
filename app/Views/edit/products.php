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
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= base_url('dashboard') ?>" class="btn btn-secondary">Batal</a>
</form>
</div>
<?=  view('layout/footer') ?>