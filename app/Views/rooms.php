<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Header component -->
<?= view_cell("\App\Libraries\RenderComponents::viewHeader", $headerData) ?>

<!-- Breadcrumbs component -->
<?= view_cell("\App\Libraries\RenderComponents::viewBreadcrumbs", $breadcrumbsData) ?>

<!-- Search Bar component -->

<!-- Rooms component -->
<?= view_cell("\App\Libraries\RenderComponents::viewRooms",  $roomsData)?>

<!-- Offers component -->
<?= view_cell("\App\Libraries\RenderComponents::viewOffers") ?>

<!-- Footer component -->
<?= view_cell("\App\Libraries\RenderComponents::viewFooter", $footerData) ?>

<?= $this->endSection() ?>