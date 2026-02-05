<?= view('layout/header'); ?>
<?= view('layout/navbar'); ?>
<div class="container">
   <div class="container my-5">
    <div class="row g-4">
        <?php foreach ($clothes as $c): ?>
            <?php $modalId = 'productModal_' . $c['id']; ?>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm border-0" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>" style="cursor:pointer;">
                    <img
                        src="<?= base_url($c['image']) ?>"
                        class="card-img-top"
                        alt="<?= esc($c['name']) ?>" 
                        style="height: 250px; object-fit: cover;"
                    >
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fs-6"><?= esc($c['name']) ?></h5>
                        <p class="card-text small"><?= esc($c['description']) ?></p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <span class="fw-bold text-dark">
                            <?= 'Rp ' . number_format($c['price'], 0, ',', '.') ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- MODAL DETAIL PRODUK -->
            <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title"><?= esc($c['name']) ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <img src="<?= base_url($c['image']) ?>" class="img-fluid rounded" style="object-fit:cover; width:100%; max-height:400px;">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold">
                                        <?= esc($c['name']) ?>
                                    </h5>
                                    <p><?= esc($c['description']) ?></p>

                                    <h4 class="text-danger fw-bold mb-3">
                                        <?= 'Rp ' . number_format($c['price'], 0, ',', '.') ?>
                                    </h4>

                                    <?php 
                                    $nama = urlencode($c['name']);
                                    $harga = urlencode('Rp ' . number_format($c['price'], 0, ',', '.'));
                                    $gambar = urlencode(base_url($c['image']));

                                    $waMessage = "Halo, saya mau pesan:%0A".
                                                "Produk: $nama%0A".
                                                "Harga: $harga%0A".
                                                "Gambar: $gambar";
                                    ?>

                                    <a href="https://wa.me/6281386225719?text=<?= $waMessage ?>" 
                                        target="_blank" 
                                        class="btn btn-dark btn-lg w-100 mt-3">
                                        Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= view('layout/footer'); ?>