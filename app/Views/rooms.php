<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3">Rooms</h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="/">Home</a></li>
          <li>&bullet;</li>
          <li>Rooms</li>
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

<!-- Search Bar components -->
<?= view_cell("\App\Libraries\SearchBar::viewSearchBar") ?>

<section class="section">
  <div class="container">
    <div class="row">
      <?= view_cell("\App\Libraries\Room::viewRoom") ?>
    </div>
  </div>
</section>

<section class="section bg-light">

  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade">Great Offers</h2>
        <p data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>

    <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
      <a href="#" class="image d-block bg-image-2" style="background-image: url('images/img_1.jpg');"></a>
      <div class="text">
        <span class="d-block mb-4"><span class="display-4 text-primary">$199</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
        <h2 class="mb-4">Family Room</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
      </div>
    </div>
    <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
      <a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('images/img_2.jpg');"></a>
      <div class="text order-1">
        <span class="d-block mb-4"><span class="display-4 text-primary">$299</span> <span class="text-uppercase letter-spacing-2">/ per night</span> </span>
        <h2 class="mb-4">Presidential Room</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <p><a href="#" class="btn btn-primary text-white">Book Now</a></p>
      </div>
    </div>

  </div>
</section>

<?= $this->endSection() ?>