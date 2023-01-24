<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Header Component -->
<?= view_cell("\App\Libraries\RenderComponents::viewHeader", $headerData) ?>

<section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade-up">
        <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span> Hotel</span>
        <h1 class="heading">A Best Place To Stay</h1>
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

<!-- Search Bar components -->
<?= view_cell("\App\Libraries\RenderComponents::viewSearchbar") ?>


<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
        <figure class="img-absolute">
          <img src="images/food-1.jpg" alt="Image" class="img-fluid">
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

<section class="section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
        <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>
    <div class="row">
      <!-- Rooms components -->
      <?= view_cell("\App\Libraries\RenderComponents::viewRooms", $roomsData) ?>

    </div>
  </div>
</section>


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


<!-- END section -->
<section class="section testimonial-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">People Says</h2>
      </div>
    </div>
    <div class="row">
      <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; Jean Smith</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>


        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; Jean Smith</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

      </div>
      <!-- END slider -->
    </div>

  </div>
</section>

<section class="section blog-post-entry bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">Events</h2>
        <p data-aos="fade-up">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>
    <div class="row">
      <!-- Events component -->
      <?= view_cell("\App\Libraries\RenderComponents::viewEvents", $eventsData) ?>
    </div>
  </div>
</section>

<!-- Footer component -->
<?= view_cell("\App\Libraries\RenderComponents::viewFooter", $footerData) ?>

<?= $this->endSection() ?>