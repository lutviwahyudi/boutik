<?= view('layout/header') ?>
<?= view('layout/navbar') ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow-sm">
        <div class="card-header text-center fw-bold">
          Edit Profile
        </div>

        <div class="card-body">
          <form action="<?= base_url('/edit-user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">

          <div class="text-center mb-4">
            <img src="<?= $user['image']?>"
              class="rounded-circle mb-3"
              width="120" height="120"
              style="object-fit: cover;"
              id="previewImg">

          <div>
            <input type="file" 
                  name="image" 
                  class="form-control"
                  accept=".jpg,.jpeg,.png"
                  onchange="previewImage(event)">
          </div>
        </div>

            <!-- Nama -->
            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" name="name" class="form-control" 
                     value="<?= $user['name'] ?? '' ?>" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control"
                     value="<?= $user['email'] ?? '' ?>" required>
            </div>

            <!-- No HP -->
            <div class="mb-3">
              <label class="form-label">No HP</label>
              <input type="text" name="nomer" class="form-control"
                     value="<?= $user['nomer'] ?? '' ?>">
            </div>

            <!-- Password (opsional kalau edit) -->
            <div class="mb-3">
              <label class="form-label">Password Baru</label>
              <input type="password" name="password" class="form-control"
                     placeholder="Kosongkan jika tidak diganti">
            </div>

            <!-- Button -->
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                Simpan Perubahan
              </button>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</div>

<?= view('layout/footer') ?>
