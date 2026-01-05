<?= view('layout/header') ?>
<?= view('layout/navbar') ?>
<!-- contact-page -->
  <section class="newsletter bg-light" id="contact" style="background: url(<?= base_url('template/')?>images/pattern-bg.png) no-repeat;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 py-5 my-5">
          <div class="subscribe-header text-center pb-3">
            <h3 class="section-title text-uppercase">Sign Up for testimonial</h3>
          </div>
          <form action="<?= base_url('/postMessage')?>" class="d-flex flex-wrap gap-2" method="post">
            <input type="email" name="email" placeholder="Your Email Addresss" class="form-control form-control-lg">
            <input type="text" name="message" placeholder="Your Message" class="form-control form-control-lg">
            <button class="btn btn-dark btn-lg text-uppercase w-100">send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<?= view('layout/footer') ?>