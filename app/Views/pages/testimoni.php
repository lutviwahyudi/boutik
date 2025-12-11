<!-- testimonial-page -->
  <section class="testimonials py-5 bg-light" id="testimoni">
    <div class="section-header text-center mt-5">
      <h3 class="section-title">Customer Testimonials</h3>
      <p class="section-subtitle mx-auto">Apa kata mereka tentang Zahira Boutik
    </div>
    <?php foreach($message as $msg): ?>
    <div class="swiper testimonial-swiper overflow-hidden my-5">
      <div class="swiper-wrapper d-flex">
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p><?= $msg['message'] ?></p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"><?= $msg['message'] ?></div>
    <?php endforeach; ?>
  </section>