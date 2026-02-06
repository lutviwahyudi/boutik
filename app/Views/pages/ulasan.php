<?= view('layout/header') ?>
  <div class="container mt-5">
    <h2>Daftar Ulasan Customer</h2>
        <a href="<?= base_url('dashboard') ?>" class="btn btn-warning btn-sm mb-3">Back to Dashboard</a>
        <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Nomor</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($message as $msg) : ?>
          <tr>
          <th scope="row"><?= $no++ ?></th>
            <td><?= $msg['name'] ?></td>
            <td><?= $msg['email'] ?></td>
            <td><?= $msg['nomer'] ?></td>
            <td><?= $msg['message'] ?></td>
          </tr>
          <?php endforeach; ?>
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