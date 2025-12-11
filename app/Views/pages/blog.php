<!-- blog-page -->
  <section class="blog py-5" id="blog">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Read Blog Posts</h4>
        <a href="index.html" class="btn-link">View All</a>
      </div>
      <div class="row">
        <?php foreach ($blog as $bl) : ?>
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
                <img src="<?= $bl['image']; ?>" alt="image" class="post-grid-image img-fluid">
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> <?= $bl['time']?></span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="index.html"><?= $bl['title']?></a>
              </h5>
              <p><?= $bl['description']?></p>
            </div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>