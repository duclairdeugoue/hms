<section class="section">
  <div class="container">
    <div class="row">
      <?php for ($i = 1; $i <= $eventsData; $i++) : ?>
        <?= view_cell("\App\Libraries\RenderSubComponents::viewEvent") ?>
      <?php endfor ?>
    </div>
  </div>
</section>
