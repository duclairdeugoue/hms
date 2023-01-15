<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>


<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3">Events</h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="/">Home</a></li>
          <li>&bullet;</li>
          <li>Events</li>
        </ul>
      </div>
    </div>
  </div>

  <a class="mouse smoothscroll" href="#next">
    <div class="mouse-icon">
      <span class="mouse-wheel"></span>
    </div>
  </a>
</section>
<!-- END section -->

<section class="section blog-post-entry bg-light" id="next">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="100">

        <div class="media media-custom d-block mb-4 h-100">
          <a href="#" class="mb-4 d-block"><img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">Travel Hacks to Make Your Flight More Comfortable</a></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="media media-custom d-block mb-4 h-100">
          <a href="#" class="mb-4 d-block"><img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">5 Job Types That Aallow You To Earn As You Travel The World</a></h2>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="300">
        <div class="media media-custom d-block mb-4 h-100">
          <a href="#" class="mb-4 d-block"><img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">30 Great Ideas On Gifts For Travelers</a></h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. t is a paradisematic country, in which roasted parts of sentences.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="100">

        <div class="media media-custom d-block mb-4 h-100">
          <a href="#" class="mb-4 d-block"><img src="images/img_4.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">Travel Hacks to Make Your Flight More Comfortable</a></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="media media-custom d-block mb-4 h-100">
          <a href="#" class="mb-4 d-block"><img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">5 Job Types That Aallow You To Earn As You Travel The World</a></h2>
            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="300">
        <div class="media media-custom d-block mb-4 h-100">
          <a href="#" class="mb-4 d-block"><img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
          <div class="media-body">
            <span class="meta-post">February 26, 2018</span>
            <h2 class="mt-0 mb-3"><a href="#">30 Great Ideas On Gifts For Travelers</a></h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. t is a paradisematic country, in which roasted parts of sentences.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row" data-aos="fade">
      <div class="col-12">
        <div class="custom-pagination">
          <ul class="list-unstyled">
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><span>...</span></li>
            <li><a href="#">30</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>