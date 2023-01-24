<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Header component -->
<?= view_cell("\App\Libraries\RenderComponents::viewHeader", $headerData) ?>

<!-- Breadcrumbs component -->
<?= view_cell("\App\Libraries\RenderComponents::viewBreadcrumbs", $breadcrumbsData) ?>

<!-- Event component -->
<?= view_cell("\App\Libraries\RenderComponents::viewEvents", $eventsData) ?>



<!-- Footer component -->
<?= view_cell("\App\Libraries\RenderComponents::viewFooter", $footerData) ?>

<?= $this->endSection() ?>