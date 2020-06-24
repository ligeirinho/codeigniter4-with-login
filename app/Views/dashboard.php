<?= $this->extend('Auth\layout'); ?>

<style>
    i { color: white; }
    .nav-link { color: white !important; }
    .nav-item { color: white; }
    .nav-link:hover { color: #ffaf36 !important; text-decoration: underline; }
</style>

<?= $this->section('menu'); ?>
<?= $this->include("menu"); ?>
<?= $this->endSection('menu'); ?>
