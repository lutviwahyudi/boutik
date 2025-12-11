<!-- produk-page -->
  <section id="produk" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Best Selling Items</h4>
        <a href="<?= base_url('/allProduct') ?>" class="btn-link">View All Products</a>
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
            <?php foreach ($clothes as $c): ?>
               <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder">
                  <img src="<?= base_url($c['image']) ?>" alt="categories" class="product-image img-fluid">
                <a href="index.html" class="btn-icon btn-wishlist">
                  <svg width="24" height="24" viewBox="0 0 24 24">
                    <use xlink:href="#heart"></use>
                  </svg>
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="index.html"><?= esc($c['name']) ?></a>
                  </h5>
                  <p><?= esc($c['description']) ?></p>
                  <a href="index.html" class="text-decoration-none" data-after="Pesan sekarang"><span><?= 'Rp ' . number_format($c['price'], 0, ',', '.') ?></span></a>
                </div>
              </div>
            </div>
          </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div>
    </div>

    <!-- Product Detail Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Product Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <img id="modalProductImage" src="" alt="product" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h4 id="modalProductName" class="text-uppercase"></h4>
            <p id="modalProductDescription"></p>
            <h5 id="modalProductPrice" class="text-primary mt-3"></h5>
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

<!-- JavaScript to populate modal -->
<script>
document.querySelectorAll('.product-item').forEach(item => {
  item.addEventListener('click', function() {
    const image = this.querySelector('img').src;
    const name = this.querySelector('h5 a').textContent;
    const description = this.querySelector('p').textContent;
    const price = this.querySelector('[data-after]').textContent;
    
    document.getElementById('modalProductImage').src = image;
    document.getElementById('modalProductName').textContent = name;
    document.getElementById('modalProductDescription').textContent = description;
    document.getElementById('modalProductPrice').textContent = price;
    
    const modal = new bootstrap.Modal(document.getElementById('productModal'));
    modal.show();
  });
});
</script>
  </section>