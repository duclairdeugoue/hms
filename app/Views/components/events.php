<section class="section">
  <div class="container">
    <div class="row">
      <?php foreach ($eventsData as $eventData) : ?>
        <?= view_cell("\App\Libraries\RenderSubComponents::viewEvent", $eventData) ?>
      <?php endforeach ?>
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