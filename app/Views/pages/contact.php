<?= view('layout/header') ?>
<?= view('layout/navbar') ?>
<!-- contact-page -->
  <section class="newsletter bg-light" id="contact" style="background: url(<?= base_url('template/')?>images/pattern-bg.png) no-repeat;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 py-5 my-5">
          <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>
          <div class="subscribe-header text-center pb-3">
            <h3 class="section-title text-uppercase">Kirim Ulasan kamu</h3>
          </div>
          <form action="<?= base_url('/postMessage')?>" class="d-flex flex-wrap gap-2" method="post">
          <textarea
            name="message"
            class="form-control form-control-lg"
            placeholder="Your Message"
            rows="5">
          </textarea>
            <button class="btn btn-dark btn-lg text-uppercase w-100">kirim</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<?= view('layout/footer') ?>