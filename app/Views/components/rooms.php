<section class="section">
  <div class="container">
    <div class="row">
      <?php foreach ($roomsData as $roomData) : ?>
        <?= view_cell("\App\Libraries\RenderSubComponents::viewRoom", $roomData) ?>
      <?php endforeach ?>
    </div>
  </div>
</section>