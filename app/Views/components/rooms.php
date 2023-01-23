<section class="section">
  <div class="container">
    <div class="row">
      <?php for($i = 1; $i <= $roomsData; $i++ ): ?>
        <?= view_cell("\App\Libraries\RenderSubComponents::viewRoom") ?>
      <?php endfor ?>
    </div>
  </div>
</section>