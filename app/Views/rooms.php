<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

  <!-- Breadcrumbs components -->
  <?= view_cell("\App\Libraries\RenderComponents::viewBreadcrumbs", $breadcrumbsData) ?>

  <!-- Search Bar components -->
  <?= view_cell("\App\Libraries\RenderComponents::viewSearchbar") ?>

  <!-- Rooms components -->
  <?= view_cell("\App\Libraries\RenderComponents::viewRooms") ?>

  <!-- Rooms components -->
  <?= view_cell("\App\Libraries\RenderComponents::viewOffers") ?>

<?= $this->endSection() ?>