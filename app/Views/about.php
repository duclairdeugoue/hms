<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Header component -->
<?= view_cell("\App\Libraries\RenderComponents::viewHeader", $headerData) ?>

<!-- Breadcrumbs component -->
<?= view_cell("\App\Libraries\RenderComponents::viewBreadcrumbs", $breadcrumbsData) ?>


<section class="py-5 bg-light" id="next">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
        <figure class="img-absolute">
          <img src="images/food-1.jpg" alt="Free Website Template by Templateux" class="img-fluid">
        </figure>
        <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
      </div>
      <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
        <h2 class="heading">Welcome!</h2>
        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774" data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
      </div>

    </div>
  </div>
</section>

<div class="container section">

  <div class="row justify-content-center text-center mb-5">
    <div class="col-md-7 mb-5">
      <h2 class="heading" data-aos="fade-up">Leadership</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="block-2">
        <div class="flipper">
          <div class="front" style="background-image: url(images/person_3.jpg);">
            <div class="box">
              <h2>Will Peters</h2>
              <p>President</p>
            </div>
          </div>
          <div class="back">
            <!-- back content -->
            <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <div class="author d-flex">
              <div class="image mr-3 align-self-center">
                <img src="images/person_3.jpg" alt="">
              </div>
              <div class="name align-self-center">Will Peters <span class="position">President</span></div>
            </div>
          </div>
        </div>
      </div> <!-- .flip-container -->
    </div>

    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="block-2"> <!-- .hover -->
        <div class="flipper">
          <div class="front" style="background-image: url(images/person_1.jpg);">
            <div class="box">
              <h2>Jane Williams</h2>
              <p>Business Manager</p>
            </div>
          </div>
          <div class="back">
            <!-- back content -->
            <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <div class="author d-flex">
              <div class="image mr-3 align-self-center">
                <img src="images/person_1.jpg" alt="">
              </div>
              <div class="name align-self-center">Jane Williams <span class="position">Business Manager</span></div>
            </div>
          </div>
        </div>
      </div> <!-- .flip-container -->
    </div>

    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
      <div class="block-2">
        <div class="flipper">
          <div class="front" style="background-image: url(images/person_2.jpg);">
            <div class="box">
              <h2>Jeffrey Neddery</h2>
              <p>Marketing Director</p>
            </div>
          </div>
          <div class="back">
            <!-- back content -->
            <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <div class="author d-flex">
              <div class="image mr-3 align-self-center">
                <img src="images/person_2.jpg" alt="">
              </div>
              <div class="name align-self-center">Jeffrey Neddery <span class="position">Marketing Director</span></div>
            </div>
          </div>
        </div>
      </div> <!-- .flip-container -->
    </div>
  </div>
</div>
<!-- END .block-2 -->

<section class="section slider-section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Photos</h2>
        <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="slider-item">
            <a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
          <div class="slider-item">
            <a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a>
          </div>
        </div>
        <!-- END slider -->
      </div>

    </div>
  </div>
</section>
<!-- END section -->

<div class="section">
  <div class="container">

    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7 mb-5">
        <h2 class="heading" data-aos="fade">History</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="timeline-item" date-is='2019' data-aos="fade">
          <h3>More Branches Worldwide</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>

        <div class="timeline-item" date-is='2011' data-aos="fade">
          <h3>Company Full Blast</h3>
          <p>
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
          </p>
        </div>

        <div class="timeline-item" date-is='2008' data-aos="fade">
          <h3>The Birth of the Company</h3>
          <p>
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
          </p>
        </div>
      </div>
    </div>


  </div>
</div>

<!-- Footer component -->
<?= view_cell("\App\Libraries\RenderComponents::viewFooter", $footerData) ?>

<?= $this->endSection() ?>