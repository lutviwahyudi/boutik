<?= view('layout/header'); ?>
<?= view('layout/navbar'); ?>
  <section id="billboard" class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-center">
        <h3 class="section-title text-center mt-4" data-aos="fade-up">Zahira Boutique</h3>
        <div class="col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
          <p>Tempatnya fashion trendy & elegan untuk tampil percaya diri setiap hari.
Dari outfit casual sampai style kekinian, semua tersedia dengan kualitas terbaik dan harga ramah kantong.
Belanja sekarang, upgrade style kamu!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- home-page -->
  <section class="features py-5" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center" data-aos="fade-in" data-aos-delay="0">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#calendar"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Book An Appointment</h4>
            <p>Pelanggan bisa menjadwalkan janji untuk konsultasi atau layanan khusus.</p>
          </div>
        </div>
        <div class="col-md-4 text-center" data-aos="fade-in" data-aos-delay="300">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#shopping-bag"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Pick up in store</h4>
            <p>Pelanggan bisa memesan online dan mengambil barang langsung di toko.</p>
          </div>
        </div>
        <div class="col-md-4 text-center" data-aos="fade-in" data-aos-delay="600">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#gift"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Special packaging</h4>
            <p>Produk akan dikemas dengan desain atau kualitas premium.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="categories overflow-hidden">
    <div class="container">
      <div class="open-up" data-aos="zoom-out">
        <div class="row">
          <?php foreach ($brand as $b) : ?>
          <div class="col-md-4">
            <div class="cat-item image-zoom-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="<?= base_url($b['image']) ?>" alt="categories" class="product-image img-fluid" width="460px" height="495px">
                </a>
              </div>
              <div class="category-content">
                <div class="product-button">
                  <a href="index.html" class="btn btn-common text-uppercase"><?= $b['name'] ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="collection bg-light position-relative py-5">
    <div class="container">
      <div class="row">
        <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
        <div class="collection-item d-flex flex-wrap my-5">
          <div class="col-md-6 column-container">
            <div class="image-holder">
              <img src="<?= base_url('template/')?>images/produk/profile.jpg"  alt="collection" class="product-image img-fluid">
            </div>
          </div>
          <div class="col-md-6 column-container bg-white">
            <div class="collection-content p-5 m-0 m-md-5">
              <h3 class="element-title text-uppercase">Owner Zahira</h3>
              <p>Leni adalah seorang wirausahawan yang penuh semangat dengan minat yang kuat pada mode dan gaya hidup. Dengan visi kreatifnya, ia mendirikan Brown Boutique untuk menghadirkan koleksi mode yang stylish, elegan, dan terjangkau bagi komunitasnya. Tujuannya adalah memadukan tren modern dengan sentuhan identitas Indonesia.</p>
              <a href="https://www.instagram.com/leinni_wijayantidevi/" target="_blank" class="btn btn-dark text-uppercase mt-3">visit sosial media</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?= view('pages/product'); ?>
  <?= view('pages/testimoni'); ?>
  <?= view('pages/blog'); ?>

  <section class="logo-bar py-5 my-5">
    <div class="container">
      <div class="row">
        <div class="logo-content d-flex flex-wrap justify-content-between">
          <img src="<?= base_url('template/')?>images/logo1.png" alt="logo" class="logo-image img-fluid">
          <img src="<?= base_url('template/')?>images/logo2.png" alt="logo" class="logo-image img-fluid">
          <img src="<?= base_url('template/')?>images/logo3.png" alt="logo" class="logo-image img-fluid">
          <img src="<?= base_url('template/')?>images/logo4.png" alt="logo" class="logo-image img-fluid">
          <img src="<?= base_url('template/')?>images/logo5.png" alt="logo" class="logo-image img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="newsletter bg-light" id="contact" style="background: url(<?= base_url('template/')?>images/pattern-bg.png) no-repeat;">
  </section>
<?= view('layout/footer'); ?>