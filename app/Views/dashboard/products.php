<?= view('layout/header') ?>
  <div class="container mt-5">
    <h2>Daftar Produk zahira boutik</h2>
    <input type="text"
       id="search"
       class="form-control mb-3"
       placeholder="Cari produk...">
    <a href="<?= base_url('dashboard') ?>" class="btn btn-warning btn-sm mb-3">Back to Dashboard</a>
    <a href="<?= base_url('/addProducts') ?>" class="btn btn-success btn-sm mb-3">Add Product</a>
    <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">price</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody id="table-body">
         <?= view('dashboard/_tableProducts', ['clothes' => $clothes]) ?>
        </tbody>
      </table>
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

<script>
let timer;

document.getElementById('search').addEventListener('input', function () {
    clearTimeout(timer);
    const q = this.value;

    timer = setTimeout(() => {
        fetch('search?q=' + encodeURIComponent(q))
            .then(res => res.text())
            .then(html => {
                document.getElementById('table-body').innerHTML = html;
            });
    }, 400);
});
</script>




