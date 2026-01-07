<?= view('layout/header') ?>
<?= view('layout/navbar') ?>
<div class="container my-5">
  <div class="row">

    <!-- PROFILE CARD -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm text-center">
        <div class="card-body">
          <img src="<?= base_url('uploads/' . $user['image']); ?>"
          class="rounded-circle mb-3"
          width="120" height="120"
          style="object-fit: cover;"
          id="previewImg">


          <h5 class="fw-bold"><?= $user['name'] ?></h5>
          <p class="text-muted mb-1"><?= $user['email'] ?></p>
          <span class="badge bg-primary">
          <?php if ($user['role'] == 2){
            echo "Customer";
          } else {
            echo "Admin";
          }?>      
          </span>
          <div class="d-grid mt-4">
            <a href="<?= base_url('/edit-user')?>" class="btn btn-primary">
              Edit Profile
            </a>
          </div>
          <div class="d-grid mt-4">
            <a href="<?= base_url('/logout') ?>" class="btn btn-danger">
              Logout
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PROFILE DETAIL -->
    <div class="col-md-8">
      <div class="card shadow-sm">
        <div class="card-header fw-bold">
          Informasi Profile
        </div>

        <div class="card-body">
          <div class="row mb-3">
            <div class="col-sm-4 fw-semibold">Nama</div>
            <div class="col-sm-8"><?= $user['name'] ?></div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-4 fw-semibold">Email</div>
            <div class="col-sm-8"><?= $user['email'] ?></div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-4 fw-semibold">No HP</div>
            <div class="col-sm-8"><?= $user['nomer'] ?? '-' ?></div>
          </div>

          <div class="row mb-3">
            <div class="col-sm-4 fw-semibold">Bergabung</div>
            <div class="col-sm-8">
              <?= date('d M Y', strtotime($user['created_at'])) ?>
            </div>
          </div>


        </div>
      </div>
    </div>

  </div>
</div>

<?= view('layout/footer') ?>
