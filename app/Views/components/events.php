<section class="section">
  <div class="container">
    <div class="row">
      <?php for ($i = 1; $i <= $eventsData; $i++) : ?>
        <?= view_cell("\App\Libraries\RenderSubComponents::viewEvent") ?>
      <?php endfor ?>
    </div>
  </div>
</section>
<!-- <div class="row" data-aos="fade">
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
  </div> -->
